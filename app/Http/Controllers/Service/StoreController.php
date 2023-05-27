<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        $data['active'] = array_key_exists('active', $data) ? true : false;
        Service::firstOrCreate($data);
        return redirect()->back()->with('success', 'Услуга успешно сохранена');
    }
}
