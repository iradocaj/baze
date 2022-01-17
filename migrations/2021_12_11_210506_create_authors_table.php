<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('f_name', 255);
            $table->string('l_name', 255);
            $table->string('email')->unique();
            $table->string('tel', 255);
            $table->timestamps();
        });

        Schema::create('book_author', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('book_id')->constrained('books');

            $table->primary(['author_id','book_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_author');
        Schema::dropIfExists('authors');

    }
}
