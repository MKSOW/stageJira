@extends('LAYOUT.interface')
@section('content')

                <h1>VOS PROJETS: </h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Debut de projets </th>
                            <th>Fin de projets </th>
                            <th>PROJET DE L'ENTREPRISE </th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$Projet->id}}</td>
                            <td>{{$Projet->nom}}</td>
                            <td>{{$Projet->description}}</td>
                            <td>{{$Projet->debut_projet}}</td>
                            <td>{{$Projet->fin_projet}}</td>
                            <td>{{$Projet->projetDePE}}</td>

                        </tr>
                    </tbody>
                </table> <hr>
                <a href="{{route('Projets.index')}}" class="btn btn-primary">Retour vers le menu</a>
            @endsection