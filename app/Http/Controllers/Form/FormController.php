<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form\SendRequest;
use App\Resourses\Integrations\Telegram\Handler22;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SendRequest $request)
    {
        //
        $data = $request->validated();

        $name = $data['feedback_name'];
        $phone = $data['feedback_phone'];

        return response()->json([
            'name' => $name,
        ]);
    }
}
