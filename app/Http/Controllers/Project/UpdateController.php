<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    private const PROPERTY_KEYS = ['active', 'property_column_size_4', 'property_column_size_8', 'show_on_main'];

    public function __invoke(UpdateRequest $request, Project $project)
    {
        $data = $request->validated();

        foreach (self::PROPERTY_KEYS as $key) {
            $data[$key] = array_key_exists($key, $data) ? true : false;
        }

        $project->update($data);

        return redirect()->back()->with('success', 'Проект ' . $data['title'] . ' был успешно обновлен');
    }
}
