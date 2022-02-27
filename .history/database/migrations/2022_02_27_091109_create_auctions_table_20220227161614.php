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
        Schema::create('tb_lelang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tb_barang_id');
            $table->foreign('tb_barang_id')->references('tb_barang')->on('id')->cascadeOnDelete();
            $table->timestamp('tgl_lelang');
            $table->integer('harga_akhir');
            $table->unsignedBigInteger('tb_masyarakat_id');
            $table->foreign('tb_masyarakat_id')->references('tb_masyarakat')->on('id')->cascadeOnDelete();
            $table->unsignedBigInteger('tb_petugas_id');
            $table->foreign('tb_petugas_id')->references('tb_petugas')->on('id')->cascadeOnDelete();
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
        Schema::dropIfExists('auctions');
    }
};
