<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Attendee;
use App\Models\Preference;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        
        \App\Models\Ticket::factory(500)
        // ->has(Event::factory()->count(1))
        // ->has(Attendee::factory()->count(3))
        ->create();

        Attendee::all()->each(function ($attendee) {
            
            Preference::factory(1)->create([
                'attendee_id' => $attendee->id,
            ]);
        });

    }
}
