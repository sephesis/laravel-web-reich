<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke() {
        $counter = Solution::all()->count();
        $solutions = Solution::all();
        return view('solution.index', compact('solutions', 'counter'));
    }
}
