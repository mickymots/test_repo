<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEnokFeaturedprojectsProjects extends Migration
{
    public function up()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->text('tools')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->integer('tools')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
