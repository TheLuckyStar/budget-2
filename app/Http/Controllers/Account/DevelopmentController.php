<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;
use Config;
use Carbon\Carbon;

class DevelopmentController extends Controller
{
    public function getMonthly($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfMonth();

        $data = [];
        for ($d = $date->copy(); $d->month === $date->month; $d->addDay()) {
            $data[] = $this->getData($account, $date, $d);
        }

        $colors = [
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.info'),
            Config::get('budget.statusColors.danger'),
        ];

        $data = [
            'account' => $account,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'data' => json_encode($data),
            'colors' => json_encode($colors),
        ];

        return view('account.development.monthly', $data);
    }

    public function getYearly($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year; $d->addMonth()) {
            $after = $d->copy()->startOfMonth();
            $before = $d->copy()->endOfMonth();

            $data[] = $this->getData($account, $after, $before);
        }

        $colors = [
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.info'),
            Config::get('budget.statusColors.danger'),
        ];

        $data = [
            'account' => $account,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode($colors),
        ];

        return view('account.development.yearly', $data);
    }

    public function getData($account, $after, $before) {
        $balance = $account->getBalanceAttribute(null, $after->copy()->subMonth()->endOfMonth());

        $revenue = $account->revenues()->inPeriod($after, $before)->sum('amount');
        if ($balance > 0) {
            $revenue += $balance;
        }

        $allocatedRevenue = $account->incomes()->inPeriod($after, $before)->sum('amount');

        $outcome = $account->outcomes()->inPeriod($after, $before)->sum('amount');
        if ($balance < 0) {
            $outcome += $balance;
        }

        return [
            'date' => $before->toDateString(),
            'revenue' => $revenue,
            'allocatedRevenue' => $allocatedRevenue,
            'outcome' => $outcome,
        ];
    }

    public function getEnvelopes($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year; $d->addMonth()) {
            $monthlyData = [
                'date' => $d->format('Y-m'),
            ];

            foreach ($account->envelopes as $envelope) {
                $monthlyData[$envelope->id] = $envelope->getBalanceAttribute(null, $d->copy()->endOfMonth());
            }

            $data[] = $monthlyData;
        }

        $data = [
            'account' => $account,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
        ];

        return view('account.development.envelopes', $data);
    }
}