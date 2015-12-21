<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use App\Services\Html\LineChart;
use Auth;
use Carbon\Carbon;

class DevelopmentController extends AbstractController
{
    public function getMonthly($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);

        $data = [
            'account' => $account,
            'date' => $date,
            'prevMonth' => $date->copy()->subMonth(),
            'nextMonth' => $date->copy()->addMonth(),
            'chart' => LineChart::forge($account, $date, LineChart::PERIOD_MONTH),
        ];

        return view('account.development.monthly', $data);
    }

    public function getYearly($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);

        $data = [
            'account' => $account,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'chart' => LineChart::forge($account, $date, LineChart::PERIOD_YEAR),
        ];

        return view('account.development.yearly', $data);
    }

    public function getEnvelopes($accountId, $date = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $date = is_null($date) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $date);

        $data = [
            'account' => $account,
            'date' => $date,
            'prevYear' => $date->copy()->subYear(),
            'nextYear' => $date->copy()->addYear(),
            'chart' => LineChart::forge($account->envelopes, $date, LineChart::PERIOD_YEAR),
        ];

        return view('account.development.envelopes', $data);
    }
}
