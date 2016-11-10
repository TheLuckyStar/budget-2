<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;

class ConvertAmounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amounts:convert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert some amounts';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('incomes')
            ->where('date', '>=', Carbon::createFromDate(2016, 7, 1)->startOfMonth())
            ->where('currency_id', 1)
            ->update([
                'amount' => Db::raw('amount * 10'),
                'currency_id' => 2,
            ]);
    }
}
