<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function __invoke()
    {
        return view('project.view');
    }
}
