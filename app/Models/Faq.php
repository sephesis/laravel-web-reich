<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faq';
    protected $guarded = false;

    private const IS_ACTIVE = 1, 
                  IS_DISABLED = 0;


    public static function getStatuses()
    {
         return [
            self::IS_ACTIVE => 'Опубликована', 
            self::IS_DISABLED => 'Не опубликована'
         ];
    }

    /**
     * отдает название атрибута
     */
    public function getStatusTitleAttribute() 
    {
        return self::getStatuses()[$this->active];
    }
}
