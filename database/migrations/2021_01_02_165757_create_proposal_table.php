<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('created_by')->nullable();
            $table->string('judul');
            $table->text('latar_belakang')->nullable();
            $table->integer('kategori_id')->index('kategori_id');
            $table->integer('status');
            $table->boolean('visibility');
            $table->boolean('donate')->nullable();
            $table->text('keterangan')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
            $table->text('files')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposal');
    }
}
