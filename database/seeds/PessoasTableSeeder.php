<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Pessoa');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('pessoas')->insert([
                'id'=>$i,
                'id_cidade' => $i,
                'nome' => $faker->name,
                'endereco' => $faker->address,
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
