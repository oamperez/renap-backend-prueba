<?php

use Faker\Generator as Faker;
use App\User;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'last_name'    => $faker->firstName,
        'first_name'   => $faker->lastName,
        'birthdate'    => $faker->date($format = 'Y-m-d', $max = 'now'), 
        'department'   => $faker->city, 
        'municipality' => $faker->cityPrefix, 
        'address'	   => $faker->secondaryAddress, 
        'phone'   	   => $faker->tollFreePhoneNumber, 
        'email'		   => $faker->unique()->email,
        'password'	   => bcrypt(str_random(8)), 
        'dpi' 		   => unique()->rand(1000,9000).' '.rand(10000,90000).' '.rand(1000,9000), 
        }
    ];
});
