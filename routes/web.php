<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Mail\Testmail;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\SuperviseurController;
use App\Http\Controllers\CoordinateurController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessageCreeController;
use App\Models\User;
use App\Models\Equipe;
use App\Models\Coordinateur;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\ReclamationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware(['auth', 'user.redirect'])->group(function () {
    Route::get('/dashboardadmin', function () {
        return view('admin.dashboardadmin');
    })->middleware('permission:dashboardadmin')->name('dashboardadmin');

    Route::get('/dashboardcoordinateur', function () {
        return view('coordinateurs.dashboardcoordinateur');
    })->middleware('permission:dashboardcoordinateur')->name('dashboardcoordinateur');

    Route::get('/dashboardsuperviseur', [MessageCreeController::class, 'dashboardSuperviseur'])->middleware('permission:dashboardsuperviseur')->name('dashboardsuperviseur');

    Route::get('/dashboardoperateur', function () {
        return view('operateurs.dashboardoperateur');
    })->middleware('permission:dashboardoperateur')->name('dashboardoperateur');
});






// Routes for authenticated and verified users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});








// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('dashboardadmin', function () {
//         return view('admin.dashboardadmin');
//     })->name('dashboardadmin');
// });



// Route::middleware(['auth', 'coordinateur'])->group(function () {
//     Route::get('dashboardcoordinateur', function () {
//         return view('coordinateurs.dashboardcoordinateur');
//     })->name('dashboardcoordinateur');
// });



//test
// Route::get('/test-role-assignment', function () {
//     $user = User::create([
//         'name' => 'testuser',
//         'email' => 'testuser@example.com',
//         'password' => bcrypt('password'),
//     ]);
//     $role = \Spatie\Permission\Models\Role::findByName('operateur');
//     $user->assignRole($role);
//     return 'Role assigned: ' . implode(', ', $user->getRoleNames()->toArray());
// });





// Route::get('/equipes', [EquipeController::class, 'index'])->name('equipes.index');
// Route::get('/equipes/create', [EquipeController::class, 'create'])->name('equipes.create');
// Route::post('/equipes', [EquipeController::class, 'store'])->name('equipes.store');
// Route::get('/equipes/{equipe}', [EquipeController::class, 'show'])->name('equipes.show');
// Route::get('/equipes/{equipe}/edit', [EquipeController::class, 'edit'])->name('equipes.edit');
// Route::put('/equipes/{equipe}', [EquipeController::class, 'update'])->name('equipes.update');
// Route::delete('/equipes/{equipe}', [EquipeController::class, 'destroy'])->name('equipes.destroy');

// Route::get('/creerequipe', [EquipeController::class, 'createEquipe'])->name('creerequipe');

Route::get('/equipes', [EquipeController::class, 'index'])
    ->middleware('permission:equipes.index')
    ->name('equipes.index');

Route::get('/equipes/create', [EquipeController::class, 'create'])
    ->middleware('permission:equipes.create')
    ->name('equipes.create');

Route::post('/equipes', [EquipeController::class, 'store'])
    ->middleware('permission:equipes.store')
    ->name('equipes.store');

Route::get('/equipes/{equipe}', [EquipeController::class, 'show'])
    ->middleware('permission:equipes.show')
    ->name('equipes.show');

Route::get('/equipes/{equipe}/edit', [EquipeController::class, 'edit'])
    ->middleware('permission:equipes.edit')
    ->name('equipes.edit');

Route::put('/equipes/{equipe}', [EquipeController::class, 'update'])
    ->middleware('permission:equipes.update')
    ->name('equipes.update');

Route::delete('/equipes/{equipe}', [EquipeController::class, 'destroy'])
    ->middleware('permission:equipes.destroy')
    ->name('equipes.destroy');

Route::get('/creerequipe', [EquipeController::class, 'createEquipe'])
    ->middleware('permission:creerequipe')
    ->name('creerequipe');




// Route::get('/coordinateurs', [CoordinateurController::class, 'index'])->name('coordinateurs.index');
// Route::get('/coordinateurs/create', [CoordinateurController::class, 'create'])->name('coordinateurs.create');
// Route::post('/coordinateurs', [CoordinateurController::class, 'store'])->name('coordinateurs.store');
// Route::get('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'show'])->name('coordinateurs.show');
// Route::get('/coordinateurs/{coordinateur}/edit', [CoordinateurController::class, 'edit'])->name('coordinateurs.edit');
// Route::put('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'update'])->name('coordinateurs.update');
// Route::delete('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'destroy'])->name('coordinateurs.destroy');

