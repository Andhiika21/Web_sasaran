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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->integer('id_pengaduan', 11);
            $table->date('tgl_pengaduan');
            $table->string('nik',16);
            $table->text('isi_laporan');
            $table->string('foto',255);
            $table->enum('status', ['0','proses','selesai']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
