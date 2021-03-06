<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