// Route::get('/creercoordinateur', [CoordinateurController::class, 'createCoordinateur'])->name('creercoordinateur');

Route::get('/coordinateurs', [CoordinateurController::class, 'index'])
    ->middleware('permission:coordinateurs.index')
    ->name('coordinateurs.index');

Route::get('/coordinateurs/create', [CoordinateurController::class, 'create'])
    ->middleware('permission:coordinateurs.create')
    ->name('coordinateurs.create');

Route::post('/coordinateurs', [CoordinateurController::class, 'store'])
    ->middleware('permission:coordinateurs.store')
    ->name('coordinateurs.store');

Route::get('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'show'])
    ->middleware('permission:coordinateurs.show')
    ->name('coordinateurs.show');

Route::get('/coordinateurs/{coordinateur}/edit', [CoordinateurController::class, 'edit'])
    ->middleware('permission:coordinateurs.edit')
    ->name('coordinateurs.edit');

Route::put('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'update'])
    ->middleware('permission:coordinateurs.update')
    ->name('coordinateurs.update');

Route::delete('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'destroy'])
    ->middleware('permission:coordinateurs.destroy')
    ->name('coordinateurs.destroy');

Route::get('/creercoordinateur', [CoordinateurController::class, 'createCoordinateur'])
    ->middleware('permission:creercoordinateur')
    ->name('creercoordinateur');




// Route::get('/operateurs', [OperateurController::class, 'index'])->name('operateurs.index');
// Route::get('/operateurs/create', [OperateurController::class, 'create'])->name('operateurs.create');
// Route::post('/operateurs', [OperateurController::class, 'store'])->name('operateurs.store');
// Route::get('/operateurs/{operateur}', [OperateurController::class, 'show'])->name('operateurs.show');
// Route::get('/operateurs/{operateur}/edit', [OperateurController::class, 'edit'])->name('operateurs.edit');
// Route::put('/operateurs/{operateur}', [OperateurController::class, 'update'])->name('operateurs.update');
// Route::delete('/operateurs/{operateur}', [OperateurController::class, 'destroy'])->name('operateurs.destroy');

// Route::get('/creeroperateur', [OperateurController::class, 'createOperateur'])->name('creeroperateur');

Route::get('/operateurs', [OperateurController::class, 'index'])
    ->middleware('permission:operateurs.index')
    ->name('operateurs.index');

Route::get('/operateurs/create', [OperateurController::class, 'create'])
    ->middleware('permission:operateurs.create')
    ->name('operateurs.create');

Route::post('/operateurs', [OperateurController::class, 'store'])
    ->middleware('permission:operateurs.store')
    ->name('operateurs.store');

Route::get('/operateurs/{operateur}', [OperateurController::class, 'show'])
    ->middleware('permission:operateurs.show')
    ->name('operateurs.show');

Route::get('/operateurs/{operateur}/edit', [OperateurController::class, 'edit'])
    ->middleware('permission:operateurs.edit')
    ->name('operateurs.edit');

Route::put('/operateurs/{operateur}', [OperateurController::class, 'update'])
    ->middleware('permission:operateurs.update')
    ->name('operateurs.update');

Route::delete('/operateurs/{operateur}', [OperateurController::class, 'destroy'])
    ->middleware('permission:operateurs.destroy')
    ->name('operateurs.destroy');

Route::get('/creeroperateur', [OperateurController::class, 'createOperateur'])
    ->middleware('permission:creeroperateur')
    ->name('creeroperateur');




// Route::get('/superviseurs', [SuperviseurController::class, 'index'])->name('superviseurs.index');
// Route::get('/superviseurs/create', [SuperviseurController::class, 'create'])->name('superviseurs.create');
// Route::post('/superviseurs', [SuperviseurController::class, 'store'])->name('superviseurs.store');
// Route::get('/superviseurs/{superviseur}', [SuperviseurController::class, 'show'])->name('superviseurs.show');
// Route::get('/superviseurs/{superviseur}/edit', [SuperviseurController::class, 'edit'])->name('superviseurs.edit');
// Route::put('/superviseurs/{superviseur}', [SuperviseurController::class, 'update'])->name('superviseurs.update');
// Route::delete('/superviseurs/{superviseur}', [SuperviseurController::class, 'destroy'])->name('superviseurs.destroy');

// Route::get('/creersuperviseur', [SuperviseurController::class, 'createSuperviseur'])->name('creersuperviseur');


Route::get('/superviseurs', [SuperviseurController::class, 'index'])
    ->middleware('permission:superviseurs.index')
    ->name('superviseurs.index');

Route::get('/superviseurs/create', [SuperviseurController::class, 'create'])
    ->middleware('permission:superviseurs.create')
    ->name('superviseurs.create');

Route::post('/superviseurs', [SuperviseurController::class, 'store'])
    ->middleware('permission:superviseurs.store')
    ->name('superviseurs.store');

Route::get('/superviseurs/{superviseur}', [SuperviseurController::class, 'show'])
    ->middleware('permission:superviseurs.show')
    ->name('superviseurs.show');

Route::get('/superviseurs/{superviseur}/edit', [SuperviseurController::class, 'edit'])
    ->middleware('permission:superviseurs.edit')
    ->name('superviseurs.edit');

Route::put('/superviseurs/{superviseur}', [SuperviseurController::class, 'update'])
    ->middleware('permission:superviseurs.update')
    ->name('superviseurs.update');

Route::delete('/superviseurs/{superviseur}', [SuperviseurController::class, 'destroy'])
    ->middleware('permission:superviseurs.destroy')
    ->name('superviseurs.destroy');

Route::get('/creersuperviseur', [SuperviseurController::class, 'createSuperviseur'])
    ->middleware('permission:creersuperviseur')
    ->name('creersuperviseur');






// Route::get('/reclamations', [ReclamationController::class, 'index'])->name('reclamations.index');
// Route::get('/reclamations/create', [ReclamationController::class, 'create'])->name('reclamations.create');
// Route::post('/reclamations', [ReclamationController::class, 'store'])->name('reclamations.store');
// Route::get('/reclamations/{reclamation}', [ReclamationController::class, 'show'])->name('reclamations.show');
// Route::get('/reclamations/{reclamation}/edit', [ReclamationController::class, 'edit'])->name('reclamations.edit');
// Route::put('/reclamations/{reclamation}', [ReclamationController::class, 'update'])->name('reclamations.update');
// Route::delete('/reclamations/{reclamation}', [ReclamationController::class, 'destroy'])->name('reclamations.destroy');

// Route::get('/creerreclamation', [ReclamationController::class, 'createReclamation'])->name('creerreclamation');





Route::get('/reclamations', [ReclamationController::class, 'index'])
    ->middleware('permission:reclamations.index')
    ->name('reclamations.index');

Route::get('/reclamations/create', [ReclamationController::class, 'create'])
    ->middleware('permission:reclamations.create')
    ->name('reclamations.create');

Route::post('/reclamations', [ReclamationController::class, 'store'])
    ->middleware('permission:reclamations.store')
    ->name('reclamations.store');

Route::get('/reclamations/{reclamation}', [ReclamationController::class, 'show'])
    ->middleware('permission:reclamations.show')
    ->name('reclamations.show');

Route::get('/reclamations/{reclamation}/edit', [ReclamationController::class, 'edit'])
    ->middleware('permission:reclamations.edit')
    ->name('reclamations.edit');

Route::put('/reclamations/{reclamation}', [ReclamationController::class, 'update'])
    ->middleware('permission:reclamations.update')
    ->name('reclamations.update');

Route::delete('/reclamations/{reclamation}', [ReclamationController::class, 'destroy'])
    ->middleware('permission:reclamations.destroy')
    ->name('reclamations.destroy');

Route::get('/creerreclamation', [ReclamationController::class, 'createReclamation'])
    ->middleware('permission:creerreclamation')
    ->name('creerreclamation');







// Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
// Route::get('/conversations/create', [ConversationController::class, 'create'])->name('conversations.create');
// Route::post('/conversations', [ConversationController::class, 'store'])->name('conversations.store');
// Route::get('/conversations/{conversation}', [ConversationController::class, 'show'])->name('conversations.show');
// Route::get('/conversations/{conversation}/edit', [ConversationController::class, 'edit'])->name('conversations.edit');
// Route::put('/conversations/{conversation}', [ConversationController::class, 'update'])->name('conversations.update');
// Route::delete('/conversations/{conversation}', [ConversationController::class, 'destroy'])->name('conversations.destroy');

// Route::get('/creerconversation', [ConversationController::class, 'createConversation'])->name('creerconversation');

Route::get('/conversations', [ConversationController::class, 'index'])
    ->middleware('permission:conversations.index')
    ->name('conversations.index');

Route::get('/conversations/create', [ConversationController::class, 'create'])
    ->middleware('permission:conversations.create')
    ->name('conversations.create');

Route::post('/conversations', [ConversationController::class, 'store'])
    ->middleware('permission:conversations.store')
    ->name('conversations.store');

Route::get('/conversations/{conversation}', [ConversationController::class, 'show'])
    ->middleware('permission:conversations.show')
    ->name('conversations.show');

Route::get('/conversations/{conversation}/edit', [ConversationController::class, 'edit'])
    ->middleware('permission:conversations.edit')
    ->name('conversations.edit');

Route::put('/conversations/{conversation}', [ConversationController::class, 'update'])
    ->middleware('permission:conversations.update')
    ->name('conversations.update');

Route::delete('/conversations/{conversation}', [ConversationController::class, 'destroy'])
    ->middleware('permission:conversations.destroy')
    ->name('conversations.destroy');

Route::get('/creerconversation', [ConversationController::class, 'createConversation'])
    ->middleware('permission:creerconversation')
    ->name('creerconversation');







// Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
// Route::get('/messages/create', [MessageController::class, 'create'])->name('messages.create');
// Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
// Route::get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');
// Route::get('/messages/{message}/edit', [MessageController::class, 'edit'])->name('messages.edit');
// Route::put('/messages/{message}', [MessageController::class, 'update'])->name('messages.update');
// Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

// Route::get('/creermessage', [MessageController::class, 'createMessage'])->name('creermessage');


Route::get('/messages', [MessageController::class, 'index'])
    ->middleware('permission:messages.index')
    ->name('messages.index');

Route::get('/messages/create', [MessageController::class, 'create'])
    ->middleware('permission:messages.create')
    ->name('messages.create');

Route::post('/messages', [MessageController::class, 'store'])
    ->middleware('permission:messages.store')
    ->name('messages.store');

Route::get('/messages/{message}', [MessageController::class, 'show'])
    ->middleware('permission:messages.show')
    ->name('messages.show');

Route::get('/messages/{message}/edit', [MessageController::class, 'edit'])
    ->middleware('permission:messages.edit')
    ->name('messages.edit');

Route::put('/messages/{message}', [MessageController::class, 'update'])
    ->middleware('permission:messages.update')
    ->name('messages.update');

Route::delete('/messages/{message}', [MessageController::class, 'destroy'])
    ->middleware('permission:messages.destroy')
    ->name('messages.destroy');

Route::get('/creermessage', [MessageController::class, 'createMessage'])
    ->middleware('permission:creermessage')
    ->name('creermessage');





// Route::get('/messagescree', [MessageCreeController::class, 'index'])->name('messagescree.index');
// Route::get('/messagescree/{message}', [MessageCreeController::class, 'show'])->name('messagescree.show');
// Route::delete('/messagescree/{message}', [MessageCreeController::class, 'destroy'])->name('messagescree.destroy');

// Route::get('/MessagesCree', [MessageCreeController::class, 'MessagesCree'])->name('MessagesCree');

Route::get('/messagescree', [MessageCreeController::class, 'index'])
    ->middleware('permission:messagescree.index')
    ->name('messagescree.index');

Route::get('/messagescree/{message}', [MessageCreeController::class, 'show'])
    ->middleware('permission:messagescree.show')
    ->name('messagescree.show');

Route::delete('/messagescree/{message}', [MessageCreeController::class, 'destroy'])
    ->middleware('permission:messagescree.destroy')
    ->name('messagescree.destroy');

Route::get('/MessagesCree', [MessageCreeController::class, 'MessagesCree'])
    ->middleware('permission:MessagesCree')
    ->name('MessagesCree');








// Route::prefix('superviseur')->group(function () {
//     Route::get('/traiterreclamation', [SuperviseurController::class, 'traiterreclamation']);
// });












Route::get('/test00', function () {
Mail::to('02012004.al@gmail.com')->send(new Testmail);
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
$user = User::find(1);
if ($user->hasRole('admin')) {
    echo 'User is an admin';
} else {
    echo 'User is not an admin';
}
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
