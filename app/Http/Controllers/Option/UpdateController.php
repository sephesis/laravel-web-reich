<?php

namespace App\Http\Controllers\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function __invoke()
    {
        return view('option.update');
    }
}
