<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class CreateController extends Controller
{
    //
    public function __invoke()
    {
        $tags = Tag::all();
        return view('article.create', compact('tags'));
    }
}
