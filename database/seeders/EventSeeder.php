<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //  $this->call(EventSeeder::class);

        // $events->each(function ($event) {
        //     $event->tickets()->saveMany(\App\Models\Ticket::factory(10)->make());
        // });

        \App\Models\Event::factory(300)->create();
    }
}
