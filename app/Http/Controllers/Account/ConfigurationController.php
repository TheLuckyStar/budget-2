<?php namespace App\Http\Controllers\Account;

use App\Account;
use App\Http\Controllers\AbstractController;
use App\Invitation;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;

/**
 * Configuration tab for account
 */
class ConfigurationController extends AbstractController
{

    /**
     * Render panel with list
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getUsers($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.configuration.users', $data);
    }

    /**
     * Attach a user to an account
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postAttachUser(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if (is_null($user)) {
            return $this->postAttachNewUser($request, $account);
        }

        return $this->postAttachExistingUser($account, $user);
    }

    /**
     * Attach a new user to an account
     * @param  \Illuminate\Http\Request $request
     * @param  App\Account $account Account
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postAttachNewUser(Request $request, Account $account) {
        if ($account->invitations()->where('email', $request->input('email'))->count() === 0) {
            $account->invitations()->create(['email' => $request->input('email')]);
        }

        return redirect()->action('Account\ConfigurationController@getUsers', [$account]);
    }

    /**
     * Attach an existing user to an account
     * @param  App\Account $account Account
     * @param  App\User $user User
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postAttachExistingUser(Account $account, User $user) {
        if ($user->id != $account->owner()->first()->id
            && $account->guests()->where('user_id', $user->id)->count() === 0) {
            $account->users()->attach($user->id);
            Mail::send('emails.inviteExistingUser', ['account' => $account], function(Message $m) use ($user) {
                $m->to($user->email);
                $m->subject(trans('invitation.inviteExistingUser.emailSubject', ['user' => Auth::user()]));
            });
        }

        return redirect()->action('Account\ConfigurationController@getUsers', [$account]);
    }

    /**
     * Detach a user from an account
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postDetachUser(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $user = User::find($request->input('user_id'));
        $account->guests()->detach($user->id);

        return redirect()->action('Account\ConfigurationController@getUsers', $account);
    }

    /**
     * Detach an invitation from an account
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function postDetachInvitation(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $invitation = Invitation::find($request->input('invitation_id'));
        $invitation->delete();

        return redirect()->action('Account\ConfigurationController@getUsers', $account);
    }

    /**
     * Render panel with list
     * @param  string $accountId Account primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getRecurringOperations($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.configuration.recurring_operations', $data);
    }

    /**
     * Add new recurring operation
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return void
     */
    public function postRecurringOperationAdd(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $this->validate($request, [
            'type' => 'required|in:revenue,outcome,outgoingTransfer,incomingTransfer',
            'envelope_id' => 'required_if:type,outcome|exists:envelopes,id,account_id,'.$account->id,
            'to_account_id'
                => 'required_if:type,outgoingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'from_account_id'
                => 'required_if:type,incomingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $account->recurringOperations()->create([
            'type' => $request->get('type'),
            'entity_id' => $this->getEntityId($request),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
        ]);
    }

    /**
     * Render list item with recurring operation details
     * @param  string $accountId Account primary key
     * @param  string $recurringOperationId Recurring operation primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getRecurringOperationUpdate($accountId, $recurringOperationId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);
        $recurringOperation = $account->recurringOperations()->findOrFail($recurringOperationId);

        $data = [
            'account' => $account,
            'recurringOperation' => $recurringOperation,
        ];

        return view('account.configuration.recurring_operations.update', $data);
    }

    /**
     * Update existing recurring operation
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @param  string $recurringOperationId Recurring operation primary key
     * @return void
     */
    public function postRecurringOperationUpdate(Request $request, $accountId, $recurringOperationId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);
        $recurringOperation = $account->recurringOperations()->findOrFail($recurringOperationId);

        $this->validate($request, [
            'type' => 'required|in:revenue,outcome,outgoingTransfer,incomingTransfer',
            'envelope_id' => 'required_if:type,outcome|exists:envelopes,id,account_id,'.$account->id,
            'to_account_id'
                => 'required_if:type,outgoingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'from_account_id'
                => 'required_if:type,incomingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $recurringOperation->fill([
            'type' => $request->get('type'),
            'entity_id' => $this->getEntityId($request),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
        ])->save();
    }

    /**
     * Delete recurring operation
     * @param  string $accountId Account primary key
     * @param  string $recurringOperationId Recurring operation primary key
     * @return void
     */
    public function postRecurringOperationDelete($accountId, $recurringOperationId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);
        $recurringOperation = $account->recurringOperations()->findOrFail($recurringOperationId);

        $recurringOperation->delete();
    }

    /**
     * Get entity id from request based on type
     * @param  \Illuminate\Http\Request $request
     * @return string|null
     */
    private function getEntityId(Request $request) {
        if (in_array($request->input('type'), ['outcome', 'revenue'])) {
            return $request->get('envelope_id');
        }

        if ($request->input('type') === 'outgoingTransfer') {
            return $request->get('to_account_id');
        }

        if ($request->input('type') === 'incomingTransfer') {
            return $request->get('from_account_id');
        }

        return null;
    }
}
