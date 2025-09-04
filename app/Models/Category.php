<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'type',
    ];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_category', 'category_id', 'hotel_id');
    }
}
