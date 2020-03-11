<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Dept::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->string,
        'parent_id'=>$faker->int(0,1),
    ];
});
