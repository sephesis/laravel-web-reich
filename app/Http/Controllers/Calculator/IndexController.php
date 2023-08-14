<?php

namespace App\Http\Controllers\Calculator;

use App\Resourses\Helpers\PageHelper;

class IndexController
{
    public function __invoke()
    {
        $pageTitle = PageHelper::getCurrentTitle();
        return view('calculator.index', compact('pageTitle'));
    }
}