<?php namespace Enok\FeaturedProjects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEnokFeaturedprojectsTools extends Migration
{
    public function up()
    {
        Schema::table('enok_featuredprojects_tools', function($table)
        {
            $table->string('name', 255)->default('HTML')->change();
        });
    }
    
    public function down()
    {
        Schema::table('enok_featuredprojects_tools', function($table)
        {
            $table->string('name', 255)->default(null)->change();
        });
    }
}
