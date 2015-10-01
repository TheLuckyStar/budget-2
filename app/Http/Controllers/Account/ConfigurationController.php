<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use App\Invitation;
use App\User;
use Auth;
use Carbon\Carbon;
use Config;
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
            if ($account->invitations()->where('email', $request->input('email'))->count() === 0) {
                $account->invitations()->create(['email' => $request->input('email')]);
            }
            return redirect()->action('Account\ConfigurationController@getUsers', $account);
        }

        if ($user->id != $account->owner()->first()->id
            && $account->guests()->where('user_id', $user->id)->count() === 0) {
            $account->users()->attach($user->id);
            Mail::send('emails.inviteExistingUser', ['account' => $account], function(Message $m) use ($user) {
                $m->to($user->email);
                $m->subject(trans('invitation.inviteExistingUser.emailSubject', ['user' => Auth::user()]));
            });
        }

        return redirect()->action('Account\ConfigurationController@getUsers', $account);
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
}
