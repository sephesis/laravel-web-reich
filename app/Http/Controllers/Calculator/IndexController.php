<?php

namespace App\Http\Controllers\Calculator;

use App\Models\Module;
use App\Resourses\Helpers\PageHelper;
use App\Models\Service;

class IndexController
{
    public function __invoke()
    {
        $pageTitle = PageHelper::getCurrentTitle();
        $services = Service::all();
    

        // foreach ($services as $service) {
        //     if ($service->id == 7) {
        //         dd($service->modules);
        //     }
            
        // }
        //dd($modules);
        return view('calculator.index', compact('pageTitle', 'services'));
    }
}