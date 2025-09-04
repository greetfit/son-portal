<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    use HasFactory;

    protected $primaryKey = 'meal_plan_id';

    protected $fillable = [
        'code',
        'description',
    ];

    // If you want the reverse relation from Room:
    // public function rooms() {
    //     return $this->hasMany(Room::class, 'meal_plan_id', 'meal_plan_id');
    // }
}
