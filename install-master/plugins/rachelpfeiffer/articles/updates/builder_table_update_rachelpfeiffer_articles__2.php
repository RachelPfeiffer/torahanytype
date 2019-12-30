<?php namespace RachelPfeiffer\Articles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRachelpfeifferArticles2 extends Migration
{
    public function up()
    {
        Schema::table('rachelpfeiffer_articles_', function($table)
        {
            $table->dateTime('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rachelpfeiffer_articles_', function($table)
        {
            $table->date('date')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
