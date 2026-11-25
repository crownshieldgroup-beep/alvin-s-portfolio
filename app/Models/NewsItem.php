<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    protected $fillable = ['title', 'publication', 'url', 'excerpt', 'category', 'published_at'];

    protected function casts(): array
    {
        return ['published_at' => 'date'];
    }

    public function scopeLatestFirst(Builder $query): Builder
    {
        return $query->orderByRaw('published_at IS NULL')->orderByDesc('published_at')->orderByDesc('id');
    }
}
