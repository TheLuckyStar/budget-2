<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
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
        $account = $envelope->account;

        $this->validate($request, [
            'type' => 'required|in:intendedOutcome,effectiveOutcome',
            'envelope_id'
                => 'required_if:type,intendedOutcome,type,efectiveOutcome|exists:envelopes,id,account_id,'
                    .$account->id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $account->envelopes()->findOrFail($request->get('envelope_id'))->outcomes()->create([
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            'effective' => $request->get('type') === 'effectiveOutcome',
        ]);
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
        $account = $envelope->account;

        $this->validate($request, [
            'type' => 'required|in:intendedOutcome,effectiveOutcome',
            'envelope_id'
                => 'required_if:type,intendedOutcome,type,efectiveOutcome|exists:envelopes,id,account_id,'
                    .$account->id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $operation->fill([
            'envelope_id' => $request->get('envelope_id'),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            'effective' => $request->get('type') === 'effectiveOutcome',
        ])->save();
    }

    public function postDelete($envelopeId, $operationType, $operationId) {
        $envelope  = Auth::user()->envelopes()->findOrFail($envelopeId);
        $operation = $envelope->operationType($operationType)->findOrFail($operationId);

        $operation->delete();
    }
}
