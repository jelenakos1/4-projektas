<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->longtext('description');
            $table->text('author');
            $table->unsignedBigInteger('articlecategory_id');
            $table->foreign('articlecategory_id')->references('id')->on('articlecategories');
            $table->unsignedBigInteger('articleimage_id');
            $table->foreign('articleimage_id')->references('id')->on('articalimages');
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
        Schema::dropIfExists('articles');
    }
}
