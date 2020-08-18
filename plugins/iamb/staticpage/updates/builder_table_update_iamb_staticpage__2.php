<?php namespace iamb\StaticPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambStaticpage2 extends Migration
{
    public function up()
    {
        Schema::table('iamb_staticpage_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_staticpage_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
