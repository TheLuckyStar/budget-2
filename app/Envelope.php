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
     * Get the outcomes for the envelope.
     */
    public function outcomes()
    {
        return $this->hasMany(Outcome::class);
    }

    /**
     * Calculate envelope balance at the given date
     * @return float Account balance
     */
    public function getBalanceAttribute($date = null)
    {
        $date = Carbon::startOfDay($date);

        return 1024.3;
    }

    /**
     * Calculate main envelope metrics for the given day
     * @return array Account metrics
     */
    public function getDailySnapshotAttribute($date = null)
    {
        return [
        ];
    }
}
