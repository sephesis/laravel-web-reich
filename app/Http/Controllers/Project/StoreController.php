<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Transliterate;

class StoreController extends Controller
{
    //
    private const PROPERTY_KEYS = ['active', 'property_column_size_4', 'property_column_size_8'];

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
       
        if (empty($data['slug'])) {
            $data['slug'] = Transliterate::slugify(trim($data['title']));
        }
        
        foreach (self::PROPERTY_KEYS as $key) {
            $data[$key] = array_key_exists($key, $data) ? true : false;
        }

        $proj = (new Project())->create($data);
        return redirect()->route('project.index');
    }
}
