<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersDb9 extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->integer('total_price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->dropColumn('total_price');
        });
    }
}
