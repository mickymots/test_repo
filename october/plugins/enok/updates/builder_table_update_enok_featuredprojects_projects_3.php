<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEnokFeaturedprojectsProjects3 extends Migration
{
    public function up()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->string('featured_image', 255)->nullable();
            $table->renameColumn('image', 'hero_image');
        });
    }
    
    public function down()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->dropColumn('featured_image');
            $table->renameColumn('hero_image', 'image');
        });
    }
}
