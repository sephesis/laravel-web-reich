<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Http\Requests\Article\StoreRequest;
use Illuminate\Support\Facades\Storage;
use \Transliterate;

class StoreController extends Controller
{
    //
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('img', $data)) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
    
        $tagsIds = $data['tags'];

        unset($data['tags']);

        if (empty($data['slug'])) {
            $data['slug'] = Transliterate::slugify(trim($data['title']));
        }
       

        $data['description'] = strip_tags(trim($data['description']));
    
        $article = (new Article())->create($data);
     
        foreach ($tagsIds as $tagId) {
            ArticleTag::firstOrCreate([
                'article_id' => $article->id,
                'tag_id' => $tagId,
            ]);
        }

        return redirect()->route('article.index');
    }
}
