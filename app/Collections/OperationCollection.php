<?php namespace App\Collections;

use App\Income;
use App\Revenue;
use App\Outcome;
use Illuminate\Database\Eloquent\Collection;

class OperationCollection extends Collection
{
    public function filterRevenues()
    {
        return $this->filter(function ($operation) {
            return $operation instanceOf Revenue;
        });
    }

    public function filterIncomes()
    {
        return $this->filter(function ($operation) {
            return $operation instanceOf Income;
        });
    }

    public function filterOutcomes()
    {
        return $this->filter(function ($operation) {
            return $operation instanceOf Outcome;
        });
    }
}