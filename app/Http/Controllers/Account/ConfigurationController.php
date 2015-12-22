<?php namespace App\Http\Controllers\Account;

use App\Account;
use App\Http\Controllers\AbstractController;
use App\Invitation;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;

class ConfigurationController extends AbstractController
{
    public function getUsers($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.configuration.users', $data);
    }

    public function postAttachUser(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if (is_null($user)) {
            return $this->postAttachExistingUser($request, $account);
        }

        return $this->postAttachNewUser($account, $user);
    }

    public function postAttachExistingUser(Request $request, Account $account) {
        if ($account->invitations()->where('email', $request->input('email'))->count() === 0) {
            $account->invitations()->create(['email' => $request->input('email')]);
        }

        return redirect()->action('Account\ConfigurationController@getUsers', [$account]);
    }

    public function postAttachNewUser(Account $account, User $user) {
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

    public function postDetachUser(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $user = User::find($request->input('user_id'));
        $account->guests()->detach($user->id);

        return redirect()->action('Account\ConfigurationController@getUsers', $account);
    }

    public function postDetachInvitation(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $invitation = Invitation::find($request->input('invitation_id'));
        $invitation->delete();

        return redirect()->action('Account\ConfigurationController@getUsers', $account);
    }

    public function getRecurringOperations($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.configuration.recurring_operations', $data);
    }

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

    public function getRecurringOperationUpdate($accountId, $recurringOperationId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);
        $recurringOperation = $account->recurringOperations()->findOrFail($recurringOperationId);

        $data = [
            'account' => $account,
            'recurringOperation' => $recurringOperation,
        ];

        return view('account.configuration.recurring_operations.update', $data);
    }

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

    public function postRecurringOperationDelete($accountId, $recurringOperationId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);
        $recurringOperation = $account->recurringOperations()->findOrFail($recurringOperationId);

        $recurringOperation->delete();
    }

    private function getEntityId(Request $request) {
        if (in_array($request->input('type'),  ['outcome', 'revenue'])) {
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
