<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_category')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Faker\Factory::create('en_GB');

        $data = [];
        for ($i=151; $i <= 200; $i++) { 
            $data[] = [
                'news_id' => $i,
                'category_id' => rand(1, 5)
            ];
        }

        return $data;
    }
}
