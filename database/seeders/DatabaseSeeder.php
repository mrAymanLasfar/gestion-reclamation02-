<?php

// namespace Database\Seeders;

// // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Seed the application's database.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         // \App\Models\User::factory(10)->create();

//         // \App\Models\User::factory()->create([
//         //     'name' => 'Test User',
//         //     'email' => 'test@example.com',
//         // ]);
//     }
// }


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $userAdmin = User::factory()->create([
    //         'name' => 'User1',
    //         'email' => 'test1@example.com',
    //         'password' => Hash::make('test@example.com'), // Ensure the password is hashed
    //     ]);

    //     // Ensure roles are created before assignment
    //     if (\Spatie\Permission\Models\Role::where('name', 'admin')->exists()) {
    //         $userAdmin->assignRole('admin');
    //     } else {
    //         echo "Role 'admin' does not exist.\n";
    //     }
    // }

    public function run()
    {
        $this->call([
            SeederRole::class,
            UtilisateurSeeder::class,
        ]);
    }

}
