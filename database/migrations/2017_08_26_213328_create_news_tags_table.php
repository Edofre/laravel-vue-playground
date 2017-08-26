<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTagsTable extends Migration
{

    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {

        Schema::create('news_tags', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->text('description');
            $table->boolean('public')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('news_item_tags', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('news_item_id')->unsigned();
            $table->foreign('news_item_id')->references('id')->on('news_items')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('news_tag_id')->unsigned();
            $table->foreign('news_tag_id')->references('id')->on('news_tags')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_item_tags');
        Schema::dropIfExists('news_tags');
    }
}
