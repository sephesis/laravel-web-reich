<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Http\Requests\Solution\StoreRequest;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
       
        $data['active'] = array_key_exists('active', $data) ? true : false;

        $data['description'] = strip_tags(trim($data['description']));

        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        Solution::firstOrCreate($data);

        return redirect()->back()
                         ->with('success', 'Решение ' . $data['title'] . ' было успешно добавлено');
    }
}
