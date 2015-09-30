<?php namespace App\Http\Controllers\Envelope;

use App\Http\Controllers\AbstractController;
use Auth;
use Config;
use Carbon\Carbon;

class DevelopmentController extends AbstractController
{
    public function getMonthly($envelopeId, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfMonth();

        $data = [];
        for ($d = $date->copy(); $d->month === $date->month && $d->lte(Carbon::now()); $d->addDay()) {
            $data[] = [
                'date' => $d->toDateString(),
                'balance' => $envelope->getBalanceAttribute(null, $d),
            ];
        }

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'data' => json_encode($data),
            'colors' => json_encode([Config::get('budget.statusColors.primary')]),
        ];

        return view('envelope.development.monthly', $data);
    }

    public function getYearly($envelopeId, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year && $d->lte(Carbon::now()); $d->addMonth()) {
            $data[] = [
                'date' => $d->toDateString(),
                'balance' => $envelope->getBalanceAttribute(null, $d->copy()->endOfMonth()),
            ];
        }

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode([Config::get('budget.statusColors.primary')]),
        ];

        return view('envelope.development.yearly', $data);
    }
}
