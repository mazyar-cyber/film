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
        Schema::create('imdbs', function (Blueprint $table) {
            $table->id();
            $table->string('imdb_id');
            $table->string('title');
            $table->string('photo');
            $table->string('slidePhoto')->nullable();
            $table->longText('briefStory');
            $table->longText('description');
            $table->string('soon')->nullable();
            $table->string('dubbing')->nullable();
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
        Schema::dropIfExists('imdbs');
    }
};
