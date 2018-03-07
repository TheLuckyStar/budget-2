<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Envelope;
use App\Income;
use App\Outcome;
use App\Revenue;
use App\Transfer;

class Simon extends Controller
{
    public function index()
    {
        $envelope = Envelope::find(55);
        $currency = Currency::find(2);

        $output = collect()
            ->merge($this->revenues($envelope, $currency))
            ->merge($this->incomes2017($envelope, $currency))
            ->merge($this->incomes2018($envelope, $currency))
            ->merge($this->outcomes($envelope, $currency))
            ->sortBy('date')
            ->groupBy('group')
            ->map([$this, 'balance']);

        return $output
            ->put('Total', $this->total($output))
            ->map(function ($operations) {
                return $operations->map(function ($amount) {
                    return round($amount, 2);
                });
            });
    }

    public function revenues(Envelope $envelope, Currency $currency)
    {
        return $envelope
            ->revenues()
            ->select('revenues.amount', 'accounts.currency_id', 'revenues.name')
            ->join('accounts', 'revenues.account_id', '=', 'accounts.id')
            ->convertedTo($currency)
            ->get()
            ->map(function (Revenue $revenue) {
                return [
                    'group' => 'SDA GW',
                    'name' => $revenue->name,
                    'amount' => $revenue->converted_amount,
                    'date' => $revenue->date,
                ];
            });
    }

    public function incomes2017(Envelope $envelope, Currency $currency)
    {
        return $envelope
            ->incomes()
            ->select('incomes.date')
            ->convertedTo($currency)
            ->whereYear('date', '=', 2017)
            ->get()
            ->flatMap(function (Income $income) {
                return [
                    [
                        'group' => 'Logiciels',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 50,
                        'date' => $income->date,
                    ],
                    [
                        'group' => 'MTG',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 100,
                        'date' => $income->date,
                    ],
                    [
                        'group' => 'SDA Sorciers',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 100,
                        'date' => $income->date,
                    ],
                ];
            });
    }

    public function incomes2018(Envelope $envelope, Currency $currency)
    {
        return $envelope
            ->incomes()
            ->select('incomes.date')
            ->convertedTo($currency)
            ->whereYear('date', '=', 2018)
            ->get()
            ->flatMap(function (Income $income) {
                return [
                    [
                        'group' => 'Logiciels',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 50,
                        'date' => $income->date,
                    ],
                    [
                        'group' => 'MTG',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 100,
                        'date' => $income->date,
                    ],
                    [
                        'group' => 'SDA Sorciers',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 100,
                        'date' => $income->date,
                    ],
                    [
                        'group' => 'SDA GW',
                        'name' => 'Revenue '.$income->date->toDateString(),
                        'amount' => 250,
                        'date' => $income->date,
                    ],
                ];
            });
    }

    public function outcomes(Envelope $envelope, Currency $currency)
    {
        return $envelope
            ->outcomes()
            ->select('outcomes.amount', 'accounts.currency_id', 'outcomes.name', 'outcomes.date')
            ->join('accounts', 'outcomes.account_id', '=', 'accounts.id')
            ->convertedTo($currency)
            ->get()
            ->map(function (Outcome $outcome) {
                list($group, $name) = explode(" : ", $outcome->name);
                return [
                    'group' => $group,
                    'name' => $name,
                    'amount' => -$outcome->converted_amount,
                    'date' => $outcome->date,
                ];
            });
    }

    public function balance($operations)
    {
        $balance = 0;

        return $operations
            ->map(function ($operation) use (&$balance) {
                $balance += $operation['amount'];
                return [
                    'name' => $operation['name'].' ('.round($operation['amount']).')',
                    'balance' => $balance,
                ];
            })
            ->pluck('balance', 'name');
    }

    public function total($operations)
    {
        $total = $operations->map(function ($operations) {
            return $operations->last();
        });

        return $total->put('Total', $total->sum());
    }
}
