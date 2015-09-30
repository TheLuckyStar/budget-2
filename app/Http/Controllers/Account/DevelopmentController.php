<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use Auth;
use Config;
use Carbon\Carbon;

class DevelopmentController extends AbstractController
{
    public function getMonthly($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfMonth();

        $data = [];
        for ($d = $date->copy(); $d->month === $date->month && $d->lte(Carbon::now()); $d->addDay()) {
            $data[] = [
                'date' => $d->toDateString(),
                'balance' => $account->getEnvelopesBalanceAttribute(null, $d),
            ];
        }

        $data = [
            'account' => $account,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'data' => json_encode($data),
            'colors' => json_encode([Config::get('budget.statusColors.primary')]),
        ];

        return view('account.development.monthly', $data);
    }

    public function getYearly($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year && $d->lte(Carbon::now()); $d->addMonth()) {
            $data[] = [
                'date' => $d->toDateString(),
                'balance' => $account->getEnvelopesBalanceAttribute(null, $d->copy()->endOfMonth()),
            ];
        }

        $data = [
            'account' => $account,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'data' => json_encode($data),
            'colors' => json_encode([Config::get('budget.statusColors.primary')]),
        ];

        return view('account.development.yearly', $data);
    }

    public function getEnvelopes($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);
        $date->startOfYear();

        $data = [];
        for ($d = $date->copy(); $d->year === $date->year && $d->lte(Carbon::now()); $d->addMonth()) {
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
        ];

        return view('account.development.envelopes', $data);
    }
}
