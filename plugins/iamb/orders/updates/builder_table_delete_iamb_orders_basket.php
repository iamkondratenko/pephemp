<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteIambOrdersBasket extends Migration
{
    public function up()
    {
        Schema::dropIfExists('iamb_orders_basket');
    }
    
    public function down()
    {
        Schema::create('iamb_orders_basket', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('product_in_basket', 255);
            $table->integer('quantity_in_basket')->default(0);
            $table->integer('product_id_in_basket')->default(0);
        });
    }
}
