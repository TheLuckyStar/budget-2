<?php namespace App\Http\Controllers\Account;

use App\Account;
use App\Http\Controllers\AbstractController;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Allocation tab for account
 */
class AllocationController extends AbstractController
{

    /**
     * Render panel with form and navigation
     * @param  string $accountId Account primary key
     * @param  string|null $month Date within the month to consider (default to current month)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getMain($accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $startOfMonth = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $startOfMonth->startOfMonth();
        $endOfMonth   = $startOfMonth->copy()->endOfMonth();

        $revenues = $account->revenues()->inPeriod($startOfMonth, $endOfMonth)->get();

        $incomes = $account->incomes()->inPeriod($startOfMonth, $endOfMonth)->lists('amount', 'envelope_id')->toArray();

        $data = [
            'account' => $account,
            'incomes' => $incomes,
            'revenues' => $revenues,
            'startOfMonth' => $startOfMonth,
            'endOfMonth' => $endOfMonth,
            'prevMonth' => $startOfMonth->copy()->subMonth()->endOfMonth(),
            'nextMonth' => $startOfMonth->copy()->addMonth()->startOfMonth(),
        ];

        return view('account.allocation.main', $data);
    }

    /**
     * Allocate income to envelopes
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @param  string|null $month Date within the month to consider (default to current month)
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postMain(Request $request, $accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $month->startOfMonth();

        $this->save($request, $account, $month);

        return redirect()->action(
            'Account\AllocationController@getMain',
            [$accountId, $month->toDateString()]
        );
    }

    /**
     * Allocate income to envelopes
     * @param  \Illuminate\Http\Request $request
     * @param  \Àpp\Account $account Account primary key
     * @param  \Carbon\Carbon $month Date within the month to consider (default to current month)
     * @return void
     */
    private function save(Request $request, Account $account, Carbon $month) {
        foreach ($account->envelopes as $envelope) {
            $amount = floatval($request->input('allocated-income-'.$envelope->id, 0));

            if ($amount === 0.0) {
                $envelope->incomes()->where('date', $month)->delete();
                continue;
            }

            $income = $envelope->incomes()->firstOrNew(['date' => $month]);
            $income->amount = $amount;
            $income->save();
        }
    }

}
