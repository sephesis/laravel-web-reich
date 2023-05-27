<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function __invoke(Solution $solution) 
    {
        return view('solution.show', compact('solution'));
    }
}
