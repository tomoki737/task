<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function test_store()
    {
        $response = $this->actingAs($this->user)->post('/articles/store', [
            'body' => "apple",
        ]);

        $response->assertStatus(302);
    }

    public function test_index()
    {
        $article = Article::factory()->create();
        $response = $this->get('/articles');

        $response->assertStatus(200);

        // $response->assertJson([
        //     'articles' =>
        //     [
        //         'body' => $article->body
        //     ]
        // ]);
    }
}
