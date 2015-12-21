<?php namespace App\Collections;

use App\Income;
use App\Revenue;
use App\Outcome;
use App\Operation;
use App\Transfer;
use Html;
use Illuminate\Database\Eloquent\Collection;

class OperationCollection extends Collection
{
    public function filterRevenues()
    {
        return $this->filter(function($operation) {
            return $operation instanceOf Revenue;
        });
    }

    public function filterIncomes()
    {
        return $this->filter(function($operation) {
            return $operation instanceOf Income;
        });
    }

    public function filterOutcomes()
    {
        return $this->filter(function($operation) {
            return $operation instanceOf Outcome;
        });
    }

    public function filterIncomingTransfers($account)
    {
        return $this->filter(function($operation) use ($account) {
            return $operation instanceOf Transfer && $account->id === $operation->accountTo->id;
        });
    }

    public function filterOutgoingTransfers($account)
    {
        return $this->filter(function($operation) use ($account) {
            return $operation instanceOf Transfer && $account->id === $operation->accountFrom->id;
        });
    }

    public function sortByDateThenCreatedAt()
    {
        return $this->sort(function (Operation $operation1, Operation $operation2) {
            if ($operation1->date->eq($operation2->date)) {
                return $operation2->created_at->diffInSeconds($operation1->created_at, false);
            }

            return $operation2->date->diffInSeconds($operation1->date, false);
        });
    }

    public function toNameAndAmountList() {
        return $this->map(function (Operation $operation) {
            return sprintf(
                '%s : %s',
                $operation->name,
                Html::formatPrice($operation->amount, $operation->account->currency)
            );
        })->toArray();
    }
}
