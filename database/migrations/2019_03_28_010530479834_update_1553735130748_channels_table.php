<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553735130748ChannelsTable extends Migration
{
    public function up()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->datetime('valid_as_of')->nullable();
        });
    }

    public function down()
    {
        Schema::table('channels', function (Blueprint $table) {
            $table->dropColumn('valid_as_of');
        });
    }
}
