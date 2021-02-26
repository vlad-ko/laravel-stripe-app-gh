<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('charge_id')->unsigned();
            $table->integer('amount')->nullable();
            $table->string('balance_transaction')->nullable();
            $table->string('created')->nullable();
            $table->string('currency')->nullable();
            $table->string('description')->nullable();
            $table->string('metadata')->nullable();
            $table->string('reason')->nullable();
            $table->string('receipt_number')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('refunds', function($table) {
            $table->foreign('charge_id')->references('id')->on('charges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refunds');
    }
}
