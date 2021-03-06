<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ArticleType;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'url',
        'resources',
        'instagram_id',
        'twitter_id',
        'soundcloud_id',
        'article_type_id',
        'home',
        'image',
        'published_at',
    ];

    public function type()
    {
        return $this->belongsTo(ArticleType::class, 'article_type_id');
    }

    public static function homes()
    {
        return ['Yes', 'No'];
    }
}
