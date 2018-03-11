<?php

use Faker\Generator as Faker;

$factory->define(App\Valoration::class, function (Faker $faker) {
    return [
        'valoration' => $faker->numberBetween(1,5),
        'user_id' =>1,
    ];
});
