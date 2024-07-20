<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criar eventos fictícios
        Evento::create([
            'nome' => 'Evento 1',
            'data' => '2024-04-16',
            'hora' => '09:00:00',
        ]);

        Evento::create([
            'nome' => 'Evento 2',
            'data' => '2024-04-17',
            'hora' => '10:00:00',
        ]);

        Evento::create([
            'nome' => 'Conferência de Tecnologia',
            'data' => '2024-04-20',
            'hora' => '09:00:00',
        ]);
        
        Evento::create([
            'nome' => 'Workshop de Desenvolvimento Web',
            'data' => '2024-04-25',
            'hora' => '14:00:00',
        ]);
    }
}
