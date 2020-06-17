<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Issue;

$factory->define(Issue::class, function (Faker $faker) {
    return [
        'description'=>$faker->unique()->sentence(5),
        'user_id'=>$faker->numberBetween(1,5)
    ];
});
