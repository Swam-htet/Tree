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
        ////// todo : table's column to re-define
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            // $table->string('thumbnail');
            // ❗❗❗ here u can off above comment when u finished adding img upload function
            $table->string('publisher');
            $table->date('release_date'); //📆📅 Date format YYYY-MM-DD
            $table->integer('page');
            $table->string('rating');
            $table->string('download_link');
            $table->integer('genre_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('books');
    }
};
