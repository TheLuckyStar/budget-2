<?php

namespace App;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * @property integer $id
 */
trait AccountRelatedEvents
{

    public function relatedEvents()
    {
        $query = Event::query();

        $this->relatedEventsAccount($query);
        $this->relatedEventsEnvelope($query);
        $this->relatedEventsRevenue($query);
        $this->relatedEventsTransfer($query);
        $this->relatedEventsIncome($query);
        $this->relatedEventsOutcome($query);

        return $query->orderBy('id', 'desc');
    }

    /**
     * @param EloquentBuilder $query
     */
    private function relatedEventsAccount(EloquentBuilder $query) {
        $query->where(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Account')->where('entity_id', $this->id);
        });
    }

    /**
     * @param EloquentBuilder $query
     */
    private function relatedEventsEnvelope(EloquentBuilder $query) {
        $query->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Envelope')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('envelopes')->where('account_id', $this->id);
            });
        });
    }

    /**
     * @param EloquentBuilder $query
     */
    private function relatedEventsRevenue(EloquentBuilder $query) {
        $query->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Revenue')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('revenues')->where('account_id', $this->id)->whereNotNull('date');
            });
        });
    }

    /**
     * @param EloquentBuilder $query
     */
    private function relatedEventsTransfer(EloquentBuilder $query) {
        $query->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Transfer')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')
                    ->from('transfers')
                    ->where('from_account_id', $this->id)
                    ->orWhere('to_account_id', $this->id);
            });
        });
    }

    /**
     * @param EloquentBuilder $query
     */
    private function relatedEventsIncome(EloquentBuilder $query) {
        $query->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Income')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('incomes')->whereIn('envelope_id', function(QueryBuilder $query) {
                    $query->select('id')->from('envelopes')->where('account_id', $this->id);
                });
            });
        });
    }

    /**
     * @param EloquentBuilder $query
     */
    private function relatedEventsOutcome(EloquentBuilder $query) {
        $query->orWhere(function(EloquentBuilder $query) {
            $query->where('entity_type', 'App\Outcome')->whereIn('entity_id', function(QueryBuilder $query) {
                $query->select('id')->from('outcomes')->whereIn('envelope_id', function(QueryBuilder $query) {
                    $query->select('id')->from('envelopes')->where('account_id', $this->id);
                });
            });
        });
    }

}
