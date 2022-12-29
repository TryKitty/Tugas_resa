<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_m_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id');
            $table->string('nama_barang');
            $table->bigInteger('stok');
            $table->bigInteger('jumlah_terjual');
            $table->string('tanggal_transaksi');
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
        Schema::dropIfExists('product_m_s');
    }
};
