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

    public function getYearly($envelopeId, $date = null) {
        $envelope = Auth::user()->envelopes()->findOrFail($envelopeId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year; $d->addMonth()) {
            $after  = $d->copy()->startOfMonth();
            $before = $d->copy()->endOfMonth();

            $data[] = $this->getData($envelope, $after, $before);
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
        ];

        return view('envelope.development.yearly', $data);
    }


    public function getData($envelope, $after, $before) {
        $balance = $envelope->getBalanceAttribute(null, $after->copy()->subMonth()->endOfMonth());

        $income = $envelope->incomes()->inPeriod($after, $before)->sum('amount');
        if ($balance > 0) {
            $income += $balance;
        }

        $outcome = $envelope->outcomes()->inPeriod($after, $before)->sum('amount');
        if ($balance < 0) {
            $outcome += $balance;
        }

        return [
            'date' => $before->toDateString(),
            'income' => $income,
            'outcome' => $outcome,
        ];
    }

}
