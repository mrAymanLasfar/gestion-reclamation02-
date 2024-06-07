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
            'name' => 'admin4',
            'email' => 'admin4@gmail.com',
            'password' => Hash::make('admin4@gmail.com'),
        ]);

        
        if (\Spatie\Permission\Models\Role::where('name', 'admin')->exists()) {
            $userAdmin->assignRole('admin');
        } else {
            echo "Role 'admin' does not exist.\n";
        }
    }
}
