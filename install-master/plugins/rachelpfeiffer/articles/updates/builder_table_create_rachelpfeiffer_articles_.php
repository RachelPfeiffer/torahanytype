<?php namespace RachelPfeiffer\Articles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRachelpfeifferArticles extends Migration
{
    public function up()
    {
        Schema::create('rachelpfeiffer_articles_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('author');
            $table->date('date');
            $table->text('category');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rachelpfeiffer_articles_');
    }
}
