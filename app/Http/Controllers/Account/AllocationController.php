<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use App\Income;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AllocationController extends AbstractController
{
    /**
     * Render income allocation related to one account (second tab)
     * @param  string $accountId Account ID
     * @return Illuminate\Http\Response View to render
     */
    public function getSliders($accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);

        $startOfMonth = $month->startOfMonth();
        $endOfMonth   = $month->copy()->endOfMonth();

        $prevMonth = $month->copy()->subMonth()->endOfMonth();
        $nextMonth = $month->copy()->addMonth()->startOfMonth();

        $revenue           = $account->revenues()->inPeriod(null, $prevMonth)->sum('amount');
        $income            = $account->incomes()->inPeriod(null, $prevMonth)->sum('amount');
        $unallocatedBefore = max(0, $revenue - $income);

        $revenue          = $account->revenues()->inPeriod($startOfMonth, $endOfMonth)->sum('amount');
        $income           = $account->incomes()->inPeriod($startOfMonth, $endOfMonth)->sum('amount');
        $unallocatedMonth = max(0, $revenue - $income);

        $incomes     = $account->incomes()
            ->whereBetween('date', [$startOfMonth, $endOfMonth])
            ->lists('amount', 'envelope_id')
            ->toArray();
        $prevIncomes = $account->incomes()
            ->whereBetween('date', [
                $month->copy()->subMonth()->startOfMonth(),
                $month->copy()->subMonth()->endOfMonth(),
            ])
            ->lists('amount', 'envelope_id')
            ->toArray();

        $data = [
            'account' => $account,
            'revenue' => $revenue,
            'unallocatedRevenueBeforeMonth' => $unallocatedBefore,
            'unallocatedRevenueMonth' => $unallocatedMonth,
            'incomes' => $incomes,
            'prevIncomes' => $prevIncomes,
            'startOfMonth' => $startOfMonth,
            'endOfMonth' => $endOfMonth,
            'prevMonth' => $prevMonth,
            'nextMonth' => $nextMonth,
        ];

        return view('account.allocation.sliders', $data);
    }

    public function postSliders(Request $request, $accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);

        $startOfMonth = $month->startOfMonth();
        $endOfMonth   = $month->copy()->endOfMonth();

        $account->incomes()
            ->whereBetween('date', [$startOfMonth, $endOfMonth])
            ->delete();

        foreach ($account->envelopes as $envelope) {
            $amount = floatval($request->input('income-'.$envelope->id, 0));

            if ($amount > 0) {
                $envelope->incomes()->save(new Income([
                    'amount' => $amount,
                    'date' => $startOfMonth,
                ]));
            }
        }

        return redirect()->action(
            'Account\AllocationController@getSliders',
            [$accountId, $month->toDateString()]
        );
    }
}
