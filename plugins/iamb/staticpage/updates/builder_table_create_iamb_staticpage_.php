<?php namespace iamb\StaticPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambStaticpage extends Migration
{
    public function up()
    {
        Schema::create('iamb_staticpage_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
            $table->string('banner');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_staticpage_');
    }
}
