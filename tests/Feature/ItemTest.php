<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemTest extends TestCase
{
    use RefreshDatabase;

    
    public function test_items(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('/items');

        $response->assertOk();
    }

    public function test_create_item(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/items',
            [
                'name' => 'Articulo de prueba',
                'description' => 'Descripcion del articulo de prueba',
                'quantity' => '10',
                'price' => '99.99'
            ]);

            $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/items');
    }
}
