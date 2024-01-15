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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('npwp');
            $table->string('pegawai_name');
            $table->bigInteger('no_ktp')->unique();
            $table->string('alamat_ktp');
            $table->date('ttl');
            $table->enum('jns_kelamin', ['Laki-laki','Perempuan']);
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('phone_perusahaan');
            $table->enum('no_npwp', ['Orang Pribadi','Badan','BUT']);
            $table->enum('kependudukan', ['Dalam Negeri','Luar Negeri']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
