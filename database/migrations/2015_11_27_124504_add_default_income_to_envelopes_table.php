<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultIncomeToEnvelopesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('envelopes', function (Blueprint $table) {
            $table->decimal('default_income', 9, 2)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('envelopes', function (Blueprint $table) {
            $table->dropColumn('default_income');
        });
    }
}
