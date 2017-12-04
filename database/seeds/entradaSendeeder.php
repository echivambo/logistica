<?php

use Illuminate\Database\Seeder;

class entradaSendeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entradas')->insert([
            'quantidade' => '3000000',
            'mes' => '2017-12',
            'comentario'=>'Entrada do MISAU',
            'produto_id'=>'1',
            'franquia_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('entradas')->insert([
            'quantidade' => '-300',
            'mes' => '2017-12',
            'comentario'=>'Correção da entrada do mes de Julho',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);


    }
}
