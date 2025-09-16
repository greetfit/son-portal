<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomInventoryAdjustment extends Model
{
    protected $fillable = [
        'hotel_id','room_id','date','delta','note'
    ];
    protected $casts = ['date' => 'date'];

    public function hotel(): BelongsTo { return $this->belongsTo(Hotel::class); }
    public function room(): BelongsTo { return $this->belongsTo(Room::class); }
}
