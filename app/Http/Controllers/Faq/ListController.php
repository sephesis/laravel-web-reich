<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Resourses\PageHelper;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function __invoke()
    {
        $pageTitle = PageHelper::getCurrentTitle();
        $faqs = Faq::where('active', '=', 1)->get();
        return view('faq.list', compact('pageTitle', 'faqs'));
    }
}
