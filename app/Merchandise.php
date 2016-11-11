<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Merchandise extends Model
{
	use SoftDeletes;
    protected $fillable = [
            'album',
            'atotal',
            'bsmall',
            'bmedium',
            'blarge',
            'bxl',
            'bxxl',
            'bxxxl',
            'bstotal',
            'wsmall',
            'wmedium',
            'wlarge',
            'wxl',
            'wxxl',
            'wxxxl',
            'wstotal',
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
