<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\AbstractController;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OperationsController extends AbstractController
{
    /**
     * List operations related to one account (second tab)
     * @param  string $accountId Account ID
     * @return \Illuminate\View\View View to render
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

    public function getRow($accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $data = [
            'account' => $account,
            'operation' => $operation,
        ];

        return view('account.operations.row', $data);
    }

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

        if ($request->input('type') === 'revenue') {
            $account->revenues()->create([
                'envelope_id' => $request->get('envelope_id') ?: null,
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ]);
            return;
        }

        if ($request->input('type') === 'outcome') {
            $account->envelopes()->findOrFail($request->get('envelope_id'))->outcomes()->create([
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay()
            ]);
            return;
        }

        if ($request->input('type') === 'outgoingTransfer') {
            $account->outgoingTransfers()->create([
                'to_account_id' => $request->get('to_account_id'),
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ]);
            return;
        }

        if ($request->input('type') === 'incomingTransfer') {
            $account->incomingTransfers()->create([
                'from_account_id' => $request->get('from_account_id'),
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ]);
            return;
        }
    }

    public function getUpdate($accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $data = [
            'account' => $account,
            'operation' => $operation,
        ];

        return view('account.operations.update', $data);
    }

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

        if ($request->input('type') === 'revenue') {
            $operation->fill([
                'envelope_id' => $request->get('envelope_id') ?: null,
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ])->save();
            return;
        }


        if ($request->input('type') === 'outcome') {
            $operation->fill([
                'envelope_id' => $request->get('envelope_id'),
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ])->save();
            return;
        }

        if ($request->input('type') === 'outgoingTransfer') {
            $operation->fill([
                'from_account_id' => $account->id,
                'to_account_id' => $request->get('to_account_id'),
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ])->save();
            return;
        }

        if ($request->input('type') === 'incomingTransfer') {
            $operation->fill([
                'from_account_id' => $request->get('from_account_id'),
                'to_account_id' => $account->id,
                'name' => $request->get('name'),
                'amount' => $request->get('amount'),
                'date' => Carbon::createFromFormat('d/m/Y', $request->get('date'))->startOfDay(),
            ])->save();
            return;
        }
    }

    public function postDelete($accountId, $operationType, $operationId) {
        $account   = Auth::user()->accounts()->findOrFail($accountId);
        $operation = $account->operationType($operationType)->findOrFail($operationId);

        $operation->delete();
    }

}
