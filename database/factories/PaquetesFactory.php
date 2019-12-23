<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Paquetes;
use Faker\Generator as Faker;

$factory->define(Paquetes::class, function (Faker $faker) {

    return [
        'estado' => $faker->word,
        'Codigo_paquete' => $faker->text,
        'cliente_id' => $faker->randomDigitNotNull,
        'fecha_resivido' => $faker->word,
        'fecha_entrega' => $faker->word,
        'Descripcion' => $faker->text,
        'Novedades' => $faker->text,
        'Total_neto' => $faker->word,
        'total_IGV' => $faker->word,
        'Nombre_destino' => $faker->word,
        'Ciudad_destino' => $faker->word,
        'direccion_destino' => $faker->word,
        'celular_destino' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
