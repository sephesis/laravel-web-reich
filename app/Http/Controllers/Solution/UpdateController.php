<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Http\Requests\Solution\UpdateRequest;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Solution $solution) {
        $data = $request->validated();
        $data['description'] = strip_tags(trim($data['description']));

        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        $solution->update($data);
        return redirect()->back()
                         ->with('success', 'Решение ' . $data['title'] . ' было успешно обновлено');
    }
}
