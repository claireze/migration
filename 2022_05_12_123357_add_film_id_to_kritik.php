<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilmIdToKritik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kritik', function (Blueprint $table) {
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kritik', function (Blueprint $table) {
            $table->dropForeign(['film_id']);
            $table->dropColumn(['film_id']);
        });
    }
}
