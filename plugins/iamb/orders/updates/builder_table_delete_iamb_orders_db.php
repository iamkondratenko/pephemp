<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteIambOrdersDb extends Migration
{
    public function up()
    {
        Schema::dropIfExists('iamb_orders_db');
    }
    
    public function down()
    {
        Schema::create('iamb_orders_db', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name', 191)->default('null');
            $table->string('last_name', 191)->default('null');
            $table->string('email', 191)->default('null');
            $table->string('phone', 191)->default('null');
            $table->string('city', 191)->default('null');
            $table->string('type_of_delivery', 191)->default('null');
            $table->string('pickpoint', 191)->default('null');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('basket_id')->default(0);
            $table->text('order_basket')->nullable();
            $table->integer('total_price')->nullable();
            $table->text('test');
        });
    }
}
