<?php namespace iamb\StaticPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIambStaticpageHomepageBlocks extends Migration
{
    public function up()
    {
        Schema::create('iamb_staticpage_homepage_blocks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('adv_title_1');
            $table->text('adv_text_1');
            $table->string('adv_picture_1');
            $table->string('adv_title_2');
            $table->text('adv_text_2');
            $table->string('adv_picture_2');
            $table->string('adv_title_3');
            $table->text('adv_text_3');
            $table->text('adv_picture_3');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('iamb_staticpage_homepage_blocks');
    }
}
