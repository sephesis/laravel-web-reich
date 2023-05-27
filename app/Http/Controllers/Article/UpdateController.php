<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Article\UpdateRequest;
use App\Models\Article;
use App\Models\ArticleTag;

class UpdateController extends Controller
{
    //
    public function __invoke(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();

        $data['active'] = array_key_exists('active', $data) ? true : false;
        if (array_key_exists('tags', $data)) {
            $tagsIds = $data['tags'];
            unset($data['tags']);
        }

        $article->update($data);

        if (!empty($tagsIds)) {
            foreach ($tagsIds as $tagId) {
                ArticleTag::firstOrCreate([
                    'article_id' => $article->id,
                    'tag_id' => $tagId,
                ]);
            }    
        }

        return redirect()->back()->with('success', 'Статья ' . $data['title'] . ' была успешно обновлена');
     }
}
