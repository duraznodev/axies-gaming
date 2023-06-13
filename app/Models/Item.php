<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Item extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'price',
        'royalties',
        'method',
        'size',
        'collection_id',
        'user_id',
        'category_id',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function author():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function collection():BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function likes():MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
