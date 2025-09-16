<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};

class Season extends Model
{
    protected $fillable = ['hotel_id','name','starts_on','ends_on'];
    protected $casts = ['starts_on'=>'date', 'ends_on'=>'date'];

    public function hotel(): BelongsTo { return $this->belongsTo(Hotel::class); }
    public function prices(): HasMany { return $this->hasMany(SeasonPrice::class); }
}
