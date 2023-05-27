<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Filterable;

    private const IS_ACTIVE = 1, IS_DISABLED = 0;
    
    protected $table = 'articles';
    protected $guarded = false;

    protected $fillable = ['description', 'slug', 'title', 'active'];

    public function tags() 
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id');
    }

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

    /**
     * очистка от html тегов
     */
    private function clean(): void
    {
        $this->description = strip_tags($this->description);
    }

    /**
     * отдает превью описания модели
     */
    public function getPreviewTextAttribute(): string 
    {
        $this->clean();

        if (mb_strlen($this->description) > 100) {
            return mb_substr($this->description, 0, 250) . '...';
        }

        return $this->description;
    }

    public function getFormattedDateCreatedAttribute()
    {
        $date = new \DateTime($this->created_at);
        $formatter = new \IntlDateFormatter("ru_RU", \IntlDateFormatter::LONG, \IntlDateFormatter::NONE);
        return $formatter->format($date); 
    }
}
