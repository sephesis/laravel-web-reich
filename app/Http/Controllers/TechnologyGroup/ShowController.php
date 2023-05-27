<?php

namespace App\Http\Controllers\TechnologyGroup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //
    public function __invoke()
    {
        return view('group.show');
    }
}
