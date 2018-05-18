<?php

namespace App\Traits;

use App\Models\Post;
use App\Models\PostCategory;

trait AssignPostCategory
{
    protected function assignPostCategory(Post $post, $categoryId)
    {
        $post->postCategory()->associate(PostCategory::findOrFail($categoryId));
    }
}