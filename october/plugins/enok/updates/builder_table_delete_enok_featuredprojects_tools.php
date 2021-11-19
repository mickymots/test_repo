<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteEnokFeaturedprojectsTools extends Migration
{
    public function up()
    {
        Schema::dropIfExists('enok_featuredprojects_tools');
    }
    
    public function down()
    {
        Schema::create('enok_featuredprojects_tools', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->integer('project_id')->nullable();
            $table->string('name', 255)->nullable()->default('HTML');
        });
    }
}
