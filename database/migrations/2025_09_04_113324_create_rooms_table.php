<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo,
    BelongsToMany,
    HasMany,
    HasManyThrough
};
use App\Models\{
    Hotel,
    RoomType,
    HotelRoom,
    RatePlan,
    RoomImage
};

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'room_type_id',
        'name',
        'description',
        'capacity_adults',
        'capacity_children',
    ];

    protected $casts = [
        'capacity_adults'   => 'integer',
        'capacity_children' => 'integer',
    ];

    /**
     * Room type (e.g., Deluxe, Suite…)
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    /**
     * Hotel-specific variants of this room
     * (inventory/pricing live on hotel_rooms).
     */
    public function hotelRooms(): HasMany
    {
        return $this->hasMany(HotelRoom::class, 'room_id');
    }

    /**
     * Hotels that offer this room (via hotel_rooms pivot-like table).
     */
    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'hotel_rooms', 'room_id', 'hotel_id');
    }

    /**
     * Rate plans available for this room across hotels (via hotel_rooms).
     */
    public function ratePlans(): HasManyThrough
    {
        return $this->hasManyThrough(
            RatePlan::class,   // target
            HotelRoom::class,  // through
            'room_id',         // FK on hotel_rooms referencing rooms.id
            'hotel_room_id',   // FK on rate_plans referencing hotel_rooms.id
            'id',              // local key on rooms
            'id'               // local key on hotel_rooms
        );
    }

    /**
     * Images attached to hotel-specific room variants (via hotel_rooms).
     * Only include if your room_images table uses hotel_room_id (as in your schema).
     */
    public function images(): HasManyThrough
    {
        return $this->hasManyThrough(
            RoomImage::class,  // target
            HotelRoom::class,  // through
            'room_id',         // FK on hotel_rooms referencing rooms.id
            'hotel_room_id',   // FK on room_images referencing hotel_rooms.id
            'id',              // local key on rooms
            'id'               // local key on hotel_rooms
        );
    }

    /**
     * Convenience accessor
     */
    public function getCapacityTotalAttribute(): int
    {
        return (int) $this->capacity_adults + (int) $this->capacity_children;
    }
}
