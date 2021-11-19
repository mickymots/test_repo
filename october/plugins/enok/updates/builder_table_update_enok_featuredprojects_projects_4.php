<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEnokFeaturedprojectsProjects4 extends Migration
{
    public function up()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->text('roles')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('enok_featuredprojects_projects', function($table)
        {
            $table->dropColumn('roles');
        });
    }
}
