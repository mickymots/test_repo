<?php namespace Enok\FeaturedProjects\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Projects extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'enok.featuredprojects.manage_project' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Enok.FeaturedProjects', 'featured_projects', 'projects');
    }
}