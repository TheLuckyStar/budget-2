<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;

class OperationsController extends Controller
{
    /**
     * List operations related to one account (second tab)
     * @param  string $account_id Account ID
     * @return Illuminate/Http/Response View to render
     */
    public function getTable($account_id, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $month->startOfMonth();

        $operations = $account->operationsInPeriod($month, $month->copy()->endOfMonth());

        $data = [
            'activeTab' => 'operations',
            'account' => $account,
            'operations' => $operations,
            'month' => $month,
            'prevMonth' => $month->copy()->subMonth(),
            'nextMonth' => $month->copy()->addMonth(),
        ];

        return view('account.operations.table', $data);
    }

    public function getAdd($account_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $data = [
            'account' => $account,
        ];

        return view('account.add-operation', $data);
    }

    public function getUpdate($account_id, $operation_type, $operation_id) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $data = [
            'account' => $account,
        ];

        return view('account.add-operation', $data);
    }
}
