<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faq\StoreRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    private const PROPERTY_KEYS = ['active'];

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        foreach (self::PROPERTY_KEYS as $key) {
            $data[$key] = array_key_exists($key, $data) ? true : false;
        }


        $faq = (new Faq())->create($data);

        return redirect()->back()->with('success', 'Данные успешно сохранены');
    }
}
