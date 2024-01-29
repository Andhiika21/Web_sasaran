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
    Schema::create('tanggapan', function (Blueprint $table) {
        $table->integer('id_tanggapan'); // Kolom id dengan auto_increment sebagai primary key
        $table->unsignedBigInteger('id_pengaduan');
        $table->date('tgl_tanggapan');
        $table->text('tanggapan');
        $table->unsignedBigInteger('id_petugas');
        
        $table->foreign('id_pengaduan')->references('id')->on('pengaduan'); // Gantilah 'pengaduan' dengan nama tabel yang sesuai
        $table->foreign('id_petugas')->references('id')->on('petugas'); // Gantilah 'nama_tabel_petugas' dengan nama tabel yang sesuai
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
