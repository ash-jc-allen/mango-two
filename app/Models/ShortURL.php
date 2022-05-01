<?php

namespace App\Models;

use AshAllenDesign\ShortURL\Models\ShortURL as BaseShortURL;
use Illuminate\Database\Eloquent\Builder;

class ShortURL extends BaseShortURL
{
    public function scopeSearch(Builder $query, string $searchTerm): Builder
    {
        if (! $searchTerm) {
            return $query;
        }

        return $query->where('destination_url', 'like', '%'.$searchTerm.'%')
            ->orWhere('default_short_url', 'like', '%'.$searchTerm.'%');
    }
}
