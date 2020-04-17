<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1553810488205CsisTable extends Migration
{
    public function up()
    {
        Schema::table('csis', function (Blueprint $table) {
            $table->boolean('use_dev_channels')->default(0)->nullable();
            $table->boolean('use_beta_channels')->default(0)->nullable();
            $table->boolean('use_qa_channels')->default(0)->nullable();
            $table->boolean('use_production_channels')->default(0)->nullable();
        });
    }

    public function down()
    {
        Schema::table('csis', function (Blueprint $table) {
            $table->dropColumn('use_dev_channels');
            $table->dropColumn('use_beta_channels');
            $table->dropColumn('use_qa_channels');
            $table->dropColumn('use_production_channels');
        });
    }
}
