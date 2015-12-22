<?php namespace App\Http\Controllers\Envelope;

use App\Envelope;
use App\Http\Controllers\AbstractController;
use App\Outcome;
use App\Revenue;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OperationsController extends AbstractController
{
    /**
     * List operations related to one envelope (second tab)
     * @param  string $envelopeId Envelope ID
     * @return Illuminate\Http\Response View to render
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

    public function getRow($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $data = [
            'envelope' => $envelope,
            'operation' => $operation,
        ];

        return view('envelope.operations.row', $data);
    }

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

    public function getUpdate($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $data = [
            'envelope' => $envelope,
            'operation' => $operation,
        ];

        return view('envelope.operations.update', $data);
    }

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

    public function postDelete($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $operation->delete();
    }

    private function save(Request $request, Envelope $envelope, $operation = null) {
        if ($request->input('type') === 'revenue') {
            $this->saveRevenue($request, $envelope, $operation);
        } else if ($request->input('type') === 'outcome') {
            $this->saveOutcome($request, $operation);
        }
    }

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
