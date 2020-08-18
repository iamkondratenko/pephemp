<?php namespace iamb\StaticPage\Models;

use Model;

/**
 * Model
 */
class StaticPage extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamb_staticpage_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
