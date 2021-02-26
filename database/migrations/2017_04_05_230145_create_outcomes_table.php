<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outcomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('charge_id')->unsigned();
            $table->string('network_status')->nullable();
            $table->string('reason')->nullable();
            $table->string('risk_level')->nullable();
            $table->string('seller_message')->nullable();
            $table->string('rule')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });

        Schema::table('outcomes', function($table) {
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
        Schema::dropIfExists('outcomes');
    }
}
