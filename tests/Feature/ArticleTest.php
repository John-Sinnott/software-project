<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    public function test_articles_page_loads()
    {
        $response = $this->get('/articles');

        $response->assertStatus(200);
    }

    // public function test_user_can_create_article()
    // {
    //     $user = User::factory()->create();
    //     $category = Category::factory()->create();

    //     $response = $this->actingAs($user)->post('/articles', [
    //         'name' => 'Test Article',
    //         'description' => 'Test description',
    //         'article_full' => 'Full content here',
    //         'date' => '2026-01-01',
    //         'latitude' => 53.34,
    //         'longitude' => -6.26,
    //         'category_id' => $category->id,
    //     ]);

    //     $response->assertRedirect('/articles');
    // }

    // public function test_article_is_saved_in_database()
    // {
    //     $user = User::factory()->create();
    //     $category = Category::factory()->create();

    //     $article = Article::factory()->create([
    //         'name' => 'Database Test',
    //         'user_id' => $user->id,
    //         'category_id' => $category->id,
    //         'article_full' => 'Full test content'
    //     ]);
    // }
}