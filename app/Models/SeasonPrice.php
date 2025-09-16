<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeasonPrice extends Model
{
    protected $fillable = ['season_id','rate_plan_id','price'];
    public function season(): BelongsTo { return $this->belongsTo(Season::class); }
    public function ratePlan(): BelongsTo { return $this->belongsTo(RatePlan::class, 'rate_plan_id'); }
}
