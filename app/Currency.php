<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Select currency for any operation (here revenues):
 * - option 1 : STRICT JOIN
 *     SELECT *
 *     FROM `revenues` R
 *     LEFT JOIN `currency_rates` CR ON DATE_FORMAT(CR.date, '%Y-%m') = DATE_FORMAT(R.date, '%Y-%m')
 * - option 2 : LOOSELY JOIN
 *     SELECT *
 *     FROM `revenues` R
 *     LEFT JOIN `currency_rates` CR ON CR.date >= DATE_FORMAT(R.date, '%Y-%m-01')
 *     GROUP BY R.id
 *     ORDER BY CR.date, R.date
 * - option 3 : SUBQUERY
 *     SELECT *, (
 *         SELECT rate
 *         FROM `currency_rates` CR
 *         WHERE CR.date >= DATE_FORMAT(R.date, '%Y-%m-01') OR R.date IS NULL
 *         ORDER BY CR.date
 *         LIMIT 1
 *     ) AS currency_date
 *     FROM `revenues` R
 * - option 3 : SPLIT `date`
 * - option 4 : SPLIT `date` & implement daily currency rate
 */

class Currency extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the accounts for the currency.
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    /**
     * Get the incomes for the currency.
     */
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    /**
     * Get the rates for the currency.
     */
    public function rates()
    {
        return $this->hasMany(CurrencyRate::class);
    }
}
