<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clase;
use Faker\Generator as Faker;

$factory->define(Clase::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName().' '.$faker->lastname(),
        'rango' => $faker->randomElement(['Cabo', 'Cabo 2', 'Cabo 1', 'Sargento', 'Sargento 2', 'Sargento 1', 'Sub Oficial', 'Sub Oficial Mayor']),
    ];
});
