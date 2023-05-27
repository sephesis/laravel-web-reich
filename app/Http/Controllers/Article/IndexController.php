<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Article\FilterRequest;
use App\Http\Filters\ArticleFilter;

class IndexController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();

        $filter = app()->make(ArticleFilter::class, ['queryParams' => array_filter($data)]);

        $articles = Article::filter($filter)->get();

        $counter = $articles->count();
        
        return view('article.index', compact('articles', 'counter'));
    }
}
