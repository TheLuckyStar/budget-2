<?php namespace App\Http\Controllers\Account;

use App\Account;
use App\Http\Controllers\AbstractController;
use App\Outcome;
use App\Revenue;
use App\Transfer;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Operations tab for account
 */
class OperationsController extends AbstractController
{

    /**
     * Render panel with navigation and table
     * @param  string $accountId Account primary key
     * @param  string|null $month Date within the month to consider (default to current month)
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getTable($accountId, $month = null) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $month->startOfMonth();

        $operations = $account->operationsInPeriod($month, $month->copy()->endOfMonth());

        $data = [
            'account' => $account,
            'operations' => $operations,
            'month' => $month,
            'prevMonth' => $month->copy()->subMonth(),
            'nextMonth' => $month->copy()->addMonth(),
        ];

        return view('account.operations.table', $data);
    }

    /**
     * Render table row with operation details
     * @param  string $accountId Account primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getRow($accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $data = [
            'account' => $account,
            'operation' => $operation,
        ];

        return view('account.operations.row', $data);
    }

    /**
     * Add new operation
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @return void
     */
    public function postAdd(Request $request, $accountId) {
        $account = Auth::user()->accounts()->findOrFail($accountId);

        $this->validate($request, [
            'type' => 'required|in:revenue,outcome,outgoingTransfer,incomingTransfer',
            'envelope_id'
                => 'required_if:type,outcome|exists:envelopes,id,account_id,'.$account->id,
            'to_account_id'
                => 'required_if:type,outgoingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'from_account_id'
                => 'required_if:type,incomingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $this->save($request, $account);
    }

    /**
     * Render table row with operation edit fields
     * @param  string $accountId Account primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return Illuminate\View\View|\Illuminate\Contracts\View\Factory View
     */
    public function getUpdate($accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $data = [
            'account' => $account,
            'operation' => $operation,
        ];

        return view('account.operations.update', $data);
    }

    /**
     * Update existing operation
     * @param  \Illuminate\Http\Request $request
     * @param  string $accountId Account primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return void
     */
    public function postUpdate(Request $request, $accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $this->validate($request, [
            'type' => 'required|in:revenue,outcome,outgoingTransfer,incomingTransfer',
            'envelope_id'
                => 'required_if:type,outcome,type,efectiveOutcome|exists:envelopes,id,account_id,'
                    .$account->id,
            'to_account_id'
                => 'required_if:type,outgoingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'from_account_id'
                => 'required_if:type,incomingTransfer|exists:account_user,account_id,user_id,'.Auth::user()->id,
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'date' => 'required|date_format:d/m/Y',
        ]);

        $this->save($request, $account, $operation);
    }

    /**
     * Delete existing operation
     * @param  string $accountId Account primary key
     * @param  string $operationType Operation type ('income', 'outcome', 'incomingTransfer', 'outgoingTransfer')
     * @param  string $operationId Operation primary key
     * @return void
     */
    public function postDelete($accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $operation->delete();
    }

    /**
     * Save request inputs into account's operation
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account $account Account
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    public function save(Request $request, Account $account, $operation = null) {
        if ($request->input('type') === 'outcome') {
            return $this->saveOutcome($request, $operation);
        }

        $this->{'save'.ucfirst($request->input('type'))}($request, $account, $operation);
    }

    /**
     * Save request inputs into account's revenue
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account $account Account
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    public function saveRevenue(Request $request, Account $account, $operation) {
        if (is_null($operation)) {
            $operation = new Revenue();
        }

        $operation->fill([
            'account_id' => $account->id,
            'envelope_id' => $request->get('envelope_id') ?: null,
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }


    /**
     * Save request inputs into account's outcome
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    public function saveOutcome(Request $request, $operation) {
        if (is_null($operation)) {
            $operation = new Outcome();
        }

        $operation->fill([
            'envelope_id' => $request->get('envelope_id'),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }

    /**
     * Save request inputs into account's outgoing transfer
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account $account Account
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    public function saveOutgoingTransfer(Request $request, Account $account, $operation) {
        if (is_null($operation)) {
            $operation = new Transfer();
        }

        $operation->fill([
            'from_account_id' => $account->id,
            'to_account_id' => $request->get('to_account_id'),
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }

    /**
     * Save request inputs into account's incoming transfer
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account $account Account
     * @param  \App\Operation|null $operation Operation
     * @return void
     */
    public function saveIncomingTransfer(Request $request, Account $account, $operation) {
        if (is_null($operation)) {
            $operation = new Transfer();
        }

        $operation->fill([
            'from_account_id' => $request->get('from_account_id'),
            'to_account_id' => $account->id,
            'name' => $request->get('name'),
            'amount' => $request->get('amount'),
            'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
        ])->save();
    }

}
