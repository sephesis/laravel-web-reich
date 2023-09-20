<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Form\SendRequest;
use DefStudio\Telegraph\Facades\Telegraph as Telegraph;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SendRequest $request)
    {
        $data = $request->validated();

        $html = '';

        $name = $data['feedback_name'];
        $phone = $data['feedback_phone'];
        $type = $data['feedback_type'];

        $service = Service::find($type);

        $html = "<strong>Новая заявка на проект</strong>\n" . "Имя: " . $name . "\nТелефон: " . $phone . "\nУслуга: " . $service->title;
        if (isset($data['feedback_file'])) {
            $img = Storage::disk('local')->put('/files', $data['feedback_file']);
            if (Storage::disk('local')->exists($img)) {
                $html .= "\nФайл с тз: Да";
                Telegraph::document(Storage::path($img))->html($html)->send();
            }else{
                $html .= "\nФайл с тз не прикрепился, но находится по адресу " . $img;
                Telegraph::html($html)->send();
            }
        }else{
            Telegraph::html($html)->send();
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
