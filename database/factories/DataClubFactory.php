<?php

use Faker\Generator as Faker;

$factory->define(App\DataClub::class, function (Faker $faker) {
    return [
      'phone' => rand(1000000,10000000000),
      'address' => $faker->streetAddress,
      'city' => $faker->city,
      'location' => "Santa Fe",
    ];
});
