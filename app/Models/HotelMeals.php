<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HotelMeals extends Model
{
    // Pivot table name
    protected $table = 'hotel_meal_plan';

    // We used `$t->id()` in the migration, so PK is "id"
    protected $primaryKey = 'id';

    // No timestamps on the pivot (unless you added them)
    public $timestamps = false;

    protected $fillable = [
        'hotel_id',
        'meal_plan_id',
    ];

    /* Relationships */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function mealPlan(): BelongsTo
    {
        return $this->belongsTo(MealPlan::class, 'meal_plan_id');
    }

    /* Optional scopes */
    public function scopeForHotel($query, int $hotelId)
    {
        return $query->where('hotel_id', $hotelId);
    }

    public function scopeForMealPlan($query, int $mealPlanId)
    {
        return $query->where('meal_plan_id', $mealPlanId);
    }
}
