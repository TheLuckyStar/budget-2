<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Config;
use Illuminate\Http\Request;

class SummaryController extends Controller
{

    public function getBalance($account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $from = Carbon::now()->startOfMonth();
        $to = Carbon::now()->endOfMonth();

        $revenue = $account->revenues()->inPeriod($from, $to)->sum('amount');
        $income = $account->incomes()->inPeriod($from, $to)->sum('amount');
        $unallocatedRevenue = max(0, $revenue - $income);

        $data = [
            [
                'label' => trans('operation.type.effectiveOutcome'),
                'value' => $account->outcomes()->effective()->inPeriod($from, $to)->sum('amount'),
            ],
            [
                'label' => trans('operation.type.intendedOutcome', ['date' => '']),
                'value' => $account->outcomes()->intended()->inPeriod($from, $to)->sum('amount'),
            ],
            [
                'label' => trans('operation.type.unallocatedRevenue'),
                'value' => $unallocatedRevenue,
            ],
            [
                'label' => trans('operation.type.allocatedRevenue'),
                'value' => $account->incomes()->inPeriod($from, $to)->sum('amount'),
            ],
        ];

        $data = [
            'account' => $account,
            'data' => json_encode($data),
            'colors' => json_encode(array_values(Config::get('budget.statusColors'))),
        ];

        return view('account.summary.balance', $data);
    }

    public function getEnvelopes($account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $data = [];
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

    public function getUsers($account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $data = [
            'account' => $account,
        ];

        return view('account.summary.users', $data);
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

        return redirect()->action('Account\SummaryController@getUsers', $account);
    }

    public function postDetachUser(Request $request, $account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $user = User::find($request->input('user_id'));
        $account->guests()->detach($user->id);

        return redirect()->action('Account\SummaryController@getUsers', $account);
   }

    public function getEvents($account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $data = [
            'account' => $account,
            'events' => $account->relatedEvents()->simplePaginate(5),
        ];

        return view('account.summary.events', $data);
    }

}
