<?php

namespace App\Http\Controllers\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function __invoke()
    {
        return view('option.edit');
    }
}
