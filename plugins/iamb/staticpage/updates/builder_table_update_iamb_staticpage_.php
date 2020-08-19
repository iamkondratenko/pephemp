<?php namespace iamb\StaticPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIambStaticpage extends Migration
{
    public function up()
    {
        Schema::table('iamb_staticpage_', function($table)
        {
            $table->renameColumn('banner', 'picture');
        });
    }
    
    public function down()
    {
        Schema::table('iamb_staticpage_', function($table)
        {
            $table->renameColumn('picture', 'banner');
        });
    }
}
