<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Filterable;

class Project extends Model
{
    use HasFactory, Filterable;

    private const IS_ACTIVE = 1, 
                  IS_DISABLED = 0;

    protected $table = 'projects';
    protected $guarded = false;

    protected $fillable = [ 'title', 'url', 'active', 
                            'year', 'p_date', 'color', 'solution_id', 'sort',
                            'img', 'property_column_size_4', 'property_column_size_8', 
                            'slug', 'show_on_main'];

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
