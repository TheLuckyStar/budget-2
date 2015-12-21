<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use App\Services\Html\LineChart;
use Auth;
use Carbon\Carbon;

class DevelopmentController extends AbstractController
{
    public function getMonthly($envelopeId, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'chart' => LineChart::forge($envelope, $date, LineChart::PERIOD_MONTH),
        ];

        return view('envelope.development.monthly', $data);
    }

    public function getYearly($envelopeId, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'chart' => LineChart::forge($envelope, $date, LineChart::PERIOD_YEAR),
        ];

        return view('envelope.development.yearly', $data);
    }
}
