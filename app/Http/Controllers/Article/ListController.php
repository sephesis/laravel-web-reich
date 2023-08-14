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
    
        $articles = Article::filter($filter)->paginate(8);  
        
        if (isset($_GET['tags'])) {
            $articleTags = ArticleTag::where('tag_id', $_GET['tags'])->get();

            foreach ($articleTags as $articleTag) {
                $articleTagsIds[] = $articleTag->article_id;
            }

            $articles = Article::whereIn('id', $articleTagsIds)->paginate(8);
            
        }

        $pageTitle = PageHelper::getCurrentTitle();

        return view('article.list', compact('articles', 'pageTitle'));
     }
}
