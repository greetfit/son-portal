<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promotion extends Model
{
    protected $fillable = [
        'hotel_id','name','code','discount_type','discount_value',
        'starts_on','ends_on','is_active',
    ];
    protected $casts = [
        'starts_on'=>'date', 'ends_on'=>'date', 'is_active'=>'boolean',
    ];

    public function hotel(): BelongsTo { return $this->belongsTo(Hotel::class); }
}
