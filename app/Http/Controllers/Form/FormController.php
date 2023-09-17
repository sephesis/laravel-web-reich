<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Form\SendRequest;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SendRequest $request)
    {
        //
        $data = $request->validated();

//        dd($data);

        return response()->json([
            'name' => $data['feedback_name'],
        ]);
    }
}
