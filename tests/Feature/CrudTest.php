<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // hay q anñadir la siguiente linea si o si
     use RefreshDatabase;

    public function test_list_event_appear_in_welcome_page()
    {  
       //primero q escribir dentro de function
       $this->withExceptionHandling();

       $events = Event::factory(2)->create();
       $event = $events[0];

       $response = $this->get('/');
       $response->assertStatus(200)
        ->assertViewIs('welcome');

       $response->assertSee($event->name);
    }
}
