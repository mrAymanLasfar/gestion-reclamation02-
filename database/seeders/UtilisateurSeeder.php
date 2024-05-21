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
            'name' => 'User04',
            'email' => 'user04@example.com',
            'password' => Hash::make('password04'),
        ]);

        
        if (\Spatie\Permission\Models\Role::where('name', 'coordinateur')->exists()) {
            $userAdmin->assignRole('coordinateur');
        } else {
            echo "Role 'coordinateur' does not exist.\n";
        }
    }
}
