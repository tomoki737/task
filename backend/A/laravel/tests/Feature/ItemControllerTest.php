<?php

namespace Tests\Feature;

use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_item()
    {
        Item::factory()->create();
        $response = $this->get('/items');

        $response->assertStatus(200);
        $response->assertJson([
            "name" => "apple",
            "price" => 200
        ]);
    }

    public function test_store_item()
    {
        $response = $this->post('/items', [
            "name" => "apple",
            "price" => 200
        ]);

        $response->assertStatus(200);
        $response->assertJson(["message" => "success"]);
    }
}
