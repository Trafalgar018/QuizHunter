<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {

    $title = $faker->jobTitle;

    return [
        'answer' => $title,
        'correct' => false
    ];
});
