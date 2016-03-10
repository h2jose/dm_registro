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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Suscriber::class, function (Faker\Generator $faker) {
    return [
        'nombre' =>$faker->name,
        'apellido' => $faker->lastname,
        'telefono_principal' => $faker->phoneNumber,
        'telefono_opcional' => $faker->phoneNumber,
        'especialidad' => $faker->company,
        'clinica_instituto' => $faker->company,
        'ciudad' => $faker->city,
        'pais' => $faker->country,
        'email' => $faker->email,
        'equipos_interes' => $faker->domainName,
        'conoce_mortara' => $faker->randomElement($array = array ('SI','NO')),
        'cual_equipo' =>  $faker->colorName,
        'valoracion_equipos' => $faker->randomElement($array = array ('Excelente','Buena', 'Regular', 'Mala')),
        'como_conocio' => $faker->monthName,
        'usaria_mortara' => $faker->randomElement($array = array ('SI','NO'))
    ];
});