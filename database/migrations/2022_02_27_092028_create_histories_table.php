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
            $table->foreign('tb_barang_id')->references('id')->on('tb_barang')->cascadeOnDelete();
            $table->unsignedBigInteger('tb_lelang_id');
            $table->foreign('tb_lelang_id')->references('id')->on('tb_lelang')->cascadeOnDelete();
            $table->unsignedBigInteger('tb_masyarakat_id');
            $table->foreign('tb_masyarakat_id')->references('id')->on('tb_masyarakat')->cascadeOnDelete();
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
