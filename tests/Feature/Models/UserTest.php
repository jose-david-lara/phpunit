<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        //

        User::factory()->create([
            'email' => 'jose@admin.com'
        ]);

        $this->assertDatabaseHas('users',[
            'email' => 'jose@admin.com'
        ]);

        $this->assertDatabaseMissing('users',[
            'email' => 'no@existe.com'
        ]);
    }
}
