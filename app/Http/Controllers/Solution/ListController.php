<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Resourses\PageHelper;

class ListController extends Controller
{
    //
    public function __invoke() {
        $solutions = Solution::all();
        $pageTitle = PageHelper::getCurrentTitle();
        return view('solution.list', compact('solutions', 'pageTitle'));
    }
}
