<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany, BelongsToMany};


class Hotel extends Model
{
    use HasFactory;

    protected $primaryKey = 'hotel_id';

    protected $fillable = [
        'name',
        'note',
        'address',
        'phone',
        'email',
        'website',
        'district_id',
        'city_id',
        'featured_image',
        'account_manager',
        'is_active'
    ];

    // Relationships
    public function manager()
    {
        return $this->belongsTo(User::class, 'account_manager');
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'hotel_amenity', 'hotel_id', 'amenity_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'hotel_category', 'hotel_id', 'category_id');
    }


    // Helper to get a full URL for the featured image
    public function getFeaturedImageUrlAttribute(): ?string
    {
        return $this->featured_image ? asset('storage/' . $this->featured_image) : null;
    }
    // Locations
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    // Rooms & Images
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
    public function images(): HasMany
    {
        return $this->hasMany(HotelImage::class);
    }
    public function mealPlans(): BelongsToMany
    {
        return $this->belongsToMany(MealPlan::class, 'hotel_meal_plan', 'hotel_id', 'meal_plan_id');
        // ->withTimestamps(); // if you added timestamps on the pivot
    }
}
