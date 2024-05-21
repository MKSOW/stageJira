@extends('LAYOUT.interface')
@section('content')

                <h1>VOTRE EMPLOYEZ</h1>
                <hr>
                <table class="table table-dark table-striped-columns">
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>PRENOM</th>
                            <th>E-MAIL</th>
                            <th>DEPARTEMENT</th>
                            <th>TACHE A REALISEZ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$Employe->id}}</td>
                            <td>{{$Employe->nom}}</td>
                            <td>{{$Employe->prenom}}</td>
                            <td>{{$Employe->email}}</td>
                            <td>{{$Employe->departement}}</td>
                            <td>{{$Employe->tacheRea}}</td>
                        </tr>
                    </tbody>
                </table> <hr>
                <a href="{{route('Employe.index')}}" class="btn btn-primary">Retour vers le menu</a>
@endsection
