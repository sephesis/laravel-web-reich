<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resourses\Helpers\PageHelper;
use App\Models\Project;
use App\Http\Filters\ProjectFilter;
use App\Http\Requests\Project\FilterRequest;
use App\Models\Solution;

class ListController extends Controller
{
    //
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ProjectFilter::class, ['queryParams' => array_filter($data)]);

        $projects = Project::filter($filter)->get();

        $projectsCounter = $projects->count();

        $pageTitle = PageHelper::getCurrentTitle();

        $solutions = Solution::where('active', '=', '1')->where('id', '!=', '3')->get();

        return view('project.list', compact('projects', 'pageTitle', 'projectsCounter', 'solutions'));
    }
}
