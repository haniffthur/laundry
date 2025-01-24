<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tb_transaksi', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_outlet');
        $table->string('kode_invoice', 100)->unique();
        $table->unsignedBigInteger('id_member');
        $table->dateTime('tgl');
        $table->dateTime('batas_waktu');
        $table->dateTime('tgl_bayar')->nullable();
        $table->integer('biaya_tambahan')->default(0);
        $table->double('diskon')->default(0);
        $table->integer('pajak')->default(0);
        $table->enum('status', ['baru', 'proses', 'selesai', 'diambil']);
        $table->enum('dibayar', ['dibayar', 'belum_dibayar']);
        $table->unsignedBigInteger('id_user');
        $table->timestamps();

        $table->foreign('id_outlet')->references('id')->on('tb_outlet')->onDelete('cascade');
        $table->foreign('id_member')->references('id')->on('tb_member')->onDelete('cascade');
        $table->foreign('id_user')->references('id')->on('tb_user')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
