<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersDb3 extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->string('basket', 1000);
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->dropColumn('basket');
        });
    }
}
