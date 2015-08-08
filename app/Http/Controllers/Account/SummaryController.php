<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Config;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    /**
     * Gather information about account for account home page (first tab)
     * @param  string $account_id Account ID
     * @return Illuminate/Http/Response View to render
     */
    public function getIndex($account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $balanceData = [
            [
                'label' => trans('operation.type.effectiveOutcome'),
                'value' => $account->effective_outcome,
            ],
            [
                'label' => trans('operation.type.intendedOutcome', ['date' => '']),
                'value' => $account->intended_outcome,
            ],
            [
                'label' => trans('operation.type.unallocatedRevenue'),
                'value' => $account->unallocated_revenue,
            ],
            [
                'label' => trans('operation.type.allocatedRevenue'),
                'value' => $account->allocated_revenue,
            ],
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
            'balanceData' => json_encode($balanceData),
            'balanceColors' => json_encode(array_values(Config::get('budget.statusColors'))),
            'envelopesData' => json_encode($envelopesData),
            'envelopesColors' => json_encode($envelopesColors),
            'events' => $account->relatedEvents()->paginate(5),
        ];

        return view('account.summary', $data);
    }

    public function getAttachUser(Request $request, $account_id) {
        $request->session()->reflash();
        return redirect()->action('Account\SummaryController@getIndex', $account_id);
    }

    public function postAttachUser(Request $request, $account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if ($user->id != $account->owner()->first()->id
            && $account->guests()->where('user_id', $user->id)->count() === 0) {
            $account->users()->attach($user->id);
        }

        return redirect()->action('Account\SummaryController@getIndex', $account)
                ->withSuccess(trans('account.users.attachUserMessage', ['user' => $user]));
    }

    public function postDetachUser(Request $request, $account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $user = User::find($request->input('user_id'));
        $account->guests()->detach($user->id);

        return redirect()->action('Account\SummaryController@getIndex', $account)
                ->withSuccess(trans('account.users.detachUserMessage', ['user' => $user]));
   }
}