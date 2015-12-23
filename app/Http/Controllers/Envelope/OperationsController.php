<?php namespace App\Http\Controllers\Envelope;

use App\Envelope;
use App\Http\Controllers\AbstractController;
use App\Outcome;
use App\Revenue;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Operations tab for envelope
 */
class OperationsController extends AbstractController
{

    /**
     * Render panel with navigation and table
     * @param  string $envelopeId Envelope primary key
     * @param  string|null $month Date within the month to consider (default to current month)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getTable($envelopeId, $month = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $month->startOfMonth();

        $operations = $envelope->operationsInPeriod($month, $month->copy()->endOfMonth());

        $data = [
            'envelope' => $envelope,
            'operations' => $operations,
            'month' => $month,
            'prevMonth' => $month->copy()->subMonth(),
            'nextMonth' => $month->copy()->addMonth(),
        ];

        return view('envelope.operations.table', $data);
    }

    /**
     * Render table row with operation details
     * @param  string $envelopeId Envelope primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getRow($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $data = [
            'envelope' => $envelope,
            'operation' => $operation,
        ];

        return view('envelope.operations.row', $data);
    }

    /**
     * Add new operation
     * @param  \Illuminate\Http\Request $request
     * @param  string $envelopeId Envelope primary key
     * @return void
     */
    public function postAdd(Request $request, $envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $this->validate($request, [
            'type' => 'required|in:revenue,outcome',
            'envelope_id' => 'required_if:type,outcome|exists:envelopes,id,account_id,'.$envelope->account_id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $this->save($request, $envelope);
    }

    /**
     * Render table row with operation edit fields
     * @param  string $envelopeId Envelope primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getUpdate($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $data = [
            'envelope' => $envelope,
            'operation' => $operation,
        ];

        return view('envelope.operations.update', $data);
    }

    /**
     * Update existing operation
     * @param  \Illuminate\Http\Request $request
     * @param  string $envelopeId Envelope primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return void
     */
    public function postUpdate(Request $request, $envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $this->validate($request, [
            'type' => 'required|in:revenue,outcome',
            'envelope_id' => 'required_if:type,outcome|exists:envelopes,id,account_id,'.$envelope->account_id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $operation->fill([
            'envelope_id' => $request->get('envelope_id'),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }

    /**
     * Delete existing operation
     * @param  string $envelopeId Envelope primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return void
     */
    public function postDelete($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $operation->delete();
    }

    /**
     * Save request inputs into envelope's operation
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Envelope $envelope Envelope
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    private function save(Request $request, Envelope $envelope, $operation = null) {
        if ($request->input('type') === 'revenue') {
            $this->saveRevenue($request, $envelope, $operation);
        } else if ($request->input('type') === 'outcome') {
            $this->saveOutcome($request, $operation);
        }
    }

    /**
     * Save request inputs into envelope's revenue
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Envelope $envelope Envelope
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    private function saveRevenue(Request $request, Envelope $envelope, $operation = null) {
        if (is_null($operation)) {
            $operation = new Revenue();
        }

        $operation->fill([
            'envelope_id' => $request->get('envelope_id'),
            'account_id' => $envelope->account->id,
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }

    /**
     * Save request inputs into envelope's outcome
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    private function saveOutcome(Request $request, $operation = null) {
        if (is_null($operation)) {
            $operation = new Outcome();
        }

        $operation->fill([
            'envelope_id' => $request->get('envelope_id'),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }

}
