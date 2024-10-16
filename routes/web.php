<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::middleware('auth')->group(function(){ 

/*  route pour lister les category */
Route::get('/profil',[UserController::class,'Profil'])->name('profil.path');
Route::get('/dashboard',[UserController::class,'Home'])->name('home.path');
Route::get('/agence-list',[UserController::class,'AgenceListe'])->name('agence-list.path');
Route::get('/agent-list',[UserController::class,'AgentListe'])->name('agent-list.path');
Route::get('/maintenance-list',[UserController::class,'MaintenanceListe'])->name('maintenance-list.path');
Route::get('/terminal-list',[UserController::class,'TerminalListe'])->name('terminal-list.path');


/*  route pour ajouter*/
Route::get('/maintenance-add', [UserController::class, 'MaintenanceAdd'])->name('maintenance-add.path');
Route::get('/maintenance-voir/panne-add/{maintenance}/{terminal}', [UserController::class, 'PanneAdd'])->name('panne-add.path');
Route::get('/terminal-add', [UserController::class, 'TerminalAdd'])->name('terminal-add.path');
Route::get('/agence-add', [UserController::class, 'AgenceAdd'])->name('agence-add.path');
Route::get('/agent-add', [UserController::class, 'AgentAdd'])->name('agent-add.path');
Route::get('/maintenance-voir/commentaire-add/{maintenance}', [UserController::class, 'CommentAdd'])->name('commentaire-add.path');

/*  route pour editer*/
Route::get('/maintenance-edit/{maintenance}', [UserController::class, 'MaintenanceEdit'])->name('maintenance-edit.path');
Route::get('/panne-edit/{maintenance}/{panne}', [UserController::class, 'PanneEdit'])->name('panne-edit.path');
Route::get('/terminal-edit/{terminal}', [UserController::class, 'TerminalEdit'])->name('terminal-edit.path');
Route::get('/agence-edit/{agence}', [UserController::class, 'AgenceEdit'])->name('agence-edit.path');
Route::get('/agent-edit/{agent}', [UserController::class, 'AgentEdit'])->name('agent-edit.path');


/*  route pour voir*/
Route::get('/maintenance-voir/{maintenance}', [UserController::class, 'MaintenanceVoir'])->name('maintenance-voir.path');
Route::get('/panne-voir/{panne}', [UserController::class, 'PanneVoir'])->name('panne-voir.path');
Route::get('/terminal-voir/{terminal}', [UserController::class, 'TerminalVoir'])->name('terminal-voir.path');
Route::get('/historique-voir/{terminal}', [UserController::class, 'HistoriqueVoir'])->name('historique-voir.path');


/* ROUTE pour storer une category  */
Route::post('/store-maintenance', [UserController::class, 'storeMaintenance'])->name('store-maintenance.path');
Route::post('/store-panne/{maintenance}', [UserController::class, 'storePanne'])->name('store-panne.path');
Route::post('/store-terminal', [UserController::class, 'storeTerminal'])->name('store-terminal.path');
Route::post('/store-agence', [UserController::class, 'storeAgence'])->name('store-agence.path');
Route::post('/store-agent', [UserController::class, 'storeAgent'])->name('store-agent.path');
Route::post('/store-commentaire', [UserController::class, 'storeComment'])->name('store-commentaire.path');


// route pour update
Route::post('/update-maintenance/{maintenance}', [UserController::class, 'UpdateMaintenance'])->name('update-maintenance.path');
Route::post('/update-panne/{panne}', [UserController::class, 'UpdatePanne'])->name('update-panne.path');
Route::post('/update-terminal/{terminal}', [UserController::class, 'UpdateTerminal'])->name('update-terminal.path');
Route::post('/update-agence/{agence}', [UserController::class, 'UpdateAgence'])->name('update-agence.path');

Route::post('/update-agent/{agent}', [UserController::class, 'UpdateAgent'])->name('update-agent.path');


//route pour supprimer
Route::get('/destroy-maintenance/{maintenance}', [UserController::class, 'destroyMaintenance'])->name('destroy-maintenance.path');
Route::get('/destroy-panne/{panne}', [UserController::class, 'destroyPanne'])->name('destroy-panne.path');
Route::get('/destroy-terminal/{terminal}', [UserController::class, 'destroyTerminal'])->name('destroy-terminal.path');
Route::get('/destroy-agence/{agence}', [UserController::class, 'destroyAgence'])->name('destroy-agence.path');

Route::get('/destroy-agent/{agent}', [UserController::class, 'destroyAgent'])->name('destroy-agent.path');

  });


Route::get('/',[AdminController::class,'Authlogin'])->name('login.auth');
Route::get('/register-user',[AdminController::class,'Register'])->name('register.auth');
Route::post('/store-user', [AdminController::class,'Create'])->name('store-user.auth');
Route::post('/store-auth', [AdminController::class,'Login'])->name('store.auth');
Route::get('/logout',[AdminController::class,'logout'])->name('logout.path');;

