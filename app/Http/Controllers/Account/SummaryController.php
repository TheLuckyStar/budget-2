<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use App\Services\Html\DonutChart;
use Auth;
use Carbon\Carbon;
use Config;

class SummaryController extends AbstractController
{

    public function getBalance($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'chart' => DonutChart::forge($account, Carbon::today()),
        ];

        return view('account.summary.balance', $data);
    }

    public function getEnvelopes($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'chart' => DonutChart::forge($account->envelopes, Carbon::today()),
        ];

        return view('account.summary.envelopes', $data);
    }

    public function getEvents($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'events' => $account->relatedEvents()->simplePaginate(10),
        ];

        return view('account.summary.events', $data);
    }

}
