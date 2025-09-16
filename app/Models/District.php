<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    protected $table = 'districts';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'province_id', 'name_en', 'name_si', 'name_ta',
    ];

    public function cities(): HasMany { return $this->hasMany(City::class); }
    public function hotels(): HasMany { return $this->hasMany(Hotel::class); }

}
