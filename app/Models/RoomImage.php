<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomImage extends Model
{
    protected $fillable = ['room_id','path','caption'];

    public function room(): BelongsTo { return $this->belongsTo(Room::class); }

    public function getUrlAttribute(): string
    {
        return asset('storage/'.$this->path);
    }
}
