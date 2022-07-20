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
            $table->longText('trailer_video_link')->nullable();
            $table->string('requested')->nullable();
            $table->string('stickedSubtitle')->nullable();
            $table->string('bestFilms')->nullable();
            $table->string('genre')->nullable();
            $table->string('author')->nullable();
            $table->string('director')->nullable();
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
            $table->dropColumn(['trailer_video_link', 'requested', 'stickedSubtitle', 'bestFilms', 'genre', 'author', 'director']);
        });
    }
};
