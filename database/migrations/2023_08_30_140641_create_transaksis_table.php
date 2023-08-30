<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
  * Run the migrations.
  */
  public function up(): void
  {
    Schema::create('transaksis', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('id_barang');
      $table->string('nama_barang');
      $table->string('harga_barang');
      $table->string('detail_barang');
      $table->string('dibayar');
      $table->string('waktu_transaksi');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('transaksi');
  }
};