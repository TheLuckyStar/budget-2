<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

class OperationsController extends Controller
{
    /**
     * List operations related to one envelope (second tab)
     * @param  string $envelope_id Envelope ID
     * @return Illuminate/Http/Response View to render
     */
    public function getTable($envelope_id, $month = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $month->startOfMonth();

        $operations = $envelope->operationsInPeriod($month, $month->copy()->endOfMonth());

        $data = [
            'activeTab' => 'operations',
            'envelope' => $envelope,
            'operations' => $operations,
            'month' => $month,
            'prevMonth' => $month->copy()->subMonth(),
            'nextMonth' => $month->copy()->addMonth(),
        ];

        return view('envelope.operations.table', $data);
    }

    public function getAdd($envelope_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $data = [
            'envelope' => $envelope,
        ];

        return view('envelope.add-operation', $data);
    }

    public function getUpdate($envelope_id, $operation_type, $operation_id) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $data = [
            'envelope' => $envelope,
        ];

        return view('envelope.add-operation', $data);
    }
}
