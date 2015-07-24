<?php namespace App\Services\Eloquent;

use App\Event;
use App;
use Auth;

trait HasEvents {

    /**
     * Define relation to App\Event
     *
     * @return void
     */
    public function events()
    {
        return $this->morphMany('App\Event', 'entity');
    }

    /**
     * The "booting" method of the trait.
     *
     * @return void
     */
    protected static function boot()
    {
        self::created([__CLASS__, 'produceCreateEvent']);
    }

    /**
     * Insert new record to events table. Called after a model related to App\Event has been created.
     * @param  Illuminate\Database\Eloquent\Model $entity Entity related to the event
     * @return void
     */
    protected static function produceCreateEvent($entity)
    {
        $event = new Event([
            'user_id' => App::runningInConsole() ? 1 : Auth::user()->id,
            'action' => 'create',
        ]);

        $entity->events()->save($event);
    }
}