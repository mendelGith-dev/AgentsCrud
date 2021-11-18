<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    //
    public function index()
    {
        //on recupère les agents selon l'alphabe agents est un modele
        return view("Historique");
    }
}
