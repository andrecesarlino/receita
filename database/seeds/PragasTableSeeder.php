<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PragasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Praga');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('pragas')->insert([
                'id'=>$i,
                'descricao' => $faker->text('100'),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
