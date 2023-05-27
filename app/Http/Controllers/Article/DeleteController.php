<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class DeleteController extends Controller
{
    //
    public function __invoke(Article $article)
    {
        Article::find($article->id)->delete();
        return response()->json([
            'success' => true,
            'type' => 'article',
            'id' => $article->id
        ]);
    }
}
