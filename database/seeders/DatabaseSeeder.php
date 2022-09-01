<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //se ejecutan en orden
        Event::factory()->create(['name' => 'Run Club', 'description' => 'Evento para quedarte en forma y conocer gente', 'img'=>'https://tophealth.es/wp-content/uploads/2018/06/beneficios-de-correr-780x400.jpg', 'spaces'=>10]);
        Event::factory()->create(['name' => 'Run Club', 'description' => 'Evento para quedarte en forma y conocer gente', 'img'=>'https://tophealth.es/wp-content/uploads/2018/06/beneficios-de-correr-780x400.jpg', 'spaces'=>10]);
       // Event::factory(5)->create();
       //crear users
       User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);
       User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

    }
}
