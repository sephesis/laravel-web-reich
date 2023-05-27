<?php

namespace App\Http\Controllers\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function __invoke()
    {
        return view('option.index');
    }
}
