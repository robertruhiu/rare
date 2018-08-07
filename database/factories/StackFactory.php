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



$factory->define(App\Stack::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => $faker->numberBetween(1,3),
        'description' => $faker->sentence(5),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];


});