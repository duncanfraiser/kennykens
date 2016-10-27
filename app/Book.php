<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'date',
   			'venue_name',
   			'venue_address',
            'contact',
            'facebook',
            'sound_lights',
            'offer',
            'start_time',
            'set_length',
            'merch_area'
        ];
}
