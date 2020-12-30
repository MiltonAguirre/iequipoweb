<?php

use Faker\Generator as Faker;

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



$factory->define(App\User::class, function (Faker $faker){
    return [
        'nick' => 'admin',
        'password' => '$2y$10$FVEb4LirQskpSD5NegTLIeeokVruAPf6R3QWw4V5biTs9TCvmvTYa', // secret
        'email' => 'admin@iequipo.com',
        'role' => "admin",
        'data_user_id' => function(){
            return factory(App\DataUser::class)->create()->id;
          },
        'remember_token' => Str::random(10),
    ];
});
