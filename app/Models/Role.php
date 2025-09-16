<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    protected $table = 'roles';
    // REMOVE any old: protected $primaryKey = 'role_id';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['name'];

    public function users()
    {
        // FK on users = role_id ; owner key on roles = id
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
