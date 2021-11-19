<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEnokFeaturedprojectsTools extends Migration
{
    public function up()
    {
        Schema::create('enok_featuredprojects_tools', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->integer('project_id')->nullable();
            $table->string('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('enok_featuredprojects_tools');
    }
}
