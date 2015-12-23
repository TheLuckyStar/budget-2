<?php

namespace App\Http\Controllers;

use App\Envelope;
use App\Services\Html\DonutChart;
use Auth;
use Carbon\Carbon;
use Html;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Home page for guest and authenticated users.
 */
class HomeController extends AbstractController
{

    /**
     * Render home page for guest and authenticated users.
     * @param  \Illuminate\Http\Request $request
     * @return object View or redirection if relevant
     */
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

        // Home page for authenticated users with several accounts
        return $this->builIndex($accounts);
    }

    /**
     * Prepare view for authenticated user with several accounts
     * @param  Collection $accounts Account collection
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
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
     * Sum account balances with the same currency
     * @param  Collection $accounts Account collection
     * @return array Balances indexed by currency
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
     * Sum account'envelope balances with the same currency
     * @param  Collection $accounts Account collection
     * @return array Balances indexed by currency
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

}
