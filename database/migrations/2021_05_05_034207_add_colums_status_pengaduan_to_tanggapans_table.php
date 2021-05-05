<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsStatusPengaduanToTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tanggapans', function (Blueprint $table) {
            $table->enum('pengaduan_status', ['Baru', 'Sedang di Cek', 'Pengerjaan', 'Selesai'])->after('pengaduan_id');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tanggapans', function (Blueprint $table) {
            $table->dropColumn('pengaduan_status');
        });
    }
}
