<?php namespace iamb\StaticPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambStaticpageContacts extends Migration
{
    public function up()
    {
        Schema::create('iamb_staticpage_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slug');
            $table->string('title');
            $table->text('text');
            $table->text('map');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_staticpage_contacts');
    }
}
