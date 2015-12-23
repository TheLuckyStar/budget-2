<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use App\Services\Html\LineChart;
use Auth;
use Carbon\Carbon;

/**
 * Development tab for envelope
 */
class DevelopmentController extends AbstractController
{

    /**
     * Render monthly panel with navigation and chart
     * @param  string $envelopeId Envelope primary key
     * @param  string|null $date Date within the month to consider (default to current month)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
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

    /**
     * Render yearly panel with navigation and chart
     * @param  string $envelopeId Envelope primary key
     * @param  string|null $date Date within the year to consider (default to current year)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
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
