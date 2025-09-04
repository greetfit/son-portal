<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_type_id';

    protected $fillable = [
        'code',
        'description',
    ];

    // If you want the relationship from Room to RoomType:
    // public function rooms() {
    //     return $this->hasMany(Room::class, 'room_type_id', 'room_type_id');
    // }
}
