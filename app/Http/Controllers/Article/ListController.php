<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\FilterRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Http\Filters\ArticleFilter;
use App\Resourses\PageHelper;

class ListController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ArticleFilter::class, ['queryParams' => array_filter($data)]);

        $articles = Article::filter($filter)->get();

        $pageTitle = PageHelper::getCurrentTitle();

        return view('article.list', compact('articles', 'pageTitle'));
     }
}
