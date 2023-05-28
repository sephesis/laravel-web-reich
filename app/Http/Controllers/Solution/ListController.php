<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use App\Resourses\Config;

class ListController extends Controller
{
    //
    public function __invoke() {
        $solutions = Solution::all();
        $pageTitle = Config::getCurrentTitle();
        return view('solution.list', compact('solutions', 'pageTitle'));
    }
}
