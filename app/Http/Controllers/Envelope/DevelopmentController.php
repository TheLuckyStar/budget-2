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
            $data[] = $this->getData($envelope, $date, $d);
        }

        $colors = [
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.danger'),
        ];

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'data' => json_encode($data),
            'colors' => json_encode($colors),
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

            $from = $d->copy()->startOfMonth();
            $to = $d->copy()->endOfMonth();

            $data[] = $this->getData($envelope, $from, $to);
        }

        $colors = [
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.danger'),
        ];

        $data = [
            'envelope' => $envelope,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode($colors),
            'monthLabels' => json_encode($monthLabels),
        ];

        return view('envelope.development.yearly', $data);
    }


    public function getData($envelope, $from, $to) {
        $balance = $envelope->getBalanceAttribute(null, $from->copy()->subMonth()->endOfMonth());

        $income = $envelope->getIncomeAttribute($from, $to);
        if ($balance > 0) {
            $income += $balance;
        }

        $outcome = $envelope->getOutcomeAttribute($from, $to);
        if ($balance < 0) {
            $outcome += $balance;
        }

        return [
            'date' => $to->toDateString(),
            'income' => $income,
            'outcome' => $outcome,
        ];
    }

}