<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stripe_id');
            $table->string('object');
            $table->integer('amount');
            $table->integer('amount_refunded')->nullable();
            $table->string('application')->nullable();
            $table->string('application_fee')->nullable();
            $table->string('balance_transaction')->nullable();
            $table->boolean('captured')->nullable();
            $table->integer('created')->nullable();
            $table->string('currency')->nullable();
            $table->string('customer')->nullable();
            $table->string('description')->nullable();
            $table->string('destination')->nullable();
            $table->string('dispute')->nullable();
            $table->string('failure_code')->nullable();
            $table->string('failure_message')->nullable();
            $table->string('invoice')->nullable();
            $table->boolean('livemode')->nullable();
            $table->string('on_behalf_of')->nullable();
            $table->string('order')->nullable();
            $table->boolean('paid')->nullable();
            $table->string('receipt_email')->nullable();
            $table->string('receipt_number')->nullable();
            $table->boolean('refunded')->nullable();
            $table->string('review')->nullable();
            $table->string('shipping')->nullable();
            $table->string('source_transfer')->nullable();
            $table->string('statement_descriptor')->nullable();
            $table->string('status')->nullable();
            $table->string('transfer_group')->nullable();
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
        Schema::dropIfExists('charges')->nullable();
    }
}
