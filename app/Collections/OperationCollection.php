<?php namespace App\Collections;

use Illuminate\Database\Eloquent\Collection;

class OperationCollection extends Collection {

    public function balance() {
        return $this->sum(function ($operation) {
            return $operation->amount_symbol.$operation->amount;
        });
    }

}