<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $primaryKey = 'hotel_id';

    protected $fillable = [
        'name',
        'category_notes',
        'city',
        'address',
        'phone',
        'email',
        'account_manager',
        'is_active',
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
}
