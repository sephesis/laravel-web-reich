<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class DeleteController extends Controller
{
    //
    public function __invoke(Faq $faq)
    {
        Faq::find($faq->id)->delete();
       // return view('faq.create');
    }
}
