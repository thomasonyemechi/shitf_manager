<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shift>
 */
class ShiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = ['Heallth Care assiatand jobs', 'Nurse Jobs', 'Support Worker', 'Office Job'];
        $type = ['permanent', 'contract', 'temporary', 'remote'];

        return [
            'title' => $title[array_rand($title)],
            'salary' => rand(10,100).'.'.rand(10,100),
            'workers_needed' => rand(10, 150),
            'location' => $this->faker->country(),
            'type' => $type[array_rand($type)],
            'discipline' => $title[array_rand($title)],
            'reference' => Str::random(15),
            'description' => $this->faker->text(10000) ,
            'created_by' => 1,
            'status' => 'active',
        ];
    }
}
