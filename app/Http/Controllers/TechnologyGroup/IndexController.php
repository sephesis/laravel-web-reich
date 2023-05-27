<?php

namespace App\Http\Controllers\TechnologyGroup;

use App\Http\Controllers\Controller;
use App\Models\TechnologyGroup;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        $groups = TechnologyGroup::all();
        return view('group.index', compact('groups'));
    }
}
