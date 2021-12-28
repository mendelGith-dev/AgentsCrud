<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\HistoriqueController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

Route::get('/', function () {
    return view('welcome');
})->name("acceuil");

Route::get('/Agents', [AgentController::class, "index"])->name("agents"); //ce qui est à la fin nde la route 

Route::get('/Agents/create', [AgentController::class, "create"])->name("agents.create");

Route::get('/Historique', [HistoriqueController::class, "index"])->name("historique");

Route::post('/Agents/create', [AgentController::class, "store"])->name("agents.ajouter"); // on spécifie post pour dire que nous allons envoyer les données et la fonction s'appel store 

Route::get('/Agents/{agents}', [AgentController::class, "edit"])->name("agents.edit"); // on spécifie post pour dire que nous allons envoyer les données et la fonction s'appel store 

Route::delete('/Agents/{agents}', [AgentController::class, "delete"])->name("agents.supprimer"); // on spécifie le paramettre pour le formulaire, on spécifie la méthode delete que nous allons

Route::put('/Agents/{agents}', [AgentController::class, "update"])->name("agents.update");// on spécifie le paramettre pour le formulaire, on spécifie la méthode delete que nous allons
