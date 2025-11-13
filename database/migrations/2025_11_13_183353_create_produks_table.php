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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');

            // RELASI KE TABEL KATEGORIS (PAKAI S)
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade');

            $table->integer('harga');
            $table->integer('stok');
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_upload')->nullable();

            // RELASI KE TABEL TOKOS (PAKAI S)
            $table->foreignId('id_toko')->constrained('tokos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
