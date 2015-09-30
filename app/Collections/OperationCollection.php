<?php namespace App\Collections;

use App\Income;
use App\Revenue;
use App\Outcome;
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

    public function sortByDateThenCreatedAt()
    {
        return $this->sort(function ($operation1, $operation2) {
            if ($operation1->date->eq($operation2->date)) {
                return $operation2->created_at->diffInSeconds($operation1->created_at, false);
            }

            return $operation2->date->diffInSeconds($operation1->date, false);
        });
    }
}
