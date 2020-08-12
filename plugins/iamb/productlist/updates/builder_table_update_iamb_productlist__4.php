<?php namespace iamb\Productlist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambProductlist4 extends Migration
{
    public function up()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->string('first_additional_title', 255);
            $table->string('second_additional_title');
            $table->string('third_additional_title');
            $table->text('second_additional_text');
            $table->text('third_additional_text');
            $table->string('first_additional_pic');
            $table->string('second_additional_pic');
            $table->string('third_additional_pic');
            $table->renameColumn('additional_info', 'first_additional_text');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_productlist_', function($table)
        {
            $table->dropColumn('first_additional_title');
            $table->dropColumn('second_additional_title');
            $table->dropColumn('third_additional_title');
            $table->dropColumn('second_additional_text');
            $table->dropColumn('third_additional_text');
            $table->dropColumn('first_additional_pic');
            $table->dropColumn('second_additional_pic');
            $table->dropColumn('third_additional_pic');
            $table->renameColumn('first_additional_text', 'additional_info');
        });
    }
}
