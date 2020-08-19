<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambProductlist extends Migration
{
    public function up()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->string('category');
            $table->string('picture')->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->dropColumn('category');
            $table->string('picture', 191)->change();
        });
    }
}
