<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function(Faker $faker) {
    return [
    'title' => $faker->sentence(10),
    'body' => $faker->sentence(50),
    ];
});