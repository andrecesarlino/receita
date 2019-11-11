<?php


use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Cidade');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('cidades')->insert([
                'id'=>$i,
                'nome' => $faker->city,
                'cep' => $faker->numberBetween(99999, 999999),
                'created_at' => \Carbon\Carbon::now(),
                'Updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
