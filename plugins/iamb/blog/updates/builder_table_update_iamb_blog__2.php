<?php namespace iamb\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambBlog2 extends Migration
{
    public function up()
    {
        Schema::table('iamb_blog_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_blog_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
