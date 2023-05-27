<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private const IS_ACTIVE = 1, IS_DISABLED = 0;

    protected $table = 'projects';
    protected $quarded = false;

    protected $fillable = ['title', 'url', 'active', 
                            'year', 'p_date', 'color', 'solution_id',
                            'img', 'property_column_size_4', 'property_column_size_8'];

    public static function getStatuses()
    {
         return [
            self::IS_ACTIVE => 'Опубликовано', 
            self::IS_DISABLED => 'Не опубликовано'
         ];
    }

    public function getStatusTitleAttribute() 
    {
        return self::getStatuses()[$this->active];
    }

    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id', 'id');
    }
}
