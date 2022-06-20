<?php

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for ($i= 1; $i<= 100; $i++){
            DB::table('matakuliah')->insert([
                'kodeMk'=> $faker-> randomNumber(5, true),
                'namaMk' => $faker-> title(),
                'namaDosen' => $faker-> name(),
                'sks' => $faker-> randomNumber(1, true)
            ]);
        }
    }
}