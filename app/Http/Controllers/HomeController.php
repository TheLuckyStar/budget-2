<?php

namespace App\Http\Controllers;

use \Auth;
use \Config;
use \Html;
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

        // All accounts chart
        $allAccountsBalance = [];
        $allAccountsData   = [];
        $allAccountsColors = [];
        foreach ($accounts as $account) {
            $balance = $account->balance;

            if (isset($allAccountsBalance[$account->currency]) == false) {
                $allAccountsBalance[$account->currency] = 0;
            }
            $allAccountsBalance[$account->currency] += $balance;

            $allAccountsData[] = [
                'label' => $account->name,
                'value' => abs($balance),
                'negative' => $balance < 0,
            ];

            $allAccountsColors[] = Config::get('budget.statusColors.'.$account->status);
        }

        // All accounts chart
        $allEnvelopesBalance = [];
        $allEnvelopesData   = [];
        $allEnvelopesColors = [];
        foreach ($accounts as $account) {
            foreach ($account->envelopes as $envelope) {
                $balance = $envelope->balance;

                if (isset($allEnvelopesBalance[$account->currency]) == false) {
                    $allEnvelopesBalance[$account->currency] = 0;
                }
                $allEnvelopesBalance[$account->currency] += $balance;

                $allEnvelopesData[] = [
                    'label' => $account->name.' : '.$envelope->name,
                    'value' => abs($balance),
                    'negative' => $balance < 0,
                ];

                $allEnvelopesColors[] = Config::get('budget.statusColors.'.$envelope->status);
            }
        }

        // Home page for authenticated users with many accounts
        $data = [
            'accounts' => $accounts,
            'allAccountsBalance' => array_map(
                function ($balance, $currency) {return Html::formatPrice($balance, $currency, true); },
                $allAccountsBalance, array_keys($allAccountsBalance)
            ),
            'allAccountsData' => json_encode($allAccountsData),
            'allAccountsColors' => json_encode($allAccountsColors),
            'allEnvelopesBalance' => array_map(
                function ($balance, $currency) {return Html::formatPrice($balance, $currency, true); },
                $allEnvelopesBalance, array_keys($allEnvelopesBalance)
            ),
            'allEnvelopesData' => json_encode($allEnvelopesData),
            'allEnvelopesColors' => json_encode($allEnvelopesColors),
        ];

        // Render account page layout
        return view('home.authenticated', $data);
    }

    public function getDemo() {
        return redirect()->action('HomeController@getIndex')->withErrors(trans('app.error.demo'));
    }
}
