<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;
use Config;
use Carbon\Carbon;

class DevelopmentController extends Controller
{
    public function getMonthly($account_id, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfMonth();

        $data = [];
        for ($d = $date->copy(); $d->month === $date->month; $d->addDay()) {
            $data[] = [
                'date' => $d->toDateString(),
                'effective_outcome' => $account->getEffectiveOutcomeAttribute($d),
                'intended_outcome' => $account->getIntendedOutcomeAttribute($d),
                'unallocated_balance' => $account->getUnallocatedBalanceAttribute($d),
                'allocated_balance' => $account->getAllocatedBalanceAttribute($d),
            ];
        }

        $data = [
            'account' => $account,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'data' => json_encode($data),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
        ];

        return view('account.development.monthly', $data);
    }

    public function getYearly($account_id, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $monthLabels = [];
        $data = [];
        for ($d = $date->copy(); $d->year === $date->year; $d->addMonth()) {
            $monthLabels[] = $d->formatLocalized('%B');

            $data[] = [
                'date' => $d->format('Y-m'),
                'effective_outcome' => $account->getEffectiveOutcomeAttribute($d),
                'intended_outcome' => $account->getIntendedOutcomeAttribute($d),
                'unallocated_balance' => $account->getUnallocatedBalanceAttribute($d),
                'allocated_balance' => $account->getAllocatedBalanceAttribute($d),
            ];
        }

        $data = [
            'account' => $account,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
            'monthLabels' => json_encode($monthLabels),
        ];

        return view('account.development.yearly', $data);
    }

    public function getEnvelopes($account_id, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year; $d->addMonth()) {
            $monthlyData = [
                'date' => $d->formatLocalized('%B'),
            ];

            foreach ($account->envelopes as $envelope) {
                $monthlyData[$envelope->id] = $envelope->getIncomeAttribute($d);
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