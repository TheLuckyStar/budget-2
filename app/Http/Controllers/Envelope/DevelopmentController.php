<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\Controller;
use Auth;
use Config;
use Carbon\Carbon;

class DevelopmentController extends Controller
{
    public function getMonthly($envelope_id, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfMonth();

        $data = [];
        for ($d = $date->copy(); $d->month === $date->month; $d->addDay()) {
            $data[] = [
                'date' => $d->toDateString(),
                'effective_outcome' => $envelope->getEffectiveOutcomeAttribute($d),
                'intended_outcome' => $envelope->getIntendedOutcomeAttribute($d),
                'available' => $envelope->getBalanceAttribute($d),
            ];
        }

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'data' => json_encode($data),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
        ];

        return view('envelope.development.monthly', $data);
    }

    public function getYearly($envelope_id, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelope_id);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $monthLabels = [];
        $data = [];
        for ($d = $date->copy(); $d->year === $date->year; $d->addMonth()) {
            $monthLabels[] = $d->formatLocalized('%B');

            $data[] = [
                'date' => $d->format('Y-m'),
                'effective_outcome' => $envelope->getEffectiveOutcomeAttribute($d),
                'intended_outcome' => $envelope->getIntendedOutcomeAttribute($d),
                'available' => $envelope->getBalanceAttribute($d),
            ];
        }

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
            'monthLabels' => json_encode($monthLabels),
        ];

        return view('envelope.development.yearly', $data);
    }
}