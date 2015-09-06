<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AllocationController extends AbstractController
{
    /**
     * Render income allocation related to one account (second tab)
     * @param  string $accountId Account ID
     * @return Illuminate\View\View View to render
     */
    public function getSliders($accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);

        $startOfMonth = $month->startOfMonth();
        $endOfMonth   = $month->copy()->endOfMonth();
        $prevMonth    = $month->copy()->subMonth()->endOfMonth();

        $incomes = $account->incomes()
            ->inPeriod($startOfMonth, $endOfMonth)
            ->lists('amount', 'envelope_id')
            ->toArray();
        $prevIncomes = $account->incomes()
            ->inPeriod($prevMonth->copy()->startOfMonth(), $prevMonth)
            ->lists('amount', 'envelope_id')
            ->toArray();

        $data = [
            'account' => $account,
            'revenue' => $account->revenues()->inPeriod($startOfMonth, $endOfMonth)->sum('amount'),
            'unallocatedRevenueBeforeMonth' => $account->getUnallocatedAttribute(null, $prevMonth),
            'unallocatedRevenueMonth' => $account->getUnallocatedAttribute($startOfMonth, $endOfMonth),
            'incomes' => $incomes,
            'prevIncomes' => $prevIncomes,
            'startOfMonth' => $startOfMonth,
            'endOfMonth' => $endOfMonth,
            'prevMonth' => $prevMonth,
            'nextMonth' => $month->copy()->addMonth()->startOfMonth(),
        ];

        return view('account.allocation.sliders', $data);
    }

    public function postSliders(Request $request, $accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $month        = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $startOfMonth = $month->startOfMonth();

        foreach ($account->envelopes as $envelope) {
            $amount = floatval($request->input('income-'.$envelope->id, 0));

            if ($amount === 0.0) {
                $envelope->incomes()->where('date', $startOfMonth)->delete();
                continue;
            }

            $income         = $envelope->incomes()->firstOrNew(['date' => $startOfMonth]);
            $income->amount = $amount;
            $income->save();
        }

        return redirect()->action(
            'Account\AllocationController@getSliders',
            [$accountId, $month->toDateString()]
        );
    }
}
