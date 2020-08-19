<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteIambProductlistFile extends Migration
{
    public function up()
    {
        Schema::dropIfExists('iamb_productlist_file');
    }
    
    public function down()
    {
        Schema::create('iamb_productlist_file', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title', 191);
            $table->string('file', 191);
            $table->string('slug', 191);
        });
    }
}
