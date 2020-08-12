<?php namespace iamb\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambBlog extends Migration
{
    public function up()
    {
        Schema::create('iamb_blog_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('picture');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_blog_');
    }
}
