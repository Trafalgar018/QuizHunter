<?php

use Faker\Generator as Faker;

$factory->define(App\Questionary::class, function (Faker $faker) {


    return [
        'title' => $faker->jobTitle,
        'tags' => $faker->word,
        'description' => $faker->text(20),
        'dificult' => $faker->numberBetween(1,5),
        'user_id' => 1,
        'questions_id' => 0,


    ];
});
