<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    protected $table = 'article_tags';
    protected $guarded = false;


    protected $fillable = ['tag_id', 'article_id'];
}
