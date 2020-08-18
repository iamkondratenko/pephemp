<?php namespace iamb\Productlist\Models;

use Model;



/**
 * Model
 */
class ProductList extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];





    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamb_productlist_';


    public $belongsToMeny =[

      'category' =>[

        'iamb\productlist\models\MenuList',

        'table' => 'iamb_productlist_catalog_menu',

        'order' => 'category_title'

      ]

    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
