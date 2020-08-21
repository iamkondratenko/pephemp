<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambProductlistCatalog extends Migration
{
    public function up()
    {
        Schema::create('iamb_productlist_catalog', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category_title');
            $table->string('slug');
            $table->string('picture');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_productlist_catalog');
    }
}
