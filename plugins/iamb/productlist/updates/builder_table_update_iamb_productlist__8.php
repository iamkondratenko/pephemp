<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambProductlist8 extends Migration
{
    public function up()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->text('additional');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->dropColumn('additional');
        });
    }
}
