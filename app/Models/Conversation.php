<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    
public function reclamation()
{
    return $this->belongsTo(Reclamation::class, 'id_reclamation');
}

public function massage()
{
    return $this->hasMany(Message::class);
}
}
