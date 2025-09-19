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
        Schema::create('jadwal_servis', function (Blueprint $table) {
            $table->id();

            // Foreign key ke pelanggan
            $table->foreignId('pelanggan_id')->constrained()->onDelete('cascade');

            // Foreign key ke teknisi
            $table->foreignId('teknisi_id')->constrained()->onDelete('cascade');

            $table->date('tanggal_service');
            $table->text('alamat_service');
            $table->string('jenis_layanan', 100);
            $table->integer('jumlah_unit'); // <- sebaiknya integer karena jumlah unit angka
            $table->text('catatan')->nullable(); // <- ditambahkan agar sesuai model
            $table->string('status',50);

            $table->timestamps();

            // Optional: tambahkan unique constraint untuk kombinasi tertentu
            $table->unique(['pelanggan_id', 'teknisi_id', 'tanggal_service']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_servis');
    }
};
