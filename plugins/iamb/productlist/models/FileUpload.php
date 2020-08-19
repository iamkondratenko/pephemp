<?php namespace iamb\Productlist\Models;

use Model;

/**
 * Model
 */
class FileUpload extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamb_productlist_file';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
