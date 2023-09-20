<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormResult extends Model
{
    protected $table = 'form_results';
    protected $guarded = false;

    protected $fillable = [
        'form_id', 'values'
    ];
}