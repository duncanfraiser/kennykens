<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
	use SoftDeletes;

      protected $fillable = [
   			'title',
   			'body',
   			'start_date',
            'start_time',
            'end_date',
            'end_time'

        ];
}
