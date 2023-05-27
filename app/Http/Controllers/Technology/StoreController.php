<?php

namespace App\Http\Controllers\Technology;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Technology\StoreRequest;
use App\Models\Technology;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Technology::firstOrCreate($data);

        return redirect()->route('technology.index');
    }
}
