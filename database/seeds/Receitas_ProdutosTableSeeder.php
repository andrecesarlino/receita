<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class Receitas_ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Receita_produto');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('receitas_produtos')->insert([
                'id'=>$i,
                'id_receita'=> $i,
                'id_produto'=> $i,
                'quantidade' => $faker->numberBetween(0, 1000),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
