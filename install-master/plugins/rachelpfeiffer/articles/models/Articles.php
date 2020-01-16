<?php namespace RachelPfeiffer\Articles\Models;

use Model;
use System\Models\File;
use Rainlab\User\Models\User;


/**
 * Model
 */
class Articles extends Model
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
    public $table = 'rachelpfeiffer_articles_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'pdf' => 'System\Models\File'
    ];

    public $belongsTo = [
        'user' => ['Rainlab\User\Models\User']
    ];
}
