<?php

namespace App\Http\Controllers\TechnologyGroup;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnologyGroup\StoreRequest;
use App\Models\TechnologyGroup;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        TechnologyGroup::firstOrCreate($data);

        return redirect()->back()->with('success', 'Группа технологий ' . $request->title . ' была успешно добавлена');
    }
}
