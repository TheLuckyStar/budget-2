<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecurringOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->index();
            $table->enum('type', ['revenue', 'outcome', 'incomingTransfer', 'outgoingTransfer']);
            $table->integer('entity_id')->nullable()->index();
            $table->string('name');
            $table->decimal('amount', 9, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recurring_operations');
    }
}
