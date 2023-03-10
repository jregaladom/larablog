<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 5),
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'image' => $faker->imageUrl(1200, 400),
        'body' => $faker->text(800),
    ];
});
