<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('proposal_id')->nullable()->index('proposal_id');
            $table->integer('total_donasi')->nullable();
            $table->string('bukti_transfer', 200)->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('detail_donatur_id')->nullable()->index('detail_donatur_id');
            $table->integer('status');
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donasi');
    }
}
