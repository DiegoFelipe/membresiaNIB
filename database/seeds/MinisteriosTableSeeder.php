<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinisteriosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ministerios')->insert([
          'min_nome' => 'percussao',
          'min_descricao' => 'Ministério de Percussão',
        ]);
    }
}
