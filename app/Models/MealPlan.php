<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MealPlan extends Model
{
    protected $fillable = ['name', 'code', 'description'];

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'hotel_meal_plan', 'meal_plan_id', 'hotel_id');
        // ->withTimestamps(); // if you added timestamps on the pivot
    }
}
