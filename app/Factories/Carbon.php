<?php

namespace App\Factories;

use Carbon\Carbon as Date;

class Carbon
{
    static public function create($date) {
        if ($date instanceof Date) {
            return $date->copy();
        }

        if (is_string($date)) {
            return Date::parse($date);
        }

        return Date::now();
    }

    static public function startOfDay($date)
    {
        return static::create($date)->startOfDay();
    }

    static public function startOfMonth($date)
    {
        return static::create($date)->startOfMonth();
    }

    static public function endOfMonth($date)
    {
        return static::create($date)->endOfMonth();
    }

    static public function startOfYear($date)
    {
        return static::create($date)->startOfYear();
    }

    static public function endOfYear($date)
    {
        return static::create($date)->endOfYear();
    }
}
