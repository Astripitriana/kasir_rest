<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('menu_id')->unsigned();
            $table->bigInteger('jumlah')->unsigned();
            $table->bigInteger('harga')->unsigned();
            $table->bigInteger('uang')->unsigned();

            $table->bigInteger('total')->unsigned();
            $table->bigInteger('kembalian')->unsigned();
            $table->date('tanggal');

            $table->string('status');

            $table->foreign('order_id')->references('id')
                ->on('orders')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('customer_id')->references('id')
                ->on('customers')->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('menu_id')->references('id')
                ->on('menus')->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('transaksis');
    }
}
