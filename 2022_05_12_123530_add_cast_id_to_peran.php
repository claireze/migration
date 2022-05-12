<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCastIdToPeran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peran', function (Blueprint $table) {
            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('peran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peran', function (Blueprint $table) {
            $table->dropForeign(['cast_id']);
            $table->dropColumn(['cast_id']);
        });
    }
}
