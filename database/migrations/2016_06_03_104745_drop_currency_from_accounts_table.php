<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCurrencyFromAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropColumn('currency');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->char('currency', 3)->after('name');
        });
        DB::table('accounts')
            ->join('currencies', 'accounts.currency_id', '=', 'currencies.id')
            ->update(['accounts.currency' => DB::raw('currencies.name')]);
    }
}
