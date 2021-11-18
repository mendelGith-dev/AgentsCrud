@extends("masterL.master")

@section("contenu")
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h3 class="border-bottom border-gray pb-2 mb-5">Edition d'un Agent </h3>
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

        <form style="width: 65%;" method="post" action="{!! route('agents.update', $agents->id) !!}">
            @csrf
            <!-- <input type="hidden" name="_method" value="put"> -->
            {{ method_field('PUT') }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de l'agent</label>
                <input type="text" class="form-control" name="nom" value="{{$agents->nom}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Post-Nom de l'agent</label>
                <input type="text" class="form-control" name="postnom" value="{{$agents->postnom}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom de l'agent</label>
                <input type="text" class="form-control" name="prenom" value="{{$agents->prenom}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur de l'agent</label>
                <input type="text" class="form-control" name="username" value="{{$agents->username}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                <input type="text" class="form-control" name="password" value="{{$agents->password}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirmer le mot de passe</label>
                <input type="text" class="form-control" name="" value="{{$agents->password}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Zone D'affectation</label>
                <select type="text" class="form-control" name="zone_id">
                    <option value=""></option>
                    @foreach($list_zones as $zone)
                    @if($zone->id == $agents->zone_id )
                    <option value="{{ $zone->id }}" selected>{{ $zone->libelle }}</option>
                    @else
                    <option value="{{ $zone->id }}">{{ $zone->libelle }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Grade</label>
                <input type="text" class="form-control" name="grade" value="{{$agents->grade}}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('agents')}}" class="btn btn-danger">Anuller</a>
        </form>
    </div>
</div>
@endsection