<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersDb6 extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->text('basket')->nullable(false)->unsigned(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->string('basket', 1000)->nullable(false)->unsigned(false)->default('null')->change();
        });
    }
}
