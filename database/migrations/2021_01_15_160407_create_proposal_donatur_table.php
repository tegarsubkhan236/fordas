<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal_donatur', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 100);
            $table->text('alamat')->nullable();
            $table->integer('status');
            $table->string('bukti', 100);
            $table->unsignedBigInteger('user_id')->nullable()->index('user_id');
            $table->double('total_donasi');
            $table->integer('proposal_id')->index('proposal_id');
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
        Schema::dropIfExists('proposal_donatur');
    }
}
