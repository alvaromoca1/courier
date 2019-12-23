<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Clientes;
use Faker\Generator as Faker;

$factory->define(Clientes::class, function (Faker $faker) {

    return [
        'Nombres' => $faker->word,
        'Apellidos' => $faker->word,
        'Celular' => $faker->word,
        'correo' => $faker->word,
        'DNI' => $faker->word,
        'Ciudad' => $faker->word,
        'Direccion' => $faker->word,
        'Nota_adicional' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
