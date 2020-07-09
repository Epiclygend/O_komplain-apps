<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komplain extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'komplain';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'respon_keluhan' => 'array',
    ];
}
