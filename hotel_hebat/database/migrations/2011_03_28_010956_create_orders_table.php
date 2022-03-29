<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_hp', 12);
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');
            $table->integer('jumlah_kamar');
            $table->unsignedBigInteger('id_kamar');
            $table->timestamps();
            // foreign
            $table->foreign('id_kamar')->references('id')->on('rooms')->onDeleted('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
