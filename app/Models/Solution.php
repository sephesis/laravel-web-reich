<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = 'solutions';
    protected $guarded = false;

    protected $fillable = ['title', 'price', 'active'];

    public function services()
    {
        return $this->hasMany(Service::class, 'solution_id', 'id'); 
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'solution_id', 'id'); 
    }
}
