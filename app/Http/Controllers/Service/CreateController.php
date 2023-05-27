<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    //
    public function __invoke() {
        $solutions = Solution::all();
        return view('service.create', compact('solutions'));
    }
}
