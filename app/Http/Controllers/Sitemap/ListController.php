<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use App\Resourses\PageHelper;

class ListController extends Controller
{
    //
    public function __invoke() {
        $pageTitle = PageHelper::getCurrentTitle();
        return view('sitemap.list', compact('pageTitle'));
    }
}
