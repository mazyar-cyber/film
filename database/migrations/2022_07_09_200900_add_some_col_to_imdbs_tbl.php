<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imdbs', function (Blueprint $table) {
            $table->string('production_year')->nullable();
            $table->string('stars')->nullable();
            $table->string('lang')->nullable();
            $table->string('country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imdbs', function (Blueprint $table) {
            $table->dropColumn(['production_year', 'stars', 'lang', 'country']);
        });
    }
};
