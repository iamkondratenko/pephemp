<?php namespace iamb\Productlist\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CategoryList extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('iamb.Productlist', 'productList', 'categories');
    }
}
