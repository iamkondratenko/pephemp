<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambProductlist3 extends Migration
{
    public function up()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->text('additional_info');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->dropColumn('additional_info');
        });
    }
}
