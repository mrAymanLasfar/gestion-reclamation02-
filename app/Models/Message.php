<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [     
        	 			
        'id',
        'contenu_du_message',
        'id_conversation',
        'nom_conversations',
        'id_reclamation',
        'nom_reclamations',
        'created_at',
        'updated_at',
    ];
 
    protected $primaryKey = 'id';

    protected $keyType = 'int';

    public $incrementing = true;
    

    public function conversation()
{
    return $this->belongsTo(Conversation::class, 'id_conversation');
}
}
