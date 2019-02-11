<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\User::class, function(Faker\Generator $faker) {
    return [
    'first_name' => $faker->name,
    'last_name' => $faker->name,
    'email' => $faker->email,
    'isVerified' => 0,
    'password' => $faker->word,
    ];
});