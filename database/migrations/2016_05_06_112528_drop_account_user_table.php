<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropAccountUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('account_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('account_user', function (Blueprint $table) {
            $table->integer('account_id')->index();
            $table->integer('user_id')->index();
            $table->boolean('owner')->default(0);
            $table->timestamps();
        });
    }
}
