@extends("masterL.master")

@section("contenu")
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h3 class="border-bottom border-gray pb-2 mb-5">Ajouter un Agent </h3>
    <div class="mt-5">
        @if(session()->has("success"))
        <div class="alert alert-success">
            <h3>
                {{session()->get('success')}}
            </h3>
        </div>

        @endif
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form style="width: 65%;" method="post" action="{{ route('agents.ajouter') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de l'agent</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post-Nom de l'agent</label>
                <input type="text" class="form-control" name="postnom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom de l'agent</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur de l'agent</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirmer le mot de passe</label>
                <input type="text" class="form-control" name="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Zone D'affectation</label>
                <select type="text" class="form-control" name="zone_id">
                    <option value=""></option>
                    @foreach($list_zones as $zone)
                    <option value="{{ $zone->id }}">{{ $zone->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Grade</label>
                <input type="text" class="form-control" name="grade">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('agents')}}" class="btn btn-danger">Anuller</a>
        </form>
    </div>
</div>
@endsection