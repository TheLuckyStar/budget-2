<?php namespace App\Http\Controllers;

use App\Account;
use Auth;
use Illuminate\Http\Request;

class AccountController extends AbstractController
{
    /**
     * Default account routing
     * @param  int $accountId Account ID
     * @param  string $activeTab Name of active tab
     * @return object
     */
    public function getIndex($accountId = null, $activeTab = 'summary') {
        // Retrieve first account if no one is provided
        if (is_null($accountId)) {
            $account = Auth::user()->accounts()->first();

            // Redirect to add form if no account exist for user
            if (is_null($account)) {
                return redirect()->action('AccountController@getAdd')
                    ->withSuccess(trans('account.add.redirectMessage'));
            }
        } else {
            // Retrieve account if provided
            $account = Auth::user()->accounts()->findOrFail($accountId);
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
     * @return \Illuminate\View\View View to render
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
     * @return \Illuminate\View\View View to render
     */
    public function getUpdate($accountId) {
        $account = Auth::user()->accounts()->where('owner', true)->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.update', $data);
    }

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



    public function getDelete($accountId) {
        $account = Auth::user()->nontrashedAccounts()->where('owner', true)->findOrFail($accountId);

        $account->delete();

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.delete.successMessage', ['account' => $account]));
    }



    public function getRestore($accountId) {
        $account = Auth::user()->trashedAccounts()->where('owner', true)->findOrFail($accountId);

        $account->restore();

        return redirect()->action('AccountController@getIndex', $account)
            ->withSuccess(trans('account.restore.successMessage', ['account' => $account]));
    }
}
