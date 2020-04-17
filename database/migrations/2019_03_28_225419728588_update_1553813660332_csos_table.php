<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553813660332CsosTable extends Migration
{
    public function up()
    {
        Schema::table('csos', function (Blueprint $table) {
            $table->unsignedInteger('channel_server_input_source_id')->nullable();
            $table->foreign('channel_server_input_source_id')->references('id')->on('csis');
        });
    }

    public function down()
    {
        Schema::table('csos', function (Blueprint $table) {
            $table->dropForeign('channel_server_input_source_id');
            $table->dropColumn('channel_server_input_source_id');
        });
    }
}
