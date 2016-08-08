<?php

namespace App\Library\Categories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{
    /**
     * @var string
     */
    protected $table = 'category';

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = ['entity_id', 'default_name', 'foursquare_id_equivalent'];
}
