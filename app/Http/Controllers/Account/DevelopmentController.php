<?php namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Auth;
use Config;
use Carbon\Carbon;

class DevelopmentController extends Controller
{
    /**
     * Show charts about account development (third tab)
     * @param  string $account_id Account ID
     * @return Illuminate/Http/Response View to render
     */
    public function getIndex($account_id, $month = null, $year = null, $envelopeYear = null) {
        $account = Auth::user()->accounts()->findOrFail($account_id);

        $month = is_null($month) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $month);
        $month->startOfMonth();

        $monthData = [];
        for ($date = $month->copy(); $date->month === $month->month; $date->addDay()) {
            $monthData[] = [
                'date' => $date->toDateString(),
                'effective_outcome' => $account->getEffectiveOutcomeAttribute($date),
                'intended_outcome' => $account->getIntendedOutcomeAttribute($date),
                'unallocated_balance' => $account->getUnallocatedBalanceAttribute($date),
                'allocated_balance' => $account->getAllocatedBalanceAttribute($date),
            ];
        }

        $year = is_null($year) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $year);
        $year->startOfYear();

        $monthLabels = [];
        $yearData = [];
        for ($date = $year->copy(); $date->year === $year->year; $date->addMonth()) {
            $montLabels[] = $date->formatLocalized('%B');

            $yearData[] = [
                'date' => $date->format('Y-m'),
                'effective_outcome' => $account->getEffectiveOutcomeAttribute($date),
                'intended_outcome' => $account->getIntendedOutcomeAttribute($date),
                'unallocated_balance' => $account->getUnallocatedBalanceAttribute($date),
                'allocated_balance' => $account->getAllocatedBalanceAttribute($date),
            ];
        }

        $envelopeYear = is_null($envelopeYear) ? Carbon::today() : Carbon::createFromFormat('Y-m-d', $envelopeYear);
        $envelopeYear->startOfYear();

        $envelopeData = [];
        for ($date = $envelopeYear->copy(); $date->year === $envelopeYear->year; $date->addMonth()) {
            $data = [
                'date' => $date->formatLocalized('%B'),
            ];

            foreach ($account->envelopes as $envelope) {
                $data[$envelope->id] = $envelope->getIncomeAttribute($date);
            }

            $envelopeData[] = $data;
        }

        $data = [
            'account' => $account,
            'activeTab' => 'development',
            'month' => $month,
            'prevMonth' => $month->copy()->subMonth(),
            'nextMonth' => $month->copy()->addMonth(),
            'monthData' => json_encode($monthData),
            'monthColors' => json_encode(array_values(Config::get('budget.statusColors'))),
            'year' => $year,
            'prevYear' => $year->copy()->subYear(),
            'nextYear' => $year->copy()->addYear(),
            'yearData' => json_encode($yearData),
            'yearColors' => json_encode(array_values(Config::get('budget.statusColors'))),
            'envelopeYear' => $envelopeYear,
            'prevEnvelopeYear' => $envelopeYear->copy()->subYear(),
            'nextEnvelopeYear' => $envelopeYear->copy()->addYear(),
            'envelopeData' => json_encode($envelopeData),
            'envelopeYearColors' => json_encode(array_values(Config::get('budget.statusColors'))),
            'montLabels' => json_encode($montLabels),
        ];

        return view('account.development', $data);
    }
}