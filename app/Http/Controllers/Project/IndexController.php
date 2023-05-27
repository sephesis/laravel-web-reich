<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        $projects = Project::all();
        $counter = Project::all()->count();
        return view('project.index', compact('projects', 'counter'));
    }
}
