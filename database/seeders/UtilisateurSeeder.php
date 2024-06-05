<?php

// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use    \App\Models\User;
// class UtilisateurSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         $userAdmin = User::factory()->create([
//                  'name' => 'User1',
//                  'email' => 'test1@example.com',
//                  'password' => 'test@example.com',
//              ]);
// $userAdmin->assignRole('admin') ;
//     }
// }



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin = User::factory()->create([
            'name' => 'operateur3',
            'email' => 'operateur3@gmail.com',
            'password' => Hash::make('operateur3@gmail.com'),
        ]);

        
        if (\Spatie\Permission\Models\Role::where('name', 'operateur')->exists()) {
            $userAdmin->assignRole('operateur');
        } else {
            echo "Role 'operateur' does not exist.\n";
        }
    }
}
