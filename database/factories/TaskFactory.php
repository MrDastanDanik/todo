<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/17/18
 * Time: 3:15 PM
 */

use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'text' => $faker->text,
        'is_done' => $faker->boolean,
    ];
});

