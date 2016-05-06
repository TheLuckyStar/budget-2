<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class DeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:delete {--e|except-user=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete user data (except one if provided)';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $exceptUser = $this->option('except-user');

        $this->deleteIncomes($exceptUser);
        $this->deleteOutcomes($exceptUser);
        $this->deleteRecurringOperations($exceptUser);
        $this->deleteRevenues($exceptUser);
        $this->deleteTransfers($exceptUser);
        $this->deleteEnvelopes($exceptUser);
        $this->deleteAccounts($exceptUser);
    }

    private function deleteIncomes($exceptUser) {
        $query = DB::table('incomes');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $envelopeQuery = DB::table('envelopes')->select('id')->where('account_id', 'IN', $accountQuery);
            $query->where('envelope_id', 'IN', $envelopeQuery);
        }

        $query->delete();
    }

    private function deleteOutcomes($exceptUser) {
        $query = DB::table('outcomes');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $envelopeQuery = DB::table('envelopes')->select('id')->where('account_id', 'IN', $accountQuery);
            $query->where('envelope_id', 'IN', $envelopeQuery);
        }

        $query->delete();
    }

    private function deleteRecurringOperations($exceptUser) {
        $query = DB::table('recurring_operations');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $query->where('account_id', 'IN', $accountQuery);
        }

        $query->delete();
    }

    private function deleteRevenues($exceptUser) {
        $query = DB::table('revenues');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $envelopeQuery = DB::table('envelopes')->select('id')->where('account_id', 'IN', $accountQuery);
            $query->where('account_id', 'IN', $accountQuery);
            $query->orWhere('envelope_id', 'IN', $envelopeQuery);
        }

        $query->delete();
    }

    private function deleteTransfers($exceptUser) {
        $query = DB::table('transfers');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $query->where('from_account_id', 'IN', $accountQuery);
        }

        $query->delete();
    }

    private function deleteEnvelopes($exceptUser) {
        $query = DB::table('envelopes');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $query->where('account_id', 'IN', $accountQuery);
        }

        $query->delete();
    }

    private function deleteAccounts($exceptUser) {
        $query = DB::table('accounts');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('accounts_users')->select('account_id')->where('user_id', '<>', $exceptUser);
            $query->where('id', 'IN', $accountQuery);
        }

        $query->delete();
    }
}