<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CulturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Cultura');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('culturas')->insert([
                'id'=>$i,
                'descricao' => $faker->text('100'),
                'id_praga' => $i,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
