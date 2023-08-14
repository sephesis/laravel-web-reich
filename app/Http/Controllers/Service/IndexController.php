<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Resourses\Helpers\PageHelper;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke() {

        $services = Service::all();
        $counter = Service::all()->count();
        $pageTitle = PageHelper::getCurrentTitle();
        return view('service.index', compact('services', 'counter'));
    }
}
