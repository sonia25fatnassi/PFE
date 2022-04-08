<?php

use Faker\Generator as Faker;
use App\Http\Models\User;
use App\Http\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence,
        'description'   => $fake->paragraph(1),
        'content'       => implode($faker->paragraphs(100)),
        'user_id'       => factory(User::class)->create()->id,
    ];
});