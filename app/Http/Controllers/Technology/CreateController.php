<?php

namespace App\Http\Controllers\Technology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TechnologyGroup;

class CreateController extends Controller
{
    //
    public function __invoke()
    {
        $technologyGroups = TechnologyGroup::all();

        return view('technology.create', compact('technologyGroups'));
    }
}
