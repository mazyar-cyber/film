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
        Schema::create('serials', function (Blueprint $table) {
            $table->id();
            $table->string('imdb_id');
            $table->string('title');
            $table->string('Fa_title')->nullable();
            $table->string('photo');
            $table->string('photo_hor')->nullable();
            $table->string('lastUpdate')->nullable();
            $table->string('playStatus')->nullable();
            $table->string('channel')->nullable();
            $table->string('slidePhoto')->nullable();
            $table->longText('briefStory');
            $table->longText('description');
            $table->string('soon')->nullable();
            $table->string('dubbing')->nullable();
            $table->string('requested')->nullable();
            $table->string('stickedSubtitle')->nullable();
            $table->string('bestFilms')->nullable();
            $table->string('genre')->nullable();
            $table->string('author')->nullable();
            $table->string('director')->nullable();
            $table->string('production_year')->nullable();
            $table->string('stars')->nullable();
            $table->string('lang')->nullable();
            $table->string('country')->nullable();
            $table->string('type')->default('somethingElse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serials');
    }
};
