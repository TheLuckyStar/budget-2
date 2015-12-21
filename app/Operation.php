<?php namespace App;

use App\Collections\OperationCollection;
use App\Services\Eloquent\HasEvents;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * @property string $name
 * @property float $amount
 * @property Carbon\Carbon $date
 * @property Carbon\Carbon $created_at
 * @property App\Account $account
 */
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

    public function scopeInPeriod(EloquentBuilder $query, $after = null, $before = null) {
        if ($after instanceof Carbon === false
            && $before instanceof Carbon === false) {
            return $query;
        }

        $query->where(function(EloquentBuilder $query) use($after, $before) {
            if ($after instanceof Carbon) {
                $query->where('date', '>=', $after);
            }

            if ($before instanceof Carbon) {
                $query->where(function(EloquentBuilder $query) use($after, $before) {
                    $query->where('date', '<=', $before);

                    if ($after instanceof Carbon === false) {
                        $query->orWhere('date', null);
                    }
                });
            }
        });

        return $query;
    }
}
