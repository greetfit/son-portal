<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class RatePlan extends Model
{
    protected $fillable = [
        'hotel_id','room_type_id','meal_plan_id',
        'name','code','base_rate','is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    public function hotel(): BelongsTo { return $this->belongsTo(Hotel::class); }
    public function roomType(): BelongsTo { return $this->belongsTo(RoomType::class, 'room_type_id'); }
    public function mealPlan(): BelongsTo { return $this->belongsTo(MealPlan::class, 'meal_plan_id'); }

    public function seasonPrices(): HasMany { return $this->hasMany(SeasonPrice::class); }
}
