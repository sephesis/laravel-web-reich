<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Resourses\Helpers\PageHelper;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function __invoke()
    {
        $pageTitle = PageHelper::getCurrentTitle();
        return view('contact.view', compact('pageTitle'));
    }
}
