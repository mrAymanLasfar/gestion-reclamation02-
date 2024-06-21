<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();



        $adminPermissions = [
            'dashboardadmin',
            'equipes.index', 'equipes.create', 'equipes.store', 'equipes.show', 'equipes.edit', 'equipes.update', 'equipes.destroy', 'creerequipe',
            'coordinateurs.index', 'coordinateurs.create', 'coordinateurs.store', 'coordinateurs.show', 'coordinateurs.edit', 'coordinateurs.update', 'coordinateurs.destroy', 'creercoordinateur',
            'dashboardcoordinateur',
            'operateurs.index', 'operateurs.create', 'operateurs.store', 'operateurs.show', 'operateurs.edit', 'operateurs.update', 'operateurs.destroy', 'creeroperateur',
            'superviseurs.index', 'superviseurs.create', 'superviseurs.store', 'superviseurs.show', 'superviseurs.edit', 'superviseurs.update', 'superviseurs.destroy', 'creersuperviseur',
            'dashboardoperateur',
            'reclamations.index', 'reclamations.create', 'reclamations.store', 'reclamations.show', 'reclamations.edit', 'reclamations.update', 'reclamations.destroy', 'creerreclamation',
            'conversations.index', 'conversations.create', 'conversations.store', 'conversations.show', 'conversations.edit', 'conversations.update', 'conversations.destroy', 'creerconversation',
            'messages.index', 'messages.create', 'messages.store', 'messages.show', 'messages.edit', 'messages.update', 'messages.destroy', 'creermessage',
            'dashboardsuperviseur',
            'messagescree.index', 'messagescree.show', 'messagescree.destroy', 'MessagesCree',
        ];

        $coordinateurPermissions = [
            'dashboardcoordinateur',
            'operateurs.index', 'operateurs.create', 'operateurs.store', 'operateurs.show', 'operateurs.edit', 'operateurs.update', 'operateurs.destroy', 'creeroperateur',
            'superviseurs.index', 'superviseurs.create', 'superviseurs.store', 'superviseurs.show', 'superviseurs.edit', 'superviseurs.update', 'superviseurs.destroy', 'creersuperviseur',
        ];

        $superviseurPermissions = [
            'dashboardsuperviseur',
            'messagescree.index', 'messagescree.show', 'messagescree.destroy', 'MessagesCree',
        ];

        $operateurPermissions = [
            'dashboardoperateur',
            'reclamations.index', 'reclamations.create', 'reclamations.store', 'reclamations.show', 'reclamations.edit', 'reclamations.update', 'reclamations.destroy', 'creerreclamation',
            'conversations.index', 'conversations.create', 'conversations.store', 'conversations.show', 'conversations.edit', 'conversations.update', 'conversations.destroy', 'creerconversation',
            'messages.index', 'messages.create', 'messages.store', 'messages.show', 'messages.edit', 'messages.update', 'messages.destroy', 'creermessage',
        ];

        // Assign permissions to roles
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->syncPermissions($adminPermissions);

        $coordinateurRole = Role::where('name', 'coordinateur')->first();
        $coordinateurRole->syncPermissions($coordinateurPermissions);

        $superviseurRole = Role::where('name', 'superviseur')->first();
        $superviseurRole->syncPermissions($superviseurPermissions);

        $operateurRole = Role::where('name', 'operateur')->first();
        $operateurRole->syncPermissions($operateurPermissions);


    }
}
