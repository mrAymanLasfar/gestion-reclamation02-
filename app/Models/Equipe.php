<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{

    use HasFactory;

    protected $fillable = [     	 	 	 	 	
        'id_equipe',
        'nom_equipe',
        'nombre_maximal_users',
        'created_at',
        'updated_at',
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function postCreator()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }


}
