<?php

use Illuminate\Database\Seeder;

class FranquiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('franquias')->insert([
            'nome'=>'Franquia Tem Mais + Chamanculo',
            'provincia' => 'Maputo',
            'distrito' => 'Kaubukwane',
            'user_id'=>'1'

        ]);

        DB::table('franquias')->insert([
            'nome'=>'Franquia Tem Mais + Malehice',
            'provincia' => 'Maputo',
            'distrito' => 'Kaubukwane',
            'user_id'=>'1'

        ]);


        DB::table('franquias')->insert([
            'nome'=>'Franquia Tem Mais',
            'provincia' => 'Maputo',
            'distrito' => 'Kaubukwane',
            'user_id'=>'1'

        ]);
    }
}
