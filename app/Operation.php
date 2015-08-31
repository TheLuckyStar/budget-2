<?php namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasEvents;

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * Create a new Eloquent Collection instance.
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new OperationCollection($models);
    }

    public function scopeInPeriod($query, $from = null, $to = null) {
        if ($from instanceof Carbon === false
            && $to instanceof Carbon === false) {
            return $query;
        }

        $query->where(function($query) use($from, $to) {
            if ($from instanceof Carbon) {
                $query->where('date', '>=', $from);
            }

            if ($to instanceof Carbon) {
                $query->where(function($query) use($from, $to) {
                    $query->where('date', '<=', $to);

                    if ($from instanceof Carbon === false) {
                        $query->orWhere('date', null);
                    }
                });
            }
        });

        return $query;
    }
}
