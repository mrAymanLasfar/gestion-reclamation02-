<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;

public function conversation()
{
    return $this->hasMany(Conversation::class);
}

public function message()
{
    return $this->hasManyThrough(Message::class, Conversation::class);
}
}
