<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    //
    public function __invoke(Article $article)
    {
        $tags = DB::table('article_tags')->join('tags', 'article_tags.tag_id', '=', 'tags.id')
                                         ->where('article_id', $article->id)
                                         ->get();
        return view('article.show', compact('article', 'tags'));
    }
}
