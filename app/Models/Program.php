<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory, sluggable;

    protected $fillable = ['title', 'kategori_id', 'slug', 'url_link', 'image', 'description'];
    // protected $guarded = ['id'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );
        $query->when(
            $filters['kategori'] ?? false,
            fn($query, $kategori) =>
            $query->whereHas('ka', fn($query) => $query->where('slug', $kategori))
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
