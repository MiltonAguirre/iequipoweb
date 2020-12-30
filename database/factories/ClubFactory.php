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



$factory->define(App\Club::class, function (Faker $faker){
    return [
        'name' => 'Movete que entras',
        'cost' => rand(1000, 9999),
        'data_club_id' => function(){
            return factory(App\DataClub::class)->create()->id;
        },
        'user_id' => 1
        
    ];
});
