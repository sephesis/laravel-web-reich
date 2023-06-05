<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProjectFilter extends AbstractFilter
{
    const SOLUTION = 'solution_id';

    protected function getCallbacks(): array
    {
        return [
            self::SOLUTION => [$this, 'solution_id'],
        ];
    }

    public function solution_id(Builder $builder, $value) 
    {
        $builder->where('solution_id', $value);
    }
}