<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Envios;
use Faker\Generator as Faker;

$factory->define(Envios::class, function (Faker $faker) {

    return [
        'trasportista_id' => $faker->randomDigitNotNull,
        'paquete_id' => $faker->randomDigitNotNull,
        'descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
