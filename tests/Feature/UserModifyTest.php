<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModifyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_loads_the_modify_user()
    {
        $this->get('/usuarios/{id}/edit')
             ->assertStatus(200)
             ->assertSee('Modificando el usuario');
    }
}



?>