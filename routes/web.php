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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
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


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboardadmin', function () {
        return view('admin.dashboardadmin');
    })->name('dashboardadmin');
});













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

Route::get('/creercoordinateur', function () {
    return view('creercoordinateur');
})->name('creercoordinateur') ;








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








Route::prefix('admin')->group(function () {
    Route::get('/creercoordinateur', [AdminController::class, 'creercoordinateur']);
    Route::get('/creerequipe', [AdminController::class, 'creerequipe']);
});

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





// hada ghir comment bax ntesti wa7d l7aja