<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_name');
            $table->string('trx_type');
            $table->string('send_method');
            $table->string('receive_method');
            $table->string('send_amount');
            $table->string('receive_amount');
            $table->string('send_method_number');
            $table->string('send_method_trx_id');
            $table->string('receive_method_address');
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
        Schema::dropIfExists('buys');
    }
}
