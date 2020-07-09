<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('en_GB');

        $data = [];
        for ($i=0; $i < 5; $i++) { 
            $data[] = [
                'name' => $faker->sentence(rand(5, 10)),
                'description' => $faker->realText(rand(100, 200)),
                'created_at' => $faker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08'),
                'updated_at' => $faker->dateTimeBetween('00:00:00 2019-01-01', '23:59:59 2020-07-08'),
                'url' => '/img/category' . ($i+1) . '.jpeg'
            ];
        }

        return $data;
    }
}
