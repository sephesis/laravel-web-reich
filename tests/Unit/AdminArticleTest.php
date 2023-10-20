<?php

namespace Tests\Unit;

use App\Models\Article;
use Tests\TestCase;
use App\Models\User;

class AdminArticleTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_insert_article_into_database(): void
    {
        $response = $this->actingAs(User::find(1))->post('/admin/articles/create', [
            'title' => 'Как создать сайт на базе фреймворка Laravel 8.X?',
            'active' => 1,
            'slug' => '',
            'desription' => 'Lorem Ipsum',
            'tags' => [2, 3],
            'img' => '',
        ])->assertInvalid(['slug' => 'required', 'title' => 'required', 'img' => 'nullable']);

        if ($response->assertSuccessful()) {

            $response->assertStatus(200);

            $response->assertRedirect('/admin/articles/create');
        }
    }


    public function test_delete_article_from_database(): void
    {
        $article = Article::factory()->create();

        $response = $this->actingAs(User::find(1))->post(
            "/admin/article/{$article->id}/delete",
            $article->id
        );

        $response->assertNull(Article::find($article->id));
        $response->assertRedirect('/admin/articles');
    }

    public function test_update_article_from_database(): void
    {
        $article = Article::factory()->create();

        $updatedArticle = Article::find(1);

        $response = $this->actingAs(User::find(1))->post(
            "/admin/article/{$article->id}/update",
            $article
        );

        $response->assertNull(Article::find($updatedArticle->id)->update($article));
        $response->assertRedirect('/admin/articles');
    }
}
