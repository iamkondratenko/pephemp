<?php namespace iamb\Orders\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambOrdersDb5 extends Migration
{
    public function up()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->string('first_name', 191)->default('null')->change();
            $table->string('last_name', 191)->default('null')->change();
            $table->string('email', 191)->default('null')->change();
            $table->string('phone', 191)->default('null')->change();
            $table->string('city', 191)->default('null')->change();
            $table->string('type_of_delivery', 191)->default('null')->change();
            $table->string('pickpoint', 191)->default('null')->change();
            $table->string('basket', 1000)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('iamb_orders_db', function($table)
        {
            $table->string('first_name', 191)->default(null)->change();
            $table->string('last_name', 191)->default(null)->change();
            $table->string('email', 191)->default(null)->change();
            $table->string('phone', 191)->default(null)->change();
            $table->string('city', 191)->default(null)->change();
            $table->string('type_of_delivery', 191)->default(null)->change();
            $table->string('pickpoint', 191)->default(null)->change();
            $table->string('basket', 1000)->default(null)->change();
        });
    }
}
