<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class DeleteController extends Controller
{
    //
    public function __invoke(Tag $tag)
    {
        Tag::find($tag->id)->delete();

        return response()->json([
            'success' => true,
            'type' => 'tag',
            'id' => $tag->id
        ]);
    }
}
