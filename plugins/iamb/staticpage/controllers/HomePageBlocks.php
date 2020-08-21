<?php namespace iamb\StaticPage\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class HomePageBlocks extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('iamb.StaticPage', 'main-menu-item', 'side-menu-item3');
    }
}
