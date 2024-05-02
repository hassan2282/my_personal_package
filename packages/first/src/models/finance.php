<?php

namespace Seyyed\First\models;

use Illuminate\Database\Eloquent\Model;

class finance extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['id','created_at','updated_at'];
}
