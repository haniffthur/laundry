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
    Schema::create('tb_user', function (Blueprint $table) {
        $table->id();
        $table->string('nama', 100);
        $table->string('username', 30)->unique();
        $table->text('password');
        $table->unsignedBigInteger('id_outlet');
        $table->enum('role', ['admin', 'kasir', 'owner']);
        $table->timestamps();

        $table->foreign('id_outlet')->references('id')->on('tb_outlet')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user');
    }
};