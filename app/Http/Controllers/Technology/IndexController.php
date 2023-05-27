<?php

namespace App\Http\Controllers\Technology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\TechnologyGroup;

class IndexController extends Controller
{
    //
    public function __invoke()
    {

        $technologies = Technology::all();
        return view('technology.index', compact('technologies'));
    }
}
