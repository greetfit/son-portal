<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $primaryKey = 'amenity_id';

    protected $fillable = [
        'name',
        'category',
    ];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_amenity', 'amenity_id', 'hotel_id');
    }
}
