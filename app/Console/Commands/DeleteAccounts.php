<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class DeleteAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'accounts:delete {account}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete account data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $accountId = $this->argument('account');
        if (is_numeric($accountId) === false) {
            throw new InvalidArgumentException('Account is not a valid account ID.');
        }

        $this->deleteIncomes($accountId);
        $this->deleteOutcomes($accountId);
        $this->deleteRecurringOperations($accountId);
        $this->deleteRevenues($accountId);
        $this->deleteTransfers($accountId);
        $this->deleteEnvelopes($accountId);
        $this->deleteAccount($accountId);
    }

    private function deleteIncomes($accountId) {
        $count = DB::table('incomes')
            ->whereIn('envelope_id', DB::table('envelopes')->select('id')->where('account_id', $accountId))
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' incomes deleted');
    }

    private function deleteOutcomes($accountId) {
        $count = DB::table('outcomes')
            ->whereIn('envelope_id', DB::table('envelopes')->select('id')->where('account_id', $accountId))
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' outcomes deleted');
    }

    private function deleteRecurringOperations($accountId) {
        $count = DB::table('recurring_operations')
            ->where('account_id', $accountId)
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' recurring operations deleted');
    }

    private function deleteRevenues($accountId) {
        $count = DB::table('revenues')
            ->where('account_id', $accountId)
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' revenues deleted');
    }

    private function deleteTransfers($accountId) {
        $count = DB::table('transfers')
            ->where('from_account_id', $accountId)
            ->orWhere('to_account_id', $accountId)
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' transfers deleted');
    }

    private function deleteEnvelopes($accountId) {
        $count = DB::table('envelopes')
            ->where('account_id', $accountId)
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' envelopes deleted');
    }

    private function deleteAccount($accountId) {
        $count = DB::table('accounts')
            ->where('id', $accountId)
            ->delete();

        $this->output->writeln('<info>AccountDelete:</info> '.$count.' accounts deleted');
    }
}
