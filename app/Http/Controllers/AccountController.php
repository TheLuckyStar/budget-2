<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Auth;
use Config;
use Illuminate\Http\Request;
use Session;

class AccountController extends Controller
{
    public function getIndex(Request $request) {
        $account = Auth::user()->accounts()->first();

        // Redirect to first account if exists
        if ($account instanceof Account) {
            $request->session()->reflash();
            return redirect()->action('AccountController@getSummary', $account);
        }

        // Redirect to add form if no account exist for user
    }

    public function getSummary($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $balanceData = [
            [
                'label' => trans('account.snapshot.allocatedRevenue'),
                'value' => $account->allocated_revenue,
            ],
            [
                'label' => trans('account.snapshot.unallocatedRevenue'),
                'value' => $account->unallocated_revenue,
            ],
            [
                'label' => trans('account.snapshot.intendedOutcome'),
                'value' => $account->intended_outcome,
            ],
            [
                'label' => trans('account.snapshot.effectiveOutcome'),
                'value' => $account->effective_outcome,
            ],
        ];
        $balanceColors = [
            Config::get('budget.statusColors.success'),
            Config::get('budget.statusColors.primary'),
            Config::get('budget.statusColors.warning'),
            Config::get('budget.statusColors.danger')
        ];

        $envelopesData = [];
        $envelopesColors = [];
        foreach ($account->envelopes as $envelope) {
            $balance = $envelope->balance;

            $envelopesData[] = [
                'label' => $envelope->name,
                'value' => abs($balance),
                'negative' => $balance < 0,
            ];

            $envelopesColors[] = Config::get('budget.statusColors.'.$envelope->status);
        }

        $data = [
            'account' => $account,
            'activeTab' => 'summary',
            'envelopesData' => json_encode($envelopesData),
            'envelopesColors' => json_encode($envelopesColors),
            'balanceData' => json_encode($balanceData),
            'balanceColors' => json_encode($balanceColors),
            'events' => $account->relatedEvents()->paginate(Config::get('budget.paginate')),
        ];

        return view('account.summary', $data);
    }

    public function getAttachUser(Request $request, $account_id) {
        Session::reflash();
        return redirect()->action('AccountController@getSummary', $account_id);
    }

    public function postAttachUser(Request $request, $account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if ($user->id != $account->owner()->first()->id
            && $account->guests()->where('user_id', $user->id)->count() === 0) {
            $account->users()->attach($user->id);
        }

        return redirect()->action('AccountController@getSummary', $account)
                ->withSuccess(trans('account.users.attachUserMessage', ['user' => $user]));
    }

    public function postDetachUser(Request $request, $account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $user = User::find($request->input('user_id'));
        $account->guests()->detach($user->id);

        return redirect()->action('AccountController@getSummary', $account)
                ->withSuccess(trans('account.users.detachUserMessage', ['user' => $user]));
   }

    public function getRevenues($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $data = [
            'account' => $account,
            'activeTab' => 'revenues',
        ];

        return view('account.revenues', $data);
    }

    public function getOutcomes($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $data = [
            'account' => $account,
            'activeTab' => 'outcomes',
        ];

        return view('account.outcomes', $data);
    }

    public function getDevelopment($account_id) {
        $account = Auth::user()->accounts()->find($account_id);

        if (is_null($account)) {
            return redirect()->action('AccountController@getIndex')
                ->withErrors(trans('account.index.notfoundMessage'));
        }

        $data = [
            'account' => $account,
            'activeTab' => 'development',
        ];

        return view('account.development', $data);
    }
}
