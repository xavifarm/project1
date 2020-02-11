<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_welcomes_users_with_nickname()
    {
        $this->get('saludo/xavi/ofco')
             ->assertStatus(200)
             ->assertSee("Bienvenido xavi, tu apodo es ofco");
    }

    public function test_it_welcomes_users_without_nickname()
    {
        $this->get('saludo/xavi')
             ->assertStatus(200)
             ->assertSee("Bienvenido xavi, no tienes apodo");
    }
}


?>