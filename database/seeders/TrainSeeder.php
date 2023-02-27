<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for($i=0; $i<20 ; $i++){
            $train = new Train();
            $train->company_name = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->ean8();
            $train->numbers_of_wagons = $faker->numberBetween(8, 12);
            $train->is_deleted = $faker->boolean();

            $train->save();
        }

    }
}
