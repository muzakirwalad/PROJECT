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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama pemesan
            $table->text('alamat_yang_dituju'); // Alamat tujuan pemesanan (dengan tipe text untuk menampung alamat yang lebih panjang)
            $table->string('kategori'); // Kategori pemesanan
            $table->unsignedBigInteger('design_id'); // Foreign key ke tabel 'design'
            $table->string('bukti_bayar')->nullable();
            $table->timestamps();

            // Relasi ke tabel 'design'
            // $table->foreign('design_id')->references('id')->on('design')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
