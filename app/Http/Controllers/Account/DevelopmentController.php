<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use App\Services\Html\LineChart;
use Auth;
use Carbon\Carbon;

/**
 * Development tab for account
 */
class DevelopmentController extends AbstractController
{

    /**
     * Render monthly panel with navigation and chart
     * @param  string $accountId Account primary key
     * @param  string|null $date Date within the month to consider (default to current month)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
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

    /**
     * Render yearly panel with navigation and chart
     * @param  string $accountId Account primary key
     * @param  string|null $date Date within the year to consider (default to current year)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
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

    /**
     * Render envelopes panel with navigation and chart
     * @param  string $accountId Account primary key
     * @param  string|null $date Date within the year to consider (default to current year)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
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
