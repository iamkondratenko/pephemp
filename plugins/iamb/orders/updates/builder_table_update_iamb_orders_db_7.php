<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersDb7 extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->text('basket')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->text('basket')->nullable(false)->change();
        });
    }
}
