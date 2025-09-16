<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo,
    BelongsToMany,
    HasMany
};

class HotelRoom extends Model
{
    protected $table = 'hotel_rooms';

    protected $fillable = [
        'hotel_id',
        'room_type_id',
        'room_category_id',
        // 'occupancy_type_id', // uncomment if you add this FK
        'total_rooms',
        'base_occupancy',
        'max_occupancy',
    ];

    protected $casts = [
        'total_rooms'    => 'integer',
        'base_occupancy' => 'integer',
        'max_occupancy'  => 'integer',
    ];

    /* -------- Relationships -------- */

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function roomCategory(): BelongsTo
    {
        return $this->belongsTo(RoomCategory::class, 'room_category_id');
    }

    // If/when you create occupancy_types table:
    // public function occupancyType(): BelongsTo
    // {
    //     return $this->belongsTo(OccupancyType::class, 'occupancy_type_id');
    // }

    public function views(): BelongsToMany
    {
        // pivot: hotel_room_view (hotel_room_id, room_view_id)
        return $this->belongsToMany(RoomView::class, 'hotel_room_view', 'hotel_room_id', 'room_view_id');
    }

    public function ratePlans(): HasMany
    {
        return $this->hasMany(RatePlan::class, 'hotel_room_id');
    }

    public function images(): HasMany
    {
        // table: room_images, fk: hotel_room_id
        return $this->hasMany(RoomImage::class, 'hotel_room_id');
    }

    public function inventoryAdjustments(): HasMany
    {
        return $this->hasMany(RoomInventoryAdjustment::class, 'hotel_room_id');
    }

    /* -------- Scopes (optional) -------- */

    public function scopeForHotel($query, int $hotelId)
    {
        return $query->where('hotel_id', $hotelId);
    }

    public function scopeByVariant($query, int $roomTypeId, int $roomCategoryId)
    {
        return $query->where('room_type_id', $roomTypeId)
                     ->where('room_category_id', $roomCategoryId);
    }
}
