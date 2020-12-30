<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      factory(App\Club::class)->create();
      factory(App\Field::class)->create();

    }
}
