<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    protected $model = Evento::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'data' => $this->faker->date(),
            'hora' => $this->faker->time(),
        ];
    }
}
