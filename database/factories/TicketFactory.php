<?php

namespace Database\Factories;

use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'event_id' => Event::factory()->create(
                [
                    'start_date' => now()->addDays(rand(1, 10)),
                    'end_date' => now()->addDays(rand(1, 1)),
                ]),
            'attendee_id' => Attendee::factory(),
            'quantity' => 1,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'start_date' => $this->faker->dateTime,
            'end_date' => $this->faker->dateTime
        ];
    }
}
