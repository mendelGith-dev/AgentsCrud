@extends("masterL.master")

@section("contenu")
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h3 class="border-bottom border-gray pb-2 mb-5">Liste des Agents </h3>
    <div class="mt-5">
        <div class="d-flex justify-content-between mb-4">
            {{ $list_agents->links()}}
            <div><a href="{{ route('agents.create') }}" class="btn btn-primary">Ajouter un Agent</a></div>
        </div>

        @if(session()->has("succesDelete"))
        <div class="alert alert-success ">
            <h3>
                {{session()->get('succesDelete')}}
            </h3>
        </div>

        @endif
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Post Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Mot de passe</th>
                    <th scope="col">Zone</th>

                    <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_agents as $Agents)
                <tr>
                    <th scope="row">{{$Agents->id}}</th>
                    <td>{{$Agents->nom}}</td>
                    <td>{{$Agents->postnom}}</td>
                    <td>{{$Agents->prenom}}</td>
                    <td>{{$Agents->username}}</td>
                    <td>{{$Agents->password}}</td>
                    <td>{{$Agents->zone->libelle}}</td>
                    <td>{{$Agents->grade}}</td>

                    <td>
                        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet agent ?')){
                            document.getElementById('form-{{$Agents->id}}').submit()
                        }">Supprimer</a>
                        <a href="{{ route('agents.edit', ['agents'=>$Agents->id]) }}" class="btn btn-info">Editer</a>
                        <form id="form-{{$Agents->id}}" action="{{ route('agents.supprimer', ['agents'=>$Agents->id])}}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection