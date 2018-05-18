<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    protected $fillable = ['title', 'content', 'category_id'];

    public function postCategory()
    {
        return $this->belongsTo('App\Models\PostCategory', 'category_id');
    }

    public function searchableAs()
    {
        return 'posts_index';
    }
}
