<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambProductlist extends Migration
{
    public function up()
    {
        Schema::create('iamb_productlist_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('description');
            $table->text('text');
            $table->integer('price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_productlist_');
    }
}
