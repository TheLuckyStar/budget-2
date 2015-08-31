<?php namespace App\Http\Controllers;

use App\Account;
use Auth;
use Carbon\Carbon;
use Config;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Default account routing
     * @param  int $account_id Account ID
     * @param  string $activeTab Name of active tab
     * @return Illuminate\Http\Response Redirection
     */
    public function getIndex($account_id = null, $activeTab = 'summary') {
        // Retrieve first account if no one is provided
        if (is_null($account_id)) {
            $account = Auth::user()->accounts()->first();

            // Redirect to add form if no account exist for user
            if (is_null($account)) {
                return redirect()->action('AccountController@getAdd')
                    ->withSuccess(trans('account.add.redirectMessage'));
            }
        } else {
            // Retrieve account if provided
            $account = Auth::user()->accounts()->findOrFail($account_id);
        }

        $data = [
            'account' => $account,
            'activeTab' => $activeTab,
        ];

        // Render account page layout
        return view('account.index', $data);
    }


    /**
     * Render add account form
     * @return Illuminate\Http\Response View to render
     */
    public function getAdd() {
        return view('account.add');
    }

    public function postAdd(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'balance' => 'required|numeric',
        ]);

        $account = Account::create($request->only(['name']));
        Auth::user()->accounts()->save($account, ['owner' => 1]);

        $account->revenues()->create([
            'amount' => $request->get('balance'),
        ]);

        return redirect()->action('AccountController@getIndex', [$account])
            ->withSuccess(trans('account.add.successMessage', ['account' => $account]));
    }



    /**
     * Render update account form
     * @return Illuminate\Http\Response View to render
     */
    public function getUpdate($account_id) {
        $account = Auth::user()->accounts()->where('owner', true)->findOrFail($account_id);

        $data = [
            'account' => $account,
        ];

        return view('account.update', $data);
    }

    public function postUpdate(Request $request, $account_id) {
        $account = Auth::user()->accounts()->where('owner', true)->findOrFail($account_id);

        $this->validate($request, [
            'name' => 'required|string',
            'balance' => 'required|numeric',
        ]);

        $account->fill($request->only(['name']));
        $account->save();

        $account->initial_balance->update(['amount' => $request->get('balance')]);

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.update.successMessage', ['account' => $account]));
    }



    public function getDelete($account_id) {
        $account = Auth::user()->nontrashedAccounts()->where('owner', true)->findOrFail($account_id);

        $account->delete();

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.delete.successMessage', ['account' => $account]));
    }



    public function getRestore($account_id) {
        $account = Auth::user()->trashedAccounts()->where('owner', true)->findOrFail($account_id);

        $account->restore();

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.restore.successMessage', ['account' => $account]));
    }
}
