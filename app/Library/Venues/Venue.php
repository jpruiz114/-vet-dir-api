<?php

namespace App\Library\Venues;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venue
 * @package App
 */
class Venue extends Model
{
    /**
     * @var string
     */
    protected $table = 'venue';

    /**
     * @var array
     */
    protected $visible = ['entity_id', 'name'];
}
