<?php namespace Team22\MovieBase\Models;

use Model;

/**
 * Movie Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'team22_moviebase_movies';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
  
    public $belongsToMany = [
        'genres' => [
            'Team22\MovieBase\Models\Genre',
            'table' => 'team22_moviebase_movies_genres',
            'order' => 'title',
        ]
    ];
    public $attachOne = 
    [
        'movie_poster' => 'System\Models\File'
    ];
    public $attachMany = 
    [
        'movie_gallery' => 'System\Models\File'
    ];
}
