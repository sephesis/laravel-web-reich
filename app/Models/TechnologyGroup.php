<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyGroup extends Model
{
    protected $table = 'technologies_groups';
    protected $guarded = false;

    public function technologies()
    {
        return $this->hasMany(Technology::class, 'technology_group_id', 'id'); 
    }
}
