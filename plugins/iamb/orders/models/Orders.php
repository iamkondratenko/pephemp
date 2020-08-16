<?php namespace iamb\Orders\Models;

use Model;

/**
 * Model
 */
class Orders extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamb_orders_db';

    protected $jsonable = ['order_basket'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
