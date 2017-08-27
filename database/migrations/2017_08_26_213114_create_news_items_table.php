<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsItemsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('news_items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('news_category_id')->unsigned()->nullable();
            $table->foreign('news_category_id')->references('id')->on('news_categories')->onUpdate('cascade')->onDelete('set null');

            $table->string('title');
            $table->text('message');
            $table->string('slug')->unique();
            $table->boolean('public')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_items');
    }
}
