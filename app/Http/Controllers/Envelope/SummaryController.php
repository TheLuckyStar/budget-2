<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use App\Services\Html\DonutChart;
use Auth;
use Carbon\Carbon;

class SummaryController extends AbstractController
{
    public function getBalance($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $data = [
            'envelope' => $envelope,
            'chart' => DonutChart::forge($envelope, Carbon::today()),
        ];

        return view('envelope.summary.balance', $data);
    }

    public function getEvents($envelopeId) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $data = [
            'envelope' => $envelope,
            'events' => $envelope->relatedEvents()->simplePaginate(10),
        ];

        return view('envelope.summary.events', $data);
    }
}
