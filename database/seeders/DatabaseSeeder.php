<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Event::factory(100)->create();
        \App\Models\Attendee::factory(100)->create();
    
        for ($i = 0; $i < 50; $i++) {
            DB::table('tickets')->insert([
                'attendee_id' => rand(1, 100),
                'event_id' => rand(1, 100),
                'price' => 100,
                'quantity' => rand(1, 4),
                'start_date' => now(),
                'end_date' => now()->addHours(2),
            ]);
        }


        for ($i = 0; $i < 10; $i++) {
            DB::table('preferences')->insert([
                'attendee_id' => rand(1, 100),
                'event_id' => rand(1, 100),
                'preferences' => 'I have preferences',
            
            ]);
        }
       
    
      
    }
}
