<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HotelImage extends Model
{
    protected $table = 'hotel_images'; // if your migration used plural
    protected $fillable = ['hotel_id','path','caption'];

    public function hotel(): BelongsTo { return $this->belongsTo(Hotel::class); }

    public function getUrlAttribute(): string
    {
        return asset('storage/'.$this->path);
    }
}
