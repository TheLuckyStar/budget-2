<?php

use App\CurrencyRate;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrencyRatesTableSeeder extends Seeder
{

    /**
     * List of rates to convert EURO to SEK indexed by date
     * Source : http://www.xe.com/currencytables/?from=EUR
     * @var array
     */
    private $ratesEuroToSek = [
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
        '2016-08-01' => 9.5783297240,
    ];

    /**
     * List of rates to convert EURO to SEK indexed by date
     * Source : http://www.xe.com/currencytables/?from=SEK
     * @var array
     */
    private $ratesSekToEuro = [
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
        '2016-07-01' => 0.1064041111,
        '2016-08-01' => 0.1044023362,
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->ratesEuroToSek as $date => $rate) {
            CurrencyRate::create([
                'from_currency_id' => 1,
                'to_currency_id' => 2,
                'rate' => $rate,
                'date' => Carbon::parse($date),
            ]);
        }

        foreach ($this->ratesSekToEuro as $date => $rate) {
            CurrencyRate::create([
                'from_currency_id' => 2,
                'to_currency_id' => 1,
                'rate' => $rate,
                'date' => Carbon::parse($date),
            ]);
        }
    }
}
