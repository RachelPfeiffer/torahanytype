<?php namespace RachelPfeiffer\Articles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRachelpfeifferArticles extends Migration
{
    public function up()
    {
        Schema::table('rachelpfeiffer_articles_', function($table)
        {
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::table('rachelpfeiffer_articles_', function($table)
        {
            $table->dropColumn('content');
        });
    }
}
