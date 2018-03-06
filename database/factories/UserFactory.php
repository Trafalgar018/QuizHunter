<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $name = $faker->unique()->firstName;
    $lastName = $faker->lastName;

    return [
        'name' => $name,
        'lastName' => $lastName,
        'username' => $name . '.' . $lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => "123456",
        'remember_token' => str_random(10),
        'tlf' => $faker->e164PhoneNumber(),
        'webSide' => $faker->domainName,
        'about' => $faker->text(60),

    ];
});
