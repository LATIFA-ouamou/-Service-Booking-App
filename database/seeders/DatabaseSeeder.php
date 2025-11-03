<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
;
use App\Models\Service;
use App\Models\Booking;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Service::factory(10)->create()->each(function($service){
            // Pour chaque service, créer 3 réservations associées
              Booking::factory(3)->create(['service_id'=>$service->id]);

        });


        
      
    }
}
