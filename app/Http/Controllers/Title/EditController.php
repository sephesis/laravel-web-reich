<?php

namespace App\Http\Controllers\Title;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Resourses\Helpers\PageHelper;

class EditController extends Controller
{
    //
    public function __invoke()
    {
        $titles = PageHelper::getTitlesJsonFile();
        return view('title.edit', compact('titles'));
    }
}
