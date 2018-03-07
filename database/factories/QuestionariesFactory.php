<?php

use Faker\Generator as Faker;

$factory->define(App\Questionary::class, function (Faker $faker) {

    $title = $faker->jobTitle;

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'tags' => $faker->word,
        'description' => $faker->text(20),
        'dificult' => $faker->numberBetween(1,5),
        'user_id' => 1
    ];
});
