<?php

use App\Http\Livewire\Aide;
use App\Http\Livewire\Archives;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Demandesrecues;
use App\Http\Livewire\Historique;
use App\Models\AdresseDestination;
use App\Models\AdresseSource;
use App\Models\Demande;
use App\Models\Departement;
use App\Models\Duree;
use App\Models\Fluxe;
use App\Models\Protocole;
use App\Models\SousDepartement;
use App\Models\User;
use App\Http\Livewire\Utilisateurs;
use App\Http\Livewire\Mesdemandes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// anciennes routes

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/demande', function () {
    return Demande::with("fluxe","valideepar","analyseepar","codeepar","demandeur")->paginate(5);
});

Route::get('/flux', function () {
    return Fluxe::with("demande", "adressesource", "adressedestination", "protocole", "duree")->paginate(5);
});

Route::get('/adressesource', function () {
    return AdresseSource::with("fluxe")->paginate(5);
});

Route::get('/adressedestination', function () {
    return AdresseDestination::with("fluxe")->paginate(5);
});

Route::get('/protocole', function () {
    return Protocole::with("fluxe")->paginate(5);
});

Route::get('/duree', function () {
    return Duree::with("fluxe")->paginate(5);
});

Route::get('/user', function () {
    return User::with("departement")->paginate(5);
});

Route::get('/departement', function () {
    return Departement::with("user")->paginate(5);
});
Route::get('/sousdepartement', function () {
    return SousDepartement::with("user")->paginate(5);
});*/

// nouvelles routes

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');
// Route::get('/utilisateur', [App\Http\Controllers\AcceuilController::class, 'user_page']);
Route::get('/utilisateur', Utilisateurs::class)->name('home1');
//Route::get('userspage','AcceuilController@user_page');
Route::get('/mesDemades', Mesdemandes::class)->name('home2');
Route::get('/demadesReçues', Demandesrecues::class)->name('home3');
Route::get('/archives', Archives::class)->name('home4');
Route::get('/aide', Aide::class)->name('home5');
Route::get('/historique', Historique::class)->name('home6');
Route::get('/dashboard', Dashboard::class)->name('home7');

