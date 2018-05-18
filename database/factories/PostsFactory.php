<?php

use App\Models\Post;
use App\Models\PostCategory;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $postCategories = PostCategory::pluck('id')->toArray();
    return [
        'title' => $faker->sentence(3),
        'content' => $faker->paragraph(20),
        'category_id' => $faker->randomElement($postCategories)
    ];
});
