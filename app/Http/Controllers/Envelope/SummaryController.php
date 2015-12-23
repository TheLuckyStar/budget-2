<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use App\Services\Html\DonutChart;
use Auth;
use Carbon\Carbon;

/**
 * Summary tab for envelope
 */
class SummaryController extends AbstractController
{

    /**
     * Render balance panel with chart
     * @param  string $envelopeId Envelope primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getBalance($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $data = [
            'envelope' => $envelope,
            'chart' => DonutChart::forge($envelope, Carbon::today()),
        ];

        return view('envelope.summary.balance', $data);
    }

    /**
     * Render events panel with list
     * @param  string $envelopeId Envelope primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getEvents($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $data = [
            'envelope' => $envelope,
            'events' => $envelope->relatedEvents()->simplePaginate(10),
        ];

        return view('envelope.summary.events', $data);
    }
}
