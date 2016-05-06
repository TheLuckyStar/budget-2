<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('events');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('entity_id')->index();
            $table->string('entity_type')->index();
            $table->enum('action', ['create','update','delete','restore']);
            $table->string('field_name');
            $table->string('field_value_from')->nullable();
            $table->string('field_value_to')->nullable();
            $table->timestamps();
        });
    }
}
