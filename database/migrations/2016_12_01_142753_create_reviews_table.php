<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->nullable();
            $table->string('author')->nullable();
            $table->text('text')->nullable();
            $table->string('type');
            $table->string('source')->nullable();
            $table->string('title')->nullable();
            $table->integer('reviewee_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
