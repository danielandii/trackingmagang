<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsPengaduanTiketToTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tanggapans', function (Blueprint $table) {
            $table->string('pengaduan_tiket')->after('pengaduan_id');
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
            $table->dropColumn('pengaduan_tiket');
        });
    }
}
