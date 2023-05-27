<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __invoke()
    {
        $solutions = Solution::all();
        return view('project.create', compact('solutions'));
    }
}
