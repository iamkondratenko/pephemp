<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersDb8 extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->renameColumn('basket', 'order_basket');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->renameColumn('order_basket', 'basket');
        });
    }
}
