<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Models\ArticleTag;

class ViewController extends Controller
{
    //
    public function __invoke($slug)
    {
        $article = Article::where('slug', '=', $slug)->firstOrFail();

        $others = Article::where('id', '!=', $article->id)->take(2)->get();
        
        //ивент счетчика просмотров статьи
        event('articleHasViewed', $article);
        return view('article.view', compact('article', 'others'));
     }
}
