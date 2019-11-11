<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(CidadesTableSeeder::class);
       $this->call(PessoasTableSeeder::class);
       $this->call(ProdutosTableSeeder::class);
       $this->call(PragasTableSeeder::class);
       $this->call(CulturasTableSeeder::class);
       $this->call(ReceitasTableSeeder::class);
        $this->call(Receitas_ProdutosTableSeeder::class);
    }
}
