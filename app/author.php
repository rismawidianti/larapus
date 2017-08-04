<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    protected $fillable = ['name'];

    public function author()

    {
    	return $this->hasMany('App\author');
    }
}

