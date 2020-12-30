<?php

use Faker\Generator as Faker;

$factory->define(App\DataUser::class, function (Faker $faker) {
    return [
      'first_name' => $faker->firstname,
      'last_name' => $faker->lastname,
      'phone' => rand(1000000,10000000000),
      'city' => $faker->city,
      'location' => "Santa Fe",
      'sex' => 'male',
      'birthday' => $faker->dateTime(),
    ];
});
