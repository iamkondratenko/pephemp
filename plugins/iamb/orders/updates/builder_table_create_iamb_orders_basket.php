<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambOrdersBasket extends Migration
{
    public function up()
    {
        Schema::create('iamb_orders_basket', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('product_in_basket');
            $table->integer('quantity_in_basket')->default(0);
            $table->integer('product_id_in_basket')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_orders_basket');
    }
}
