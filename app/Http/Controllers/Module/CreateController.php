<?php

namespace App\Http\Controllers\Module;

use App\Models\Service;

class CreateController
{
    public function __invoke()
    {
        $services = Service::all();
        return view('module.create', compact('services'));
    }
}