@extends("masterL.master")

@section("contenu")
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h3 class="border-bottom border-gray pb-2 mb-5">Historique des véhicules identifiées</h3>
    <div class="mt-5">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Agent</th>
                    <th scope="col">Model voiture</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Plaque d'immatriculation</th>
                    <th scope="col">Zone</th>
                    <th scope="col">Contrôle technique</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    </td>
                </tr>
                <div><a href="{{ route('agents') }}" class="btn btn-primary mb-4">Previus page</a></div>

            </tbody>
        </table>
    </div>

</div>
@endsection