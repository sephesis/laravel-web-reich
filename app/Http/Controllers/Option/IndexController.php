<?php

namespace App\Http\Controllers\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Options;

class IndexController extends Controller
{
    //

    public function __invoke()
    {
        $options = Options::all();
        return view('option.index', compact('options'));
    }
}
