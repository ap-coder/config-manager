<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553541428502ChannelsTable extends Migration
{
    public function up()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->string('source_stream_guid')->nullable();
        });
    }

    public function down()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->dropColumn('source_stream_guid');
        });
    }
}
