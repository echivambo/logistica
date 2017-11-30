<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(produtoSendeeder::class);
         $this->call(FranquiaTableSeeder::class);
         $this->call(contagemsSeeder::class);
         $this->call(entradaSendeeder::class);
    }
}
