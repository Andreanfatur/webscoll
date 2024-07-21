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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();

            // Data Pribadi Siswa
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('nik', 16)->unique(); // Nomor Induk Kependudukan (unique)
            $table->string('nomor_kartu_keluarga', 16); // Nomor Kartu Keluarga
            $table->text('alamat_lengkap');
            $table->string('nomor_telepon')->nullable();
            $table->enum('status', ['diterima', 'tidak_diterima']);

            // Data Orang Tua/Wali
            $table->string('nama_orangtua');
            $table->string('pekerjaan_orangtua');
            $table->string('nomor_telepon_orangtua');
            $table->string('email_orangtua')->nullable();

            // Riwayat Pendidikan
            $table->string('sekolah_asal');
            $table->string('alamat_sekolah_asal');
            $table->string('nisn', 10)->unique(); // Nomor Induk Siswa Nasional (unique)
            $table->json('foto_rapot')->nullable(); // Format JSON untuk menyimpan nilai rapor
            $table->json('foto_rapot')->nullable(); // Teks untuk mencantumkan sertifikat/prestasi

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
