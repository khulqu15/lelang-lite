<?php

use App\Models\Auction;
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
            $table->foreign('tb_barang_id')->references('id')->on('tb_barang')->cascadeOnDelete();
            $table->timestamp('tgl_lelang');
            $table->float('harga_akhir', 24, 2);
            $table->unsignedBigInteger('tb_masyarakat_id');
            $table->foreign('tb_masyarakat_id')->references('id')->on('tb_masyarakat')->cascadeOnDelete();
            $table->unsignedBigInteger('tb_petugas_id');
            $table->foreign('tb_petugas_id')->references('id')->on('tb_petugas')->cascadeOnDelete();
            $table->enum('status', Auction::getAvailableStatus());
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
