<?php

namespace App\Http\Controllers\Solution;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Solution $solution) {
        
        Solution::find($solution->id)->delete();

        return response()->json([
            'success' => true,
            'type' => 'solution',
            'id' => $solution->id
        ]);
    }
}
