<?php

use App\CurrencyRate;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrencyRatesTableSeeder extends Seeder
{

    /**
     * List of rates indexed by date
     * @var array
     */
    private $ratesByDate = [
        '2015-07-01' => 0.1080508592,
        '2015-08-01' => 0.1055594652,
        '2015-09-01' => 0.1049338507,
        '2015-10-01' => 0.1067484914,
        '2015-11-01' => 0.1066854198,
        '2015-12-01' => 0.1082940805,
        '2016-01-01' => 0.1088594548,
        '2016-02-01' => 0.1075561044,
        '2016-03-01' => 0.1068180447,
        '2016-04-01' => 0.1082247054,
        '2016-05-01' => 0.1086840605,
        '2016-06-01' => 0.1078455868,
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
