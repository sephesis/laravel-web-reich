<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Solution;
use App\Models\Technology;
use App\Models\Project;
use App\Models\TechnologyGroup;
use App\Resourses\Helpers\PageHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $groups = TechnologyGroup::all();
        $articles = Article::where('active', '=', 1)->get();
        $solutions = Solution::all();
        $projects = Project::orderBy('sort', 'asc')->where('active', '=', 1)->where('show_on_main', '=', 1)->get();
        $pageTitle = PageHelper::getCurrentTitle();
        return view('front.index', compact('groups', 'articles', 'solutions', 'projects', 'pageTitle'));
    }
}
