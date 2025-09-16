<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, BelongsToMany};

class Room extends Model
{
    protected $fillable = [
        'hotel_id',
        'room_type_id',
        'room_category_id',
        'room_view_id',
        'name',
        'description',
        'capacity',
        'base_price',
        // add other columns you created
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(RoomCategory::class, 'room_category_id');
    }
    public function view(): BelongsTo
    {
        return $this->belongsTo(RoomView::class, 'room_view_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(RoomImage::class);
    }

    // If rooms are linked to views via pivot `hotel_room_view`, use this instead or additionally:
    public function views(): BelongsToMany
    {
        return $this->belongsToMany(RoomView::class, 'hotel_room_view', 'room_id', 'room_view_id');
    }
}
