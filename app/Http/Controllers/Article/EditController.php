<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    /**
     * получаем и обрабатываем теги и статьи
     * для передачи во вьюшку
     */
    public function __invoke(Article $article)
    {
        $tags = Tag::all();
        $articleTags = [];
        foreach ($article->tags as $tag) {
            $articleTags[] = $tag->id;
        }

        return view('article.edit', compact('article', 'tags', 'articleTags'));
    }
}
