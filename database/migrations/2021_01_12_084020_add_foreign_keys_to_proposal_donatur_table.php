<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProposalDonaturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposal_donatur', function (Blueprint $table) {
            $table->foreign('proposal_id', 'proposal_donatur_ibfk_1')->references('id')->on('proposal')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('user_id', 'proposal_donatur_ibfk_2')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposal_donatur', function (Blueprint $table) {
            $table->dropForeign('proposal_donatur_ibfk_1');
            $table->dropForeign('proposal_donatur_ibfk_2');
        });
    }
}
