<?php

namespace App\Http\Filters;

use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Builder;

class ArticleFilter extends AbstractFilter
{
    const ACTIVE = 'active';
    const SLUG = 'slug';
    const ID = 'id';
    const TAGS = 'tags';

    protected function getCallbacks(): array
    {
        return [
            self::ACTIVE => [$this, 'active'],
            self::SLUG => [$this, 'slug'],
            self::ID => [$this, 'id'],
            self::TAGS => [$this, 'tags'],
        ];
    }

    public function active(Builder $builder, $value) 
    {
        $builder->where('active', $value);
    }

    public function id(Builder $builder, $value) 
    {
        $builder->where('id', $value);
    }

    public function slug(Builder $builder, $value) 
    {
        $builder->where('slug', 'like', "%{$value}%");
    }

    public function tags(Builder $builder, $value)
    {
        $articleTags = ArticleTag::where('tag_id', $value)->get();

        foreach ($articleTags as $articleTag) {
            $articleTagsIds[] = $articleTag->article_id;
        }

        $builder->whereIn('id', $articleTagsIds);
    }
}