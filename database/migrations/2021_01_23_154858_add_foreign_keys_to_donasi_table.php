<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDonasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donasi', function (Blueprint $table) {
            $table->foreign('proposal_id', 'donasi_ibfk_1')->references('id')->on('proposal')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('detail_donatur_id', 'donasi_ibfk_2')->references('id')->on('detail_donatur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donasi', function (Blueprint $table) {
            $table->dropForeign('donasi_ibfk_1');
            $table->dropForeign('donasi_ibfk_2');
        });
    }
}
