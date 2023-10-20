<?php

namespace App\Http\Controllers\Form;

use App\Models\Service;
use App\Http\Requests\Form\SendRequest;
use DefStudio\Telegraph\Facades\Telegraph;
use Illuminate\Support\Facades\Storage;
use App\Models\FormResult;

class FormController extends \App\Http\Controllers\Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SendRequest $request)
    {
        $data = $request->validated();

        $html = $file = '';
        $isFileUpload = false;

        if (isset($data['feedback_file'])) {
            $file = Storage::disk('local')->put('/files', $data['feedback_file']);
            $isFileUpload = true;
        }

        $service = Service::find($data['feedback_type']);
        $html = "<strong>Новая заявка на проект</strong>\n" . "Имя: " . $data['feedback_name'] . "\nТелефон: " . $data['feedback_phone'] . "\nУслуга: " . $service->title;

        if ($isFileUpload) {
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
            'name' => $data['feedback_name'],
            'phone' => $data['feedback_phone'],
            'agreement' => $data['feedback_privacy'],
            'serviceType' => $data['feedback_type'],
            'file' => $isFileUpload ? $file : '',
        ];

        $prepared['values'] = json_encode($values);
        $prepared['form_id'] = 1; 

        $formResult = (new FormResult())->create($prepared);

        return response()->json($values);
    }
}
