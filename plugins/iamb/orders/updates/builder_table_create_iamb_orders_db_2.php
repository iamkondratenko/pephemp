<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambOrdersDb2 extends Migration
{
    public function up()
    {
        Schema::create('iamb_orders_db', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('type_of_delivery');
            $table->string('pickpoint');
            $table->integer('basket_id');
            $table->text('order_basket');
            $table->integer('total_price');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_orders_db');
    }
}
