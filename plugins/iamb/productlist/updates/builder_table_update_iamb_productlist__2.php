<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambProductlist2 extends Migration
{
    public function up()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
