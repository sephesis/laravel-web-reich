<?php

namespace App\Http\Controllers\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function __invoke()
    {  
       return redirect()->back()->with('success', 'Настройки были успешно обновлены');
    }
}
