<?php

namespace App;

class Envelope extends Container
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'icon', 'deleted_at'];

    /**
     * Calculate current container balance
     * @return float Current balance
     */
    public function getBalanceAttribute()
    {
        return -1024.4;
    }
}