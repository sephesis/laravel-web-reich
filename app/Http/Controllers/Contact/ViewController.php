<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function __invoke()
    {
        return view('contact.view');
    }
}
