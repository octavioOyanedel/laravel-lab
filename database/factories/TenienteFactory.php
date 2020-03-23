<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teniente;
use Faker\Generator as Faker;

$factory->define(Teniente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName().' '.$faker->lastname()
    ];
});
