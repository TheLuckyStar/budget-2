<?php namespace App\Http\Controllers;

use App\Account;
use Auth;
use Illuminate\Http\Request;

/**
 * Account management page
 */
class AccountController extends AbstractController
{
    /**
     * Render tabs layout
     * @param  string $accountId Account primary key
     * @param  string $activeTab Name of the active tab
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getIndex($accountId, $activeTab = 'summary') {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'activeTab' => $activeTab,
        ];

        return view('account.index', $data);
    }

    /**
     * Render add account form
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getAdd() {
        return view('account.add');
    }

    /**
     * Add new account
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getUpdate($accountId) {
        $account = Auth::user()->accounts()->where('owner', true)->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.update', $data);
    }

    /**
     * Udate existing account
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(Request $request, $accountId) {
        $account = Auth::user()->accounts()->where('owner', true)->findOrFail($accountId);

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

    /**
     * Delete existing account (the account is actually archived)
     * @param  string $accountId Account primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($accountId) {
        $account = Auth::user()->nontrashedAccounts()->where('owner', true)->findOrFail($accountId);

        $account->delete();

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.delete.successMessage', ['account' => $account]));
    }

    /**
     * Restore archived account
     * @param  string $accountId Account primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getRestore($accountId) {
        $account = Auth::user()->trashedAccounts()->where('owner', true)->findOrFail($accountId);

        $account->restore();

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.restore.successMessage', ['account' => $account]));
    }
}
