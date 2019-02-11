<?php

    $factory->define(App\Note::class, function (Faker\Generator\Generator $faker) {


    return [
    'title' => $faker->sentence(10),
    'body' => $faker->sentence(30),
    ];
    });