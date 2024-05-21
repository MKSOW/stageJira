<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TachesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetiteEntrepriseController ;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ProjetsController; 
// use App\Http\Controllers\UtilisateurController; 
// use App\Http\Controllers\InterfaceController; 
//use Spatie\Permission\Models\Role;

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

Route::get('/', function () {
    // $createAdmin = Role::create(['name' =>'Administrateur']);
    // $createUseur = Role::create(['name' =>'Utilisateur']);
    return view('welcome');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::middleware(['auth'])->group(function(){


    Route::resource('/PetiteEntreprise',PetiteEntrepriseController::class);
    // Route::resource('/Interface',InterfaceController::class);
    Route::resource('/Employe', EmployeController::class);
    // Route::resource('/Utilisateur',UtilisateurController::class);
    Route::resource('/Projets',ProjetsController::class);
    Route::resource('Taches',TachesController::class);
    // Route::resource('/TypeTaches',TypeTachesController::class);
    // Route::resource('/EtatTaches',EtatTachesController::class);
});


require __DIR__.'/auth.php';
