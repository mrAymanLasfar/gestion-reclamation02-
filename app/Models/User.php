<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class);
    // }

    // public function roles()
    // {
    //     return $this->morphToMany(Role::class, 'model', 'model_has_roles', 'model_id', 'role_id');
    // }



    // public function hasRole($role)
    // {
    //     // Assuming you have a 'role' column in your users table
    //     // Adjust the logic if roles are stored differently (e.g., many-to-many relationship)
    //     return $this->role === $role;
    // }


    
    // public function hasRole($role)
    // {
    //     return $this->roles()->where('name', $role)->exists();
    // }
}
