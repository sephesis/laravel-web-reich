<?php

namespace App\Models\Traits;

use App\Http\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

/**
 * 
 */
trait Filterable
{
    //filter на самом деле
    public function scopeFilter(Builder $builder, FilterInterface $filterInterface)
    {
        $filterInterface->apply($builder);

        return $builder;
    }
}
