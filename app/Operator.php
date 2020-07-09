<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'operator';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
