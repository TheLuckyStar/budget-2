<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OperationsController extends Controller
{
    /**
     * List operations related to one envelope (second tab)
     * @param  string $envelope_id Envelope ID
     * @return Illuminate\Http\Response View to render
     */
    public function getTable($envelope_id, $month = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

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

    public function getRow($envelope_id, $operation_type, $operation_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);
        $operation = $envelope->operationType($operation_type)->findOrFail($operation_id);

        $data = [
            'envelope' => $envelope,
            'operation' => $operation,
        ];

        return view('envelope.operations.row', $data);
    }

    public function postAdd(Request $request, $envelope_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $this->validate($request, [
            'type' => 'required|in:intendedOutcome,effectiveOutcome',
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $operation = $envelope->outcomes()->create([
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            'effective' => $request->get('type') === 'effectiveOutcome',
        ]);
    }

    public function getUpdate($envelope_id, $operation_type, $operation_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);
        $operation = $envelope->operationType($operation_type)->findOrFail($operation_id);

        $data = [
            'envelope' => $envelope,
            'operation' => $operation,
        ];

        return view('envelope.operations.update', $data);
    }

    public function postUpdate(Request $request, $envelope_id, $operation_type, $operation_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);
        $operation = $envelope->operationType($operation_type)->findOrFail($operation_id);

        $this->validate($request, [
            'type' => 'required|in:intendedOutcome,effectiveOutcome',
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $operation->fill([
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            'effective' => $request->get('type') === 'effectiveOutcome',
        ])->save();
    }

    public function postDelete(Request $request, $envelope_id, $operation_type, $operation_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);
        $operation = $envelope->operationType($operation_type)->findOrFail($operation_id);

        $operation->delete();
    }
}
