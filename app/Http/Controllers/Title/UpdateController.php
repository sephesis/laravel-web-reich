<?php

namespace App\Http\Controllers\Title;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Title\UpdateRequest;
use App\Resourses\Helpers\PageHelper;

class UpdateController extends Controller
{
    /**
     * получаем заголовки 
     */
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();

        $encoded = json_encode($data, JSON_FORCE_OBJECT|JSON_UNESCAPED_UNICODE);

        $loaded = file_put_contents(base_path(PageHelper::getTitleMap()), $encoded);

        if ($loaded !== false) {
            return redirect()->back()->with('success', 'Заголовки для страниц успешно обновлены');
        }
    }
}
