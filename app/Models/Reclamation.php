<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = ['nom_reclamations'];

    protected $table = 'reclamations';

    // If the primary key is not 'id', specify it
    protected $primaryKey = 'id'; 

    // If the primary key is not auto-incrementing, specify it
    public $incrementing = true;

    // If the primary key is not an integer, specify it
    protected $keyType = 'int';



public function conversation()
{
    return $this->hasMany(Conversation::class);
}

public function message()
{
    return $this->hasManyThrough(Message::class, Conversation::class);
}
}
