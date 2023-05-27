<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function __invoke() {
        return view('service.edit');
    }
}
