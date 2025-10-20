<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pelanggan_id')->constrained('pelanggan')->onDelete('cascade');
            $table->dateTime('tanggal_transaksi')->default(now());
            $table->decimal('total_harga', 10, 2);   // Total harga cucian
            $table->enum('status_pengerjaan', [
                'Belum Diproses',
                'Sedang Dikerjakan',
                'Selesai'
            ])->default('Belum Diproses');
            $table->enum('status_pembayaran', [
                'Belum Dibayar',
                'Sudah Dibayar'
            ])->default('Belum Dibayar');
            $table->text('catatan')->nullable();     // Catatan tambahan opsional

            $table->timestamps();
        });
    }

    /**
     * Reverse migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};