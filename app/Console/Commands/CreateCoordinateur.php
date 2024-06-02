<?php

// namespace App\Console\Commands;

// use Illuminate\Console\Command;

// class CreateCoordinateur extends Command
// {
//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected $signature = 'command:name';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected $description = 'Command description';

//     /**
//      * Execute the console command.
//      *
//      * @return int
//      */
//     public function handle()
//     {
//         return Command::SUCCESS;
//     }
// }




namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Coordinateur;
use Spatie\Permission\Models\Role;

class CreateCoordinateur extends Command
{
    protected $signature = 'create:coordinateur';
    protected $description = 'Create a new coordinateur and assign role';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $coordinateur = Coordinateur::create([
            'id_coordinateur' => 2,
            'nom_coordinateur' => ' coo2',
            'email_coordinateur' => 'coo2@example.com',
            'password_coordinateur' => 'coo2@example.com',
            // 'password_coordinateur' => bcrypt('password'),
        ]);

        $role = Role::findByName('coordinateur');
        $coordinateur->assignRole($role);

        $this->info('Coordinateur created and role assigned.');
    }
}
