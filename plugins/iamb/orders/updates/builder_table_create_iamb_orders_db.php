<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambOrdersDb extends Migration
{
    public function up()
    {
        Schema::create('iamb_orders_db', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('type_of_delivery');
            $table->string('pickpoint');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_orders_db');
    }
}
