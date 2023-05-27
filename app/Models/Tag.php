<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $guarded = false;

    public function tags() 
    {
        return $this->belongsToMany(Article::class, 'article_tags', 'tag_id', 'article_id');
    }
}
