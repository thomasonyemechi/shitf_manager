<?php

namespace Database\Factories;

use App\Models\Shift;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShiftRequest>
 */
class ShiftRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIDs = User::inRandomOrder()->first()->id;
        $shift = Shift::inRandomOrder()->first()->id;
        return [
            'user_id' => $userIDs,
            'shift_id' => $shift
        ];
    }
}
