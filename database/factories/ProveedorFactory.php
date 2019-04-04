<?php

use Faker\Generator as Faker;
use App\Proveedor;
$factory->define(Proveedor::class, function (Faker $faker) {
    return [
      'nombre' => $faker->unique()->name,
      'correo' => $faker->unique()->safeEmail,
      'telefono' =>$faker->phoneNumber
    ];
});
