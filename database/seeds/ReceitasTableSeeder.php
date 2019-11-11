<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ReceitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Receita');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('receitas')->insert([
                'id'=>$i,
                'numero' => $faker->numberBetween(0, 10000),
                'valor' => $faker->randomFloat(5),
                'id_pessoa'=> $i,
                'id_cultura'=> $i,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
