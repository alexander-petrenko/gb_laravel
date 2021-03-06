<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requests')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('en_GB');

        $data = [];
        for ($i=0; $i < 15; $i++) { 
            $data[] = [
                'name' => $faker->firstName(),
                'phone' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                'text' => $faker->realText(rand(150, 500)),
                'created_at' => $faker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-15'),
                'updated_at' => $faker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-15')
            ];
        }

        return $data;
    }
}
