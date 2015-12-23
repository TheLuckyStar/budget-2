<?php namespace App\Collections;

use App\Income;
use App\Operation;
use App\Outcome;
use App\Revenue;
use App\Transfer;
use Html;
use Illuminate\Database\Eloquent\Collection;

/**
 * Collection of opearaion models
 */
class OperationCollection extends Collection
{

    /**
     * Get a collection containing only revenues
     * @return Collection Filtered collection
     */
    public function filterRevenues()
    {
        return $this->filter(function($operation) {
            return $operation instanceOf Revenue;
        });
    }

    /**
     * Get a collection containing only incomes
     * @return Collection Filtered collection
     */
    public function filterIncomes()
    {
        return $this->filter(function($operation) {
            return $operation instanceOf Income;
        });
    }

    /**
     * Get a collection containing only outcomes
     * @return Collection Filtered collection
     */
    public function filterOutcomes()
    {
        return $this->filter(function($operation) {
            return $operation instanceOf Outcome;
        });
    }

    /**
     * Get a collection containing only incoming transfers for the given account
     * @param $account \App\Account Account
     * @return Collection Filtered collection
     */
    public function filterIncomingTransfers($account)
    {
        return $this->filter(function($operation) use ($account) {
            return $operation instanceOf Transfer && $account->id === $operation->accountTo->id;
        });
    }

    /**
     * Get a collection containing only outgoing transfers for the given account
     * @param $account \App\Account Account
     * @return Collection Filtered collection
     */
    public function filterOutgoingTransfers($account)
    {
        return $this->filter(function($operation) use ($account) {
            return $operation instanceOf Transfer && $account->id === $operation->accountFrom->id;
        });
    }

    /**
     * Sort operations by date and then by created at date
     * @return Collection Filtered collection
     */
    public function sortByDateThenCreatedAt()
    {
        return $this->sort(function(Operation $operation1, Operation $operation2) {
            if ($operation1->date->eq($operation2->date)) {
                return $operation2->created_at->diffInSeconds($operation1->created_at, false);
            }

            return $operation2->date->diffInSeconds($operation1->date, false);
        });
    }

    /**
     * Get an array of operation name & formatted amount
     * @return array Array of operations name & amount
     */
    public function toNameAndAmountList() {
        return $this->map(function(Operation $operation) {
            return sprintf(
                '%s : %s',
                $operation->name,
                Html::formatPrice($operation->amount, $operation->account->currency)
            );
        })->toArray();
    }

}
