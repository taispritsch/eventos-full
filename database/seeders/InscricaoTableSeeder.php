<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inscricao;

class InscricaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inscricao::create([
            'usuario_id' => 1, 
            'evento_id' => 3,  
            'data_inscricao' => now(),
        ]);
        
        Inscricao::create([
            'usuario_id' => 2,
            'evento_id' => 4,  
            'data_inscricao' => now(),
        ]);
        
    }
}
