<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553631194896CsosTable extends Migration
{
    public function up()
    {
        Schema::table('csos', function (Blueprint $table) {
            $table->unsignedInteger('channel_server_id')->nullable();
            $table->foreign('channel_server_id')->references('id')->on('channel_servers');
        });
    }

    public function down()
    {
        Schema::table('csos', function (Blueprint $table) {
            $table->dropForeign('channel_server_id');
            $table->dropColumn('channel_server_id');
        });
    }
}
