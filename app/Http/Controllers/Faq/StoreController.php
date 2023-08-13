<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\StoreRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Transliterate;

class StoreController extends Controller
{
    //
    private const PROPERTY_KEYS = ['active', 'property_column_size_4', 'property_column_size_8', 'show_on_main'];

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
    }
}
