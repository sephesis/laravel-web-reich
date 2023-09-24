<?php

namespace App\Http\Controllers\Module;

use App\Http\Requests\Module\StoreRequest;
use App\Models\Module;

class StoreController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $data['show_in_calculator'] = array_key_exists('show_in_calculator', $data);

        $module = (new Module())->create($data);
        
        return redirect()->back()->with('success', 'Модуль успешно сохранен');
    }
}