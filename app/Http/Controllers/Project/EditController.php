<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solution;
use App\Models\Project;

class EditController extends Controller
{
    //
    public function __invoke(Project $project)
    {
        $solutions = Solution::all();
        return view('project.edit', compact('project', 'solutions'));
    }
}
