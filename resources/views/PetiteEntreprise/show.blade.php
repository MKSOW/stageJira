@extends('LAYOUT.interface')
@section('content')
                
                <h1>VOTRE ENTREPRISE</h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Description</th>
                            {{-- <th>Liste des projets </th> --}}

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$PetiteEntreprise->id}}</td>
                            <td>{{$PetiteEntreprise->nom}}</td>
                            <td>{{$PetiteEntreprise->description}}</td>
                            {{-- <td>{{$PetiteEntreprise->listeProjets}}</td> --}}
                        </tr>
                    </tbody>
                </table> <hr>
                <a href="{{route('PetiteEntreprise.index')}}" class="btn btn-primary">Retour vers le menu</a> 
@endsection