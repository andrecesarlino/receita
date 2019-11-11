<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Produto');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('produtos')->insert([
                'id'=>$i,
                'descricao' => $faker->text(100),
                'marca' => $faker->streetName,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
