<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = 'technologies';
    protected $guarded = false;

    public function group()
    {
        return $this->belongsTo(TechnologyGroup::class, 'technology_group_id', 'id');
    }
}
