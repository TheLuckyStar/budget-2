<?php

use App\CurrencyRate;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrencyRatesTableSeeder extends Seeder
{

    /**
     * List of rates indexed by date
     * Source : http://www.xe.com/currencytables/?from=EUR
     * @var array
     */
    private $ratesByDate = [
        '2015-07-01' => 9.2549009512,
        '2015-08-01' => 9.4733333333,
        '2015-09-01' => 9.5298132467,
        '2015-10-01' => 9.3678138879,
        '2015-11-01' => 9.3733520636,
        '2015-12-01' => 9.2341150589,
        '2016-01-01' => 9.1861566109,
        '2016-02-01' => 9.2974732150,
        '2016-03-01' => 9.3617141440,
        '2016-04-01' => 9.2400343923,
        '2016-05-01' => 9.2009812203,
        '2016-06-01' => 9.2725166545,
        '2016-07-01' => 9.3981331148,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->ratesByDate as $date => $rate) {
            CurrencyRate::create([
                'currency_id' => 2,
                'rate' => $rate,
                'date' => Carbon::parse($date),
            ]);
        }
    }
}
