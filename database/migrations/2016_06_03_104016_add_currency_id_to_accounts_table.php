<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurrencyIdToAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->integer('currency_id')->index()->after('id');
        });

        DB::table('accounts')
            ->join('currencies', 'accounts.currency', '=', 'currencies.name')
            ->update(['accounts.currency_id' => DB::raw('currencies.id')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('currency_id');
        });
    }
}
