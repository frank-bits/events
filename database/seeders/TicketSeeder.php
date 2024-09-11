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
        ->create();
    }
}
