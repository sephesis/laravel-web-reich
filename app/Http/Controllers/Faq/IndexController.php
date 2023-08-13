<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class IndexController extends Controller
{
    //
    public function __invoke()
    {
        $faqs = Faq::all();
        $counter = Faq::all()->count();
        return view('faq.index', compact('faqs', 'counter'));
    }
}
