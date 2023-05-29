<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resourses\PageHelper;
use App\Models\Project;

class ListController extends Controller
{
    //
    public function __invoke()
    {
        $projects = Project::orderBy('sort', 'asc')->where('active', '=', '1')->get();
        $pageTitle = PageHelper::getCurrentTitle();
        return view('project.list', compact('projects', 'pageTitle'));
    }
}
