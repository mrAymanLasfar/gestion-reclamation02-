<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Coordinateur extends Model
// {
//     use HasFactory;

//     protected $fillable = [     
        	 	 	 	 	
//         'id_coordinateur',
//         'nom_coordinateur',
//         'email_coordinateur',
//         'password_coordinateur',
//         'created_at',
//     ];
 
//     protected $primaryKey = 'id_coordinateur';

//     protected $keyType = 'int';

//     public $incrementing = true;

//     // public function user()
//     // {
//     //     return $this->belongsTo(User::class);
//     // }

//     // public function postCreator()
//     // {
//     //     return $this->belongsTo(User::class, 'user_id');
//     // }
// }




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles; // Import the HasRoles trait

class Coordinateur extends Model
{
    use HasFactory, HasRoles; // Use the HasRoles trait

    protected $fillable = [     
        'id_coordinateur',
        'nom_coordinateur',
        'email_coordinateur',
        'password_coordinateur',
        'created_at',
    ];
 
    protected $primaryKey = 'id_coordinateur';

    protected $keyType = 'int';

    public $incrementing = true;


    protected $guard_name = 'web';
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function postCreator()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
