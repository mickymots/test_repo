<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEnokFeaturedprojectsProjects extends Migration
{
    public function up()
    {
        Schema::create('enok_featuredprojects_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('client_name')->nullable();
            $table->text('client_description')->nullable();
            $table->integer('tools')->nullable();
            $table->text('challenge')->nullable();
            $table->text('solution')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('enok_featuredprojects_projects');
    }
}
