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
/** @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'text' => ucfirst($faker->bs) . '.',
    ];
});

$factory->state(App\Models\Task::class, 'done', [
    'is_done' => true,
]);

$factory->state(App\Models\Task::class, 'undone', [
    'is_done' => false,
]);

$factory->state(App\Models\Task::class, 'random_done', function (Faker $faker) {
    return [
        'is_done' => $faker->boolean,
    ];
});
