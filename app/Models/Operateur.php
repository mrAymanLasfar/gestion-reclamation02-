<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles; // Import the HasRoles trait


class Operateur extends Model
{
    use HasFactory, HasRoles; // Use the HasRoles trait

    protected $fillable = [     
        'id_operateur',
        'nom_operateur',
        'email_operateur',
        'password_operateur',
        'created_at',
    ];
 
    protected $primaryKey = 'id_operateur';

    protected $keyType = 'int';

    public $incrementing = true;


    protected $guard_name = 'web';
}
