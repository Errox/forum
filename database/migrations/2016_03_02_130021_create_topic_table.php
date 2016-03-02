<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('topic_title', 150);
            $table->string('topic_description', 500);
            $table->integer('topic_tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
