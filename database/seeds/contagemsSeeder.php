<?php

use Illuminate\Database\Seeder;

class contagemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contagems')->insert([
            'quantidade'=>'98',
            'data_contagem' => '2017-09-26',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('contagems')->insert([
            'quantidade'=>'23',
            'data_contagem' => '2017-09-26',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('contagems')->insert([
            'quantidade'=>'34',
            'data_contagem' => '2017-09-26',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('contagems')->insert([
            'quantidade'=>'90',
            'data_contagem' => '2017-09-26',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);


    }
}
