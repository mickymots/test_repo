<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEnokFeaturedprojectsProjects2 extends Migration
{
    public function up()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->string('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->dropColumn('image');
        });
    }
}