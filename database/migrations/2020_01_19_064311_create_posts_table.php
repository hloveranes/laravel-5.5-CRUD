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
        //php artisan migrate--
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bptitle');
            $table->text('bpauthor');
            $table->string('bpcategory');
            $table->text('bpcontent');
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
