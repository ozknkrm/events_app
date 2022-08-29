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

    public function test_list_event_appear_in_home_page()
    {  
       //primero q escribir dentro de function
       $this->withExceptionHandling();

       $events = Event::factory(2)->create();
       $event = $events[0];

       $response = $this->get('/');
       $response->assertStatus(200)
        ->assertViewIs('home');

       $response->assertSee($event->name);
    }
    public function test_an_event_can_be_deleted()
    {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $this->assertCount(1, Event::all());
        $response = $this->delete(route('delete', $event->id));

        $this->assertCount(0, Event::all());
        

    }

    public function test_an_event_can_be_created(){
        $this->withDeprecationHandling();

        $response = $this->post(route('storeEvent'),[
            'name' => 'new name',
            'description' => 'new description',
            'img' => 'new img',
            'spaces' => '50'
        ]);
        $this->assertCount(1, Event::all());
    }
}
