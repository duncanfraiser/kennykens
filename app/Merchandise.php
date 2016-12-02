<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchandise extends Model
{
	use SoftDeletes;
    protected $fillable = [
            'customerID',
            'status',
            'name',
            'email',
            'street',
            'city',
            'state',
            'zip',
            'album',
            'atotal',
            'bsmall',
            'bmedium',
            'blarge',
            'bxl',
            'bxxl',
            'bxxxl',
            'wsmall',
            'wmedium',
            'wlarge',
            'wxl',
            'wxxl',
            'wxxxl',
            'koozie',
            'ktotal',
            'sticker',
            'stotal',
            'total',

            'bsmalltotal',
            'bmediumtotal',
            'blargetotal',
            'bxltotal',
            'bxxltotal',
            'bxxxltotal',

            'wsmalltotal',
            'wmediumtotal',
            'wlargetotal',
            'wxltotal',
            'wxxltotal',
            'wxxxltotal',


                    ];
}
