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
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $envelopeQuery = DB::table('envelopes')->select('id')->whereNotIn('account_id', $accountQuery);
            $query->whereIn('envelope_id', $envelopeQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' incomes deleted');
    }

    private function deleteOutcomes($exceptUser) {
        $query = DB::table('outcomes');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $envelopeQuery = DB::table('envelopes')->select('id')->whereNotIn('account_id', $accountQuery);
            $query->whereIn('envelope_id', $envelopeQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' outcomes deleted');
    }

    private function deleteRecurringOperations($exceptUser) {
        $query = DB::table('recurring_operations');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $query->whereNotIn('account_id', $accountQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' recurring operations deleted');
    }

    private function deleteRevenues($exceptUser) {
        $query = DB::table('revenues');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $envelopeQuery = DB::table('envelopes')->select('id')->whereNotIn('account_id', $accountQuery);
            $query->whereNotIn('account_id', $accountQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' revenues deleted');
    }

    private function deleteTransfers($exceptUser) {
        $query = DB::table('transfers');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $query->whereNotIn('from_account_id', $accountQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' transfers deleted');
    }

    private function deleteEnvelopes($exceptUser) {
        $query = DB::table('envelopes');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $query->whereNotIn('account_id', $accountQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' envelopes deleted');
    }

    private function deleteAccounts($exceptUser) {
        $query = DB::table('accounts');

        if (is_numeric($exceptUser)) {
            $accountQuery = DB::table('account_user')->select('account_id')->where('user_id', $exceptUser);
            $query->whereNotIn('id', $accountQuery);
        }

        $count = $query->delete();
        $this->output->writeln('<info>UserDelete:</info> '.$count.' accounts deleted');
    }
}
