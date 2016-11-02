<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Press extends Model
{
	    protected $table = 'presses';
    	use SoftDeletes;
      protected $fillable = [
   			'title',
            'img'
        ];
}
