<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Form\SendRequest;
use DefStudio\Telegraph\Facades\Telegraph as Telegraph;
use Illuminate\Support\Facades\Storage;
use App\Models\FormResult;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SendRequest $request)
    {
        $data = $request->validated();

        $html = '';
        $isFileExist = false;

        $name = $data['feedback_name'];
        $phone = $data['feedback_phone'];
        $type = $data['feedback_type'];
        $agreement = $data['feedback_privacy'];

        if (isset($data['feedback_file'])) {
            $file = Storage::disk('local')->put('/files', $data['feedback_file']);
            $isFileExist = true;
        }

        $service = Service::find($type);

        $html = "<strong>Новая заявка на проект</strong>\n" . "Имя: " . $name . "\nТелефон: " . $phone . "\nУслуга: " . $service->title;

        if ($isFileExist) {
            if (Storage::disk('local')->exists($file)) {
                $html .= "\nФайл с тз: Да";
                Telegraph::document(Storage::path($file))->html($html)->send();
            }else{
                $html .= "\nФайл с тз не прикрепился, но находится по адресу " . $file;
                Telegraph::html($html)->send();
            }
        }else{
            Telegraph::html($html)->send();
        }

        $values = [
            'success' => true,
            'name' => $name,
            'phone' => $phone,
            'agreement' => $agreement,
            'serviceType' => $type,
            'file' => $isFileExist ? $file : '',
        ];

        $prepared['values'] = json_encode($values);
        $prepared['form_id'] = 1; 

        $formResult = (new FormResult())->create($prepared);

        return response()->json($values);
    }
}
