<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nome' => 'João da Silva',
            'email' => 'joao@example.com',
            'senha' => bcrypt('senha123'), 
        ]);
        
        Usuario::create([
            'nome' => 'Maria Oliveira',
            'email' => 'maria@example.com',
            'senha' => bcrypt('senha456'),
        ]);
    }
}
