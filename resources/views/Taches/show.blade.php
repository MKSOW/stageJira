@extends('LAYOUT.interface')
@section('content')

                <h1>VOTRE TACHE</h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Debut de la tache </th>
                            <th>Fin de la tache </th>
                            <th>Tache du projet </th>

                        </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$Tache->id}}</td>
                            <td>{{$Tache->nom}}</td>
                            <td>{{$Tache->description}}</td>
                            <td>{{$Tache->debut}}</td>
                            <td>{{$Tache->fin}}</td>
                            <td>{{$Tache->tacheProjet}}</td>
                        </tr>
                        
                    </tbody>
                </table> <hr>
                <a href="{{route('Taches.index')}}" class="btn btn-primary">Retour vers le menu</a>
@endsection
