<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambProductlistFile extends Migration
{
    public function up()
    {
        Schema::create('iamb_productlist_file', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title');
            $table->string('file');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_productlist_file');
    }
}
