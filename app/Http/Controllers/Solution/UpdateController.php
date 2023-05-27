<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Http\Requests\Solution\UpdateRequest;
use App\Models\Solution;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Solution $solution) {
        $data = $request->validated();
        $solution->update($data);
        return redirect()->back()
                         ->with('success', 'Решение ' . $data['title'] . ' было успешно обновлено');
    }
}
