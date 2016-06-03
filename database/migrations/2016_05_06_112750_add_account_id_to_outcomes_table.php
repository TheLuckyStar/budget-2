<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccountIdToOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('outcomes', function (Blueprint $table) {
            $table->integer('account_id')->index()->after('id');
        });

        DB::table('outcomes')
            ->join('envelopes', 'outcomes.envelope_id', '=', 'envelopes.id')
            ->update(['outcomes.account_id' => DB::raw('envelopes.account_id')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('outcomes', function (Blueprint $table) {
            $table->dropColumn('account_id');
        });
    }
}
