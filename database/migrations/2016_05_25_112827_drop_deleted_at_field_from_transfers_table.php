<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropDeletedAtFieldFromTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transfers', function (Blueprint $table) {
            app('db')->table($table->getTable())->whereNotNull('deleted_at')->delete();
            $table->dropColumn('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transfers', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
}
