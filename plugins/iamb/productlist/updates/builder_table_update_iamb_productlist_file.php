<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambProductlistFile extends Migration
{
    public function up()
    {
        Schema::table('iamb_productlist_file', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_productlist_file', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
