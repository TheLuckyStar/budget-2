<?php

namespace App;

use App\Factories\Carbon;

class Account extends Container
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'currency', 'deleted_at'];

    /**
     * Get the revenues for the account.
     */
    public function revenues()
    {
        return $this->hasMany(Revenue::class);
    }

    /**
     * Get the outcomes for the account.
     */
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }

    /**
     * Get the incoming transfers for the account.
     */
    public function incomingTransfers()
    {
        return $this->hasMany(Transfer::class, 'to_account_id');
    }

    /**
     * Get the outgoing transfers for the account.
     */
    public function outgoingTransfers()
    {
        return $this->hasMany(Transfer::class, 'from_account_id');
    }

    /**
     * Calculate account balance at the given date
     * @return float Account balance
     */
    public function getBalanceAttribute($date = null)
    {
        $revenues = $this->getRevenuesAttribute(null, $date);
        $outcomes = $this->getOutcomesAttribute(null, $date);
        $incomingTransfers = $this->getIncomingTransfersAttribute(null, $date);
        $outgoingTransfers = $this->getOutgoingTransfersAttribute(null, $date);

        return round($revenues + $incomingTransfers - $outcomes - $outgoingTransfers, 2);
    }

    /**
     * Calculate account revenues for the given period
     * @return float Account balance
     */
    public function getRevenuesAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->revenues()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom && $dateTo) {
            $query->whereBetween('date', [$dateFrom, $dateTo]);
        } else if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        } else if ($dateTo) {
            $query->where(function ($query) use($dateTo) {
                $query->where('date', '<=', $dateTo);
                $query->orWhere('date', null);
            });
        }

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate account outcomes for the given period
     * @return float Account balance
     */
    public function getOutcomesAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->outcomes()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate account incoming tranfers for the given period
     * @return float Account incoming transfers
     */
    public function getIncomingTransfersAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->incomingTransfers()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate account outgoing tranfers for the given period
     * @return float Account outgoing transfers
     */
    public function getOutgoingTransfersAttribute($dateFrom = null, $dateTo = null)
    {
        $query = $this->outgoingTransfers()
            ->select(app('db')->raw('SUM(amount) as total'));

        if ($dateFrom) {
            $query->where('date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->where('date', '<=', $dateTo);
        }

        return floatval($query->get()[0]['total']);
    }

    /**
     * Calculate main account metrics for the given day
     * @return array Account metrics
     */
    public function getDailySnapshotAttribute($date = null)
    {
        $date = Carbon::startOfDay($date);

        return [
            'balance' => $this->getBalanceAttribute($date),
            'revenues' => $this->getRevenuesAttribute($date, $date),
            'outcomes' => $this->getOutcomesAttribute($date, $date),
            'incomingTransfers' => $this->getIncomingTransfersAttribute($date, $date),
            'outgoingTransfers' => $this->getOutgoingTransfersAttribute($date, $date),
        ];
    }
}
