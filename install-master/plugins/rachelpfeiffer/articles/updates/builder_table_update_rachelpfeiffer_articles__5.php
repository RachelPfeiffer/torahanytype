<?php namespace RachelPfeiffer\Articles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRachelpfeifferArticles5 extends Migration
{
    public function up()
    {
        Schema::table('rachelpfeiffer_articles_', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('rachelpfeiffer_articles_', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
