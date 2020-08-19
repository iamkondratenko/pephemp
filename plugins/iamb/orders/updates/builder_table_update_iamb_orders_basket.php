<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersBasket extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_basket', function($table)
        {
            $table->string('product_in_basket', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_basket', function($table)
        {
            $table->text('product_in_basket')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
