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

class SummaryController extends AbstractController
{

    public function getBalance($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $after  = Carbon::now()->startOfMonth();
        $before = Carbon::now()->endOfMonth();

        $revenue = $account->revenues()->inPeriod($after, $before)->sum('amount');
        $income  = $account->incomes()->inPeriod($after, $before)->sum('amount');

        $data = [
            [
                'label' => trans('operation.type.effectiveOutcome'),
                'value' => $account->outcomes()->effective()->inPeriod($after, $before)->sum('amount'),
            ],
            [
                'label' => trans('operation.type.intendedOutcome', ['date' => '']),
                'value' => $account->outcomes()->intended()->inPeriod($after, $before)->sum('amount'),
            ],
            [
                'label' => trans('operation.type.unallocatedRevenue'),
                'value' => max(0, $revenue - $income),
            ],
            [
                'label' => trans('operation.type.allocatedRevenue'),
                'value' => $income,
            ],
        ];

        $data = [
            'account' => $account,
            'data' => json_encode($data),
            'withChartData' => count(array_filter(array_pluck($data, 'value'))),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
        ];

        return view('account.summary.balance', $data);
    }

    public function getEnvelopes($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data   = [];
        $colors = [];
        foreach ($account->envelopes as $envelope) {
            $balance = $envelope->balance;

            $data[] = [
                'label' => $envelope->name,
                'value' => abs($balance),
                'negative' => $balance < 0,
            ];

            $colors[] = Config::get('budget.statusColors.'.$envelope->status);
        }

        $data = [
            'account' => $account,
            'data' => json_encode($data),
            'colors' => json_encode($colors),
        ];

        return view('account.summary.envelopes', $data);
    }

    public function getUsers($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
        ];

        return view('account.summary.users', $data);
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
            return redirect()->action('Account\SummaryController@getUsers', $account);
        }

        if ($user->id != $account->owner()->first()->id
            && $account->guests()->where('user_id', $user->id)->count() === 0) {
            $account->users()->attach($user->id);
            Mail::send('emails.inviteExistingUser', ['account' => $account], function(Message $m) use ($user) {
                $m->to($user->email);
                $m->subject(trans('invitation.inviteExistingUser.emailSubject', ['user' => Auth::user()]));
            });
        }

        return redirect()->action('Account\SummaryController@getUsers', $account);
    }

    public function postDetachUser(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $user = User::find($request->input('user_id'));
        $account->guests()->detach($user->id);

        return redirect()->action('Account\SummaryController@getUsers', $account);
    }

    public function postDetachInvitation(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $invitation = Invitation::find($request->input('invitation_id'));
        $invitation->delete();

        return redirect()->action('Account\SummaryController@getUsers', $account);
    }

    public function getEvents($accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $data = [
            'account' => $account,
            'events' => $account->relatedEvents()->simplePaginate(10),
        ];

        return view('account.summary.events', $data);
    }

}
