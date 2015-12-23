<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use App\Services\Html\DonutChart;
use Auth;
use Carbon\Carbon;

/**
 * Summary tab for account
 */
class SummaryController extends AbstractController
{

    /**
     * Render balance panel with chart
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getBalance($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'chart' => DonutChart::forge($account, Carbon::today()),
        ];

        return view('account.summary.balance', $data);
    }

    /**
     * Render events panel with chart
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getEnvelopes($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'chart' => DonutChart::forge($account->envelopes, Carbon::today()),
        ];

        return view('account.summary.envelopes', $data);
    }

    /**
     * Render events panel with list
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getEvents($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'events' => $account->relatedEvents()->simplePaginate(10),
        ];

        return view('account.summary.events', $data);
    }

}
