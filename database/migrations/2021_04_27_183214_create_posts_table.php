<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->biginteger('category_id');
            $table->biginteger('sub_category_id');
            $table->string('title');
            $table->string('slug');
            $table->Longtext('description');
            $table->Longtext('tag');
            $table->string('file');
            $table->string('image');
            $table->string('video_link');
            $table->string('link');
            $table->tinyinteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
