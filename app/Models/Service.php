<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = false;

    protected $fillable = ['title', 'active', 'solution_id'];

    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id', 'id');
    }
}
