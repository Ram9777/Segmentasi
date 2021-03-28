<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 19; $i++){
        DB::table('hsl_transformasi')->insert([
            'nama' => $faker->name,
            'wilayah' => 'Cimahi Tengah',
            'A' => '0',
            'B' => '0',
            'C' => '0',
            'D' => '0',
            'E' => '0',
            'F' => '0',
            'G' => '1',
            'H' => '0'
            ]);
        }
    }
}
