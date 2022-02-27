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
        Schema::create('history_lelang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tb_barang_id');
            $table->foreign('tb_barang_id')->references('tb_barang')->on('id')->cascadeOnDelete();
            $table->unsignedBigInteger('tb_lelang_id');
            $table->foreign('tb_lelang_id')->references('tb_lelang')->on('id')->cascadeOnDelete();
            $table->unsignedBigInteger('tb_masyarakat_id');
            $table->foreign('tb_masyarakat_id')->references('tb_masyarakat')->on('id')->cascadeOnDelete();
            $table->float('penawaran_harga', 24, 2);
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
        Schema::dropIfExists('histories');
    }
};
