<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Article;

class AdminController extends Controller
{
    //
    public function __invoke()
    {
        $tagsCounter = Tag::all()->count();
        $articlesCounter = Article::all()->count();
        
        return view('admin.index', [
                                    'tagsCounter' => $tagsCounter, 
                                    'articlesCounter' => $articlesCounter
                                   ]);
    }
}
