<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('history', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('jenis_pesawat');
          $table->string('berangkat_dari');
          $table->string('tujuan');
          $table->string('quantity');
          $table->string('total_harga');
          $table->string('customer_username');
          $table->string('ticket_id');
          $table->rememberToken();
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
        Schema::drop('transaksi');
    }
}
