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
        
            $table->increments('id');
           // $table->integer('user_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('description');
             $table->string('slug');
             $table->string('meta_title');
             $table->string('meta_description');
             $table->text('summary');


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
