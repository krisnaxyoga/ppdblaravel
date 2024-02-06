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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nisn');
            $table->string('asal_sekolah');
            $table->text('alamat');
            $table->string('no_telepon');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);

            // Informasi Tambahan (Bisa disesuaikan dengan kebutuhan)
            $table->string('nama_orang_tua');
            $table->string('nama_orang_tua');
            $table->string('pekerjaan_orang_tua');
            $table->string('alamat_orang_tua');
            $table->string('no_telepon_orang_tua');
            
            // Informasi Lainnya
            $table->boolean('status_pendaftaran')->default(false);
            $table->string('keterangan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
