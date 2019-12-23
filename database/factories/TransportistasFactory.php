<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transportistas;
use Faker\Generator as Faker;

$factory->define(Transportistas::class, function (Faker $faker) {

    return [
        'DNI' => $faker->word,
        'Nombres' => $faker->word,
        'Apellidos' => $faker->word,
        'Celular' => $faker->word,
        'direccion' => $faker->word,
        'Correo' => $faker->word,
        'Nota_adicional' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
