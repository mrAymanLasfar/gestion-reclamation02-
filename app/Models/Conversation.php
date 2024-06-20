<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;


     		 	 	
    protected $fillable = [     
        	 	 	 	 	
        'id',
        'nom_equipe',
        'id_reclamation',
        'nom_conversations',
        'created_at',
        'updated_at',
    ];
 
    protected $primaryKey = 'id';

    protected $keyType = 'int';

    public $incrementing = true;


    
public function reclamation()
{
    return $this->belongsTo(Reclamation::class, 'id_reclamation');
}

public function message()
{
    return $this->hasMany(Message::class);
}
}
