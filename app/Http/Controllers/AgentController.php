<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class AgentController extends Controller
{
    public function index()
    {
        $list_agents = Agents::orderBy("nom", "asc")->paginate(6); //on recupère les agents selon l'alphabe agents est un modele
        return view("Agents", compact("list_agents"));
    }

    public function create()
    {
        $list_zones = Zone::all();
        return view("createAgents", compact("list_zones"));
    }

    public function edit(Agents $agents)
    {
        $list_zones = Zone::all();
        return view("editAgent", compact("agents", "list_zones"));
    }
    public function store(Request $request) //c'est ici que nous interceptons les données que l'utilisateur va saisir 
    {
        $request->validate([
            "nom" => "required", //la données est oubligatoire !
            "postnom" => "required",
            "prenom" => "required",
            "username" => "required",
            "password" => "required",
            "zone_id" => "required",
            "grade" => "required",
        ]);

        //Agents::created($request->all()); //nous pouvons créer un agent de cette méthode, ou 
        //nous pouvons aussi définir un tableau associative
        Agents::create([
            "nom" => $request->nom,
            "postnom" => $request->postnom,
            "prenom" => $request->prenom,
            "username" => $request->username,
            "password" => $request->password,
            "zone_id" => $request->zone_id,
            "grade" => $request->grade,
        ]);
        return back()->with("success", "Agent ajouté avec succé !");
    }
    public function delete(Agents   $agents) //cette manière de faire est appelé indepandance !
    {
        # code...
        //en prenant juste la variable du type any on peut faire aussi 
        //Agents::find($agents)->delete();
        $nom_complet = $agents->prenom . " " . $agents->nom;
        $agents->delete();
        return back()->with("succesDelete", "L'agent '$nom_complet' est supprimer avec succès!");
    }
    public function update(Request $request, Agents $agents) //c'est ici que nous interceptons les données que l'utilisateur va saisir 
    {
        $request->validate([
            "nom" => "required", //la données est oubligatoire !
            "postnom" => "required",
            "prenom" => "required",
            "username" => "required",
            "password" => "required",
            "zone_id" => "required",
            "grade" => "required",
        ]);

        //Agents::created($request->all()); //nous pouvons créer un agent de cette méthode, ou 
        //nous pouvons aussi définir un tableau associative
        $agents->update([
            "nom" => $request->nom,
            "postnom" => $request->postnom,
            "prenom" => $request->prenom,
            "username" => $request->username,
            "password" => $request->password,
            "zone_id" => $request->zone_id,
            "grade" => $request->grade,
        ]);
        return back()->with("success", "Agent est mis à jour  avec succé !");
    }
    public function login(Request $request)
    {
        //validate input 
        $this->validate($request, [
            "username" => 'required|username',
            "password" => 'required|string',
        ]);
        // find data in database
        //$userName = Agents::where('username',$request->username)->first();
        $user_data = array(
            'username'  => $request->get('username'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('main/successlogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function successlogin()
    {
        return view('successlogin');
    }
    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
