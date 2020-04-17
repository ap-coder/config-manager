<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553542262552CsisTable extends Migration
{
    public function up()
    {
        Schema::table('csis', function (Blueprint $table) {
            $table->unsignedInteger('channel_id')->nullable();
            $table->foreign('channel_id')->references('id')->on('channels');
        });
    }

    public function down()
    {
        Schema::table('csis', function (Blueprint $table) {
            $table->dropForeign('channel_id');
            $table->dropColumn('channel_id');
        });
    }
}
