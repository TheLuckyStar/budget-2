<?php

namespace App\Http\Controllers;

use App\Envelope;
use App\Services\Html\DonutChart;
use Auth;
use Carbon\Carbon;
use Html;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class HomeController extends AbstractController
{
    public function getIndex(Request $request) {
        $accounts = Auth::user()->nontrashedAccounts->where('deleted_at', null);

        // Redirect for authenticated users with without account
        if (empty($accounts) === 0) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getAdd')
                ->withSuccess(trans('account.add.redirectMessage'));
        }

        // Redirect for authenticated users with only one account
        if (count($accounts) === 1) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getIndex', head($accounts));
        }

        // Home page for authenticated users with many accounts
        return $this->builIndex($accounts);
    }

    private function builIndex(Collection $accounts) {
        $data = [
            'accounts' => $accounts,
            'accountsBalance' => $this->getAccountsBalance($accounts),
            'accountsChart' => DonutChart::forge($accounts, Carbon::today()),
            'envelopesBalance' => $this->getEnvelopesBalance($accounts),
            'envelopesChart' => DonutChart::forge(
                Envelope::whereIn('account_id', $accounts->pluck('id'))->get(),
                Carbon::today()
            ),
        ];

        return view('home.authenticated', $data);
    }

    /**
     * @param Collection $accounts
     */
    private function getAccountsBalance($accounts) {
        $balance = [];

        foreach ($accounts as $account) {
            if (isset($balance[$account->currency]) === false) {
                $balance[$account->currency] = 0;
            }
            $balance[$account->currency] += $account->balance;
        }

        return array_map(
            /**
             * @param Collection $balance
             */
            function($balance, $currency) {return Html::formatPrice($balance, $currency, true); },
            $balance, array_keys($balance)
        );
    }

    /**
     * @param Collection $accounts
     */
    private function getEnvelopesBalance($accounts) {
        $balance = [];

        foreach ($accounts as $account) {
            if (isset($balance[$account->currency]) === false) {
                $balance[$account->currency] = 0;
            }
            $balance[$account->currency] += $account->envelopes_balance;
        }

        return array_map(
            /**
             * @param Collection $balance
             */
            function($balance, $currency) {return Html::formatPrice($balance, $currency, true); },
            $balance, array_keys($balance)
        );
    }

    public function getDemo() {
        return redirect()->action('HomeController@getIndex')->withErrors(trans('app.error.demo'));
    }
}
