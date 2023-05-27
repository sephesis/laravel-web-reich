<?php

namespace App\Http\Controllers\TechnologyGroup;

use App\Http\Controllers\Controller;
use App\Http\Requests\TechnologyGroup\UpdateRequest;
use App\Models\TechnologyGroup;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, TechnologyGroup $group)
    {
        $data = $request->validated();
        $group->update($data);

        return view('tag.show', compact('group'));
    }
}
