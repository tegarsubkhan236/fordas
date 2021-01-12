<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWilayahDasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wilayah_das', function (Blueprint $table) {
            $table->foreign('wilayah_id', 'wilayah_das_ibfk_1')->references('id')->on('wilayah')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wilayah_das', function (Blueprint $table) {
            $table->dropForeign('wilayah_das_ibfk_1');
        });
    }
}
