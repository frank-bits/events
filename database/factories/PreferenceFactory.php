<?php

namespace Database\Factories;

use App\Models\Attendee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preference>
 */
class PreferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'attendee_id' => Attendee::factory(),
            'preferences' => $this->faker->words(2, true),
        ];
    }
}
