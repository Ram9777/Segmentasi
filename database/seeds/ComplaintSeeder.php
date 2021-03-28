<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 3; $i++){

        DB::table('complaints')->insert([
        	'nama' => $faker->name,
        	'golongan' => $faker->randomElement(['1L1', '1R1', '1S3', '2R1', '2L3']),
        	'id_jeniskeluhan' => 'A',
            'alamat' => $faker->randomElement(['Cempaka Mekar', 'Ciburuy', 'Cimerang', 'Cipendeuy', 'Jayamekar', 'Kertajaya', 'Kertamulya', 'Laksanamekar']),
            'keterangan' => '-',
            'tanggal' => $faker->dateTimeBetween('-24 months', '-9 months')
        ]);
    }
}
}
