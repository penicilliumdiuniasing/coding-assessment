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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Event::class, function (Faker\Generator $faker) {
    //startAt at most same as created at.
    //endAt = startAt+random days.
    $activeDuration=$faker->randomDigit();
    $startAttime=date("Y-m-d H:i:s");
    return [
        'id'=> $faker->unique()->uuid,
        'name' => $faker->name,
        'slug' => $faker->unique()->slug(5),
        'startAt'=> $startAttime,
        'endAt' => date('Y-m-d H:i:s', strtotime ("$startAttime +$activeDuration day" )),
    ];
});
