<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function __invoke() {
        $solutions = Solution::all();
        return view('solution.list', compact('solutions'));
    }
}
