<?php

namespace Database\Seeders;

use App\Models\Attendee;
use App\Models\Event;
use App\Models\Preference;
use App\Models\Ticket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Attendee::factory(300)->create();

        Attendee::all()->each(function ($attendee) {
            Log::info('Creating preferences for attendee ' . $attendee->id);
            $rand = rand(1, 3);
            for ($i = 0; $i < $rand; $i++) {

           $event= Event::factory(1)->create()->toArray();
           $eventId=$event[0]['id'];

          //  $event=Event::latest()->first();

            if($eventId % 2 == 0 ){
                $start_date = now()->addDay(rand(1, 500));
                $end_date = now()->addDays(rand(1, 500));
            }else{
                $start_date = now()->subDays(rand(1, 500));
                $end_date = now()->subDays(rand(1, 500));
            }

            Ticket::factory(1)->create([
                'attendee_id' => $attendee->id,
                'event_id' => $eventId,
                'start_date' => $start_date,
                'end_date' => $end_date
            ]);
         
            }
            
            Preference::factory(1)->create([
                'attendee_id' => $attendee->id,
            ]);
        });

    }
}
