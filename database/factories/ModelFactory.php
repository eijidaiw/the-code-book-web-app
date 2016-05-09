<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Codedata::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->lexify('Hello ???'),
        "content" => $faker->text,
        "type" =>  $faker->randomElement($array = array ('java','python','c#','vb')) ,
        "evaluation" => $faker->numberBetween($min = 1, $max = 5) ,
        "user_id" => $faker->randomDigitNotNull,

    ];
});

$factory->define(App\Bear::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstname,
        'weight' => $faker->numberBetween($min = 10, $max = 300),
    ];
});

$factory->define(App\Sharecode::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->lexify('Hello ???'),
        'content' => $faker->text,
        'description' => $faker->text,
        'type' => $faker->randomElement($array = array ('java','python','c#','vb')) ,
        'evaluation' => $faker->numberBetween($min = 1, $max = 5) ,
        'viewcounter' => $faker->numberBetween($min = 20, $max = 1000) ,
        'user_id' => $faker->randomDigitNotNull,
    ];
});