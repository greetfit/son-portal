<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        // if you decide to add first_name/last_name later, include them here
            'name','email','password','role_id','is_active',

    ];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            // 'is_active' => 'boolean',
        ];
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    // ---- helpers (role by name) ----
    public function isSuperAdmin(): bool
    {
        return ($this->role?->name) === 'super_admin';
    }

    /**
     * Check by role NAME(s). Example: hasRole('Admin') or hasRole(['Admin','Staff'])
     */
    public function hasRole(string|array ...$roles): bool
    {
        $roles = collect($roles)->flatten()->map(fn($r) => (string)$r)->all();
        return in_array($this->role?->name, $roles, true);
    }
}