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
     * @param  Illuminate\Http\Request $request Current request
     * @return Illuminate/Http/Response Redirection
     */
    public function getIndex(Request $request, $account_id = null) {
        // Retrieve first account if no one is provided
        if (is_null($account_id)) {
            $account = Auth::user()->accounts()->first();

            // Redirect to add form if no account exist for user
            if (is_null($account)) {
                die();
            }
        }

        // Retrieve account if provided
        if (is_numeric($account_id)) {
            $account = Auth::user()->accounts()->findOrFail($account_id);
        }

        // Redirect to summary page if one account has been found
        $request->session()->reflash();
        return redirect()->action('Account\SummaryController@getIndex', $account);
    }


    /**
     * Render add account form
     * @return Illuminate/Http/Response View to render
     */
    public function getAdd() {
        return view('account.add');
    }

    public function postAdd(Request $request) {
        $this->validate($request, [
            'name' => 'string|required',
        ]);

        $account = Account::create($request->only(['name']));
        Auth::user()->accounts()->save($account, ['owner' => 1]);

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.add.successMessage', ['account' => $account]));
    }



    /**
     * Render update account form
     * @return Illuminate/Http/Response View to render
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
            'name' => 'string|required',
        ]);

        $account->fill($request->only(['name']));
        $account->save();

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
