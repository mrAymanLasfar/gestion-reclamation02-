<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Mail\Testmail;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\OperateurController;
use App\Http\Controllers\SuperviseurController;
use App\Http\Controllers\CoordinateurController;
use App\Models\User;
use App\Models\Equipe;
use App\Models\Coordinateur;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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




// Routes for admin users
Route::middleware(['auth', 'admin.redirect'])->group(function () {
    Route::get('/dashboardadmin', function () {
        return view('admin.dashboardadmin');
    })->name('dashboardadmin');
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



Route::middleware(['auth', 'coordinateur'])->group(function () {
    Route::get('dashboardcoordinateur', function () {
        return view('coordinateurs.dashboardcoordinateur');
    })->name('dashboardcoordinateur');
});



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





// Route::get('/equipes',[EquipeController::class, 'index'])->name('equipes.index');

// Route::get('/equipes/create', [EquipeController::class, 'create'])->name('equipes.create');

// Route::post('/equipes', [EquipeController::class, 'store'])->name('equipes.store');

// Route::get('/equipes/{equipe}', [EquipeController::class, 'show'])->name('equipes.show');

// Route::get('/equipes/{equipe}/edit', [EquipeController::class, 'edit'])->name('equipes.edit');

// Route::put('/equipes/{equipe}', [EquipeController::class, 'update'])->name('equipes.update');

// Route::delete('/equipes/{equipe}',[EquipeController::class, 'destroy'])->name('equipes.destroy');



Route::get('/equipes', [EquipeController::class, 'index'])->name('equipes.index');
Route::get('/equipes/create', [EquipeController::class, 'create'])->name('equipes.create');
Route::post('/equipes', [EquipeController::class, 'store'])->name('equipes.store');
Route::get('/equipes/{equipe}', [EquipeController::class, 'show'])->name('equipes.show');
Route::get('/equipes/{equipe}/edit', [EquipeController::class, 'edit'])->name('equipes.edit');
Route::put('/equipes/{equipe}', [EquipeController::class, 'update'])->name('equipes.update');
Route::delete('/equipes/{equipe}', [EquipeController::class, 'destroy'])->name('equipes.destroy');

Route::get('/creerequipe', [EquipeController::class, 'createEquipe'])->name('creerequipe');





Route::get('/coordinateurs', [CoordinateurController::class, 'index'])->name('coordinateurs.index');
Route::get('/coordinateurs/create', [CoordinateurController::class, 'create'])->name('coordinateurs.create');
Route::post('/coordinateurs', [CoordinateurController::class, 'store'])->name('coordinateurs.store');
Route::get('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'show'])->name('coordinateurs.show');
Route::get('/coordinateurs/{coordinateur}/edit', [CoordinateurController::class, 'edit'])->name('coordinateurs.edit');
Route::put('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'update'])->name('coordinateurs.update');
Route::delete('/coordinateurs/{coordinateur}', [CoordinateurController::class, 'destroy'])->name('coordinateurs.destroy');

Route::get('/creercoordinateur', [CoordinateurController::class, 'createCoordinateur'])->name('creercoordinateur');

Route::resource('coordinateurs', CoordinateurController::class);




Route::get('/operateurs', [OperateurController::class, 'index'])->name('operateurs.index');
Route::get('/operateurs/create', [OperateurController::class, 'create'])->name('operateurs.create');
Route::post('/operateurs', [OperateurController::class, 'store'])->name('operateurs.store');
Route::get('/operateurs/{operateur}', [OperateurController::class, 'show'])->name('operateurs.show');
Route::get('/operateurs/{operateur}/edit', [OperateurController::class, 'edit'])->name('operateurs.edit');
Route::put('/operateurs/{operateur}', [OperateurController::class, 'update'])->name('operateurs.update');
Route::delete('/operateurs/{operateur}', [OperateurController::class, 'destroy'])->name('operateurs.destroy');

Route::get('/creeroperateur', [OperateurController::class, 'createOperateur'])->name('creeroperateur');

// Route::resource('operateurs', OperateurController::class);





Route::get('/superviseurs', [SuperviseurController::class, 'index'])->name('superviseurs.index');
Route::get('/superviseurs/create', [SuperviseurController::class, 'create'])->name('superviseurs.create');
Route::post('/superviseurs', [SuperviseurController::class, 'store'])->name('superviseurs.store');
Route::get('/superviseurs/{superviseur}', [SuperviseurController::class, 'show'])->name('superviseurs.show');
Route::get('/superviseurs/{superviseur}/edit', [SuperviseurController::class, 'edit'])->name('superviseurs.edit');
Route::put('/superviseurs/{superviseur}', [SuperviseurController::class, 'update'])->name('superviseurs.update');
Route::delete('/superviseurs/{superviseur}', [SuperviseurController::class, 'destroy'])->name('superviseurs.destroy');

Route::get('/creersuperviseur', [SuperviseurController::class, 'createSuperviseur'])->name('creersuperviseur');











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








// Route::prefix('admin')->group(function () {
//     Route::get('/creercoordinateur', [AdminController::class, 'creercoordinateur']);
//     Route::get('/creerequipe', [AdminController::class, 'creerequipe']);
// });

Route::prefix('coordinateur')->group(function () {
    Route::get('/creeroperateur', [CoordinateurController::class, 'creeroperateur']);
    Route::get('/creersuperviseur', [CoordinateurController::class, 'creersuperviseur']);
});

Route::prefix('operateur')->group(function () {
    Route::get('/creerreclamation', [OperateurController::class, 'creerreclamation']);
});

Route::prefix('superviseur')->group(function () {
    Route::get('/traiterreclamation', [SuperviseurController::class, 'traiterreclamation']);
});












// Route::get('/creerequipe', [EquipeController::class, 'createEquipe'])->name('creerequipe');





// Route::get('/posts',[AdminController::class, 'index'])->name('posts.index');

// Route::get('/posts',[AdminController::class, 'index'])->name('posts.index');

// Route::get('/posts/create', [AdminController::class, 'create'])->name('posts.create');

// Route::post('/posts', [AdminController::class, 'store'])->name('posts.store');

// Route::get('/posts/{post}', [AdminController::class, 'show'])->name('posts.show');

// Route::get('/posts/{post}/edit', [AdminController::class, 'edit'])->name('posts.edit');

// Route::put('/posts/{post}', [AdminController::class, 'update'])->name('posts.update');

// Route::delete('/posts/{post}',[AdminController::class, 'destroy'])->name('posts.destroy');


