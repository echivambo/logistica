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
            'mes' => '2017-11',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('contagems')->insert([
            'quantidade'=>'23',
            'mes' => '2017-11',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('contagems')->insert([
            'quantidade'=>'34',
            'mes' => '2017-11',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);
        DB::table('contagems')->insert([
            'quantidade'=>'90',
            'mes' => '2017-11',
            'comentario' => 'Cotagem do fecho do mes',
            'franquia_id'=>'1',
            'produto_id'=>'1',
            'user_id'=>'1'

        ]);


    }
}
