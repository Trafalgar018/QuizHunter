<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'text' => $faker->text(30),
        'user_id' =>1,
    ];
});
