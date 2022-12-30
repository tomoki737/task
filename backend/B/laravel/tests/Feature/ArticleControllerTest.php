<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function test_store_success()
    {
        $response = $this->actingAs($this->user)->post('/articles', [
            'body' => "apple",
        ]);

        $response->assertStatus(302);
    }

    public function test_index()
    {
        $article = Article::factory()->create();
        $response = $this->get('/');


        $response->assertStatus(200);
    }
}
