<?php

use Faker\Generator as Faker;
use App\Solicitud;

$factory->define(Solicitud::class, function (Faker $faker) {
    return [
        'state'   => $faker->randomElement($array = array ('Solicitado','En Proceso','Listo para Entregar')),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
    ];
});
