<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeederPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 // Admin permissions
 $permission = Permission::create(['name' => 'dashboardadmin']);
 $permission = Permission::create(['name' => 'equipes.index']);
 $permission = Permission::create(['name' => 'equipes.create']);
 $permission = Permission::create(['name' => 'equipes.store']);
 $permission = Permission::create(['name' => 'equipes.show']);
 $permission = Permission::create(['name' => 'equipes.edit']);
 $permission = Permission::create(['name' => 'equipes.update']);
 $permission = Permission::create(['name' => 'equipes.destroy']);
 $permission = Permission::create(['name' => 'creerequipe']);

 $permission = Permission::create(['name' => 'coordinateurs.index']);
 $permission = Permission::create(['name' => 'coordinateurs.create']);
 $permission = Permission::create(['name' => 'coordinateurs.store']);
 $permission = Permission::create(['name' => 'coordinateurs.show']);
 $permission = Permission::create(['name' => 'coordinateurs.edit']);
 $permission = Permission::create(['name' => 'coordinateurs.update']);
 $permission = Permission::create(['name' => 'coordinateurs.destroy']);
 $permission = Permission::create(['name' => 'creercoordinateur']);

 // Coordinateur permissions
 
 $permission = Permission::create(['name' => 'dashboardcoordinateur']);
 $permission = Permission::create(['name' => 'operateurs.index']);
 $permission = Permission::create(['name' => 'operateurs.create']);
 $permission = Permission::create(['name' => 'operateurs.store']);
 $permission = Permission::create(['name' => 'operateurs.show']);
 $permission = Permission::create(['name' => 'operateurs.edit']);
 $permission = Permission::create(['name' => 'operateurs.update']);
 $permission = Permission::create(['name' => 'operateurs.destroy']);
 $permission = Permission::create(['name' => 'creeroperateur']);


 $permission = Permission::create(['name' => 'superviseurs.index']);
 $permission = Permission::create(['name' => 'superviseurs.create']);
 $permission = Permission::create(['name' => 'superviseurs.store']);
 $permission = Permission::create(['name' => 'superviseurs.show']);
 $permission = Permission::create(['name' => 'superviseurs.edit']);
 $permission = Permission::create(['name' => 'superviseurs.update']);
 $permission = Permission::create(['name' => 'superviseurs.destroy']);
 $permission = Permission::create(['name' => 'creersuperviseur']);



 // operateur permissions
 $permission = Permission::create(['name' => 'dashboardoperateur']);

 $permission = Permission::create(['name' => 'reclamations.index']);
 $permission = Permission::create(['name' => 'reclamations.create']);
 $permission = Permission::create(['name' => 'reclamations.store']);
 $permission = Permission::create(['name' => 'reclamations.show']);
 $permission = Permission::create(['name' => 'reclamations.edit']);
 $permission = Permission::create(['name' => 'reclamations.update']);
 $permission = Permission::create(['name' => 'reclamations.destroy']);
 $permission = Permission::create(['name' => 'creerreclamation']);

 $permission = Permission::create(['name' => 'conversations.index']);
 $permission = Permission::create(['name' => 'conversations.create']);
 $permission = Permission::create(['name' => 'conversations.store']);
 $permission = Permission::create(['name' => 'conversations.show']);
 $permission = Permission::create(['name' => 'conversations.edit']);
 $permission = Permission::create(['name' => 'conversations.update']);
 $permission = Permission::create(['name' => 'conversations.destroy']);
 $permission = Permission::create(['name' => 'creerconversation']);

 $permission = Permission::create(['name' => 'messages.index']);
 $permission = Permission::create(['name' => 'messages.create']);
 $permission = Permission::create(['name' => 'messages.store']);
 $permission = Permission::create(['name' => 'messages.show']);
 $permission = Permission::create(['name' => 'messages.edit']);
 $permission = Permission::create(['name' => 'messages.update']);
 $permission = Permission::create(['name' => 'messages.destroy']);
 $permission = Permission::create(['name' => 'creermessage']);



// superviseur permissions
 $permission = Permission::create(['name' => 'dashboardsuperviseur']);
 $permission = Permission::create(['name' => 'messagescree.index']);
 $permission = Permission::create(['name' => 'messagescree.show']);
 $permission = Permission::create(['name' => 'messagescree.destroy']);
 $permission = Permission::create(['name' => 'MessagesCree']);
        
    }
}





