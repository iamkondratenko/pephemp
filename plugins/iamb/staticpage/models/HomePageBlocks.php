<?php namespace iamb\StaticPage\Models;

use Model;

/**
 * Model
 */
class HomePageBlocks extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'iamb_staticpage_homepage_blocks';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
