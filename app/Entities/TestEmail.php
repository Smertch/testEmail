<?php

/**
 * Created by PhpStorm.
 * User: smertch
 * Date: 24.09.17
 * Time: 21:37
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class TestEmail extends Model
{
    protected $fillable = ['userName','email','homepage','msg','ip', 'browser'];
}