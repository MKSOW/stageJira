@extends('LAYOUT.interface')
@section('content')
                 @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif
             <hr>
             <center>
                <h1>LISTE DES EMPLOYES</h1>
             </center>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>E-MAIL</th>
                            <th>DEPARTEMENT</th>
                            <th>TACHE A REALISEZ</th>
                            <th colspan="2">ANCTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Employe as $Employe)
                        <tr>
                            <td scope='row'>{{$Employe->id}}</td>
                            <td>{{$Employe->nom}}</td>
                            <td>{{$Employe->prenom}}</td>
                            <td>{{$Employe->email}}</td>
                            <td>{{$Employe->departement}}</td>
                            <td>{{$Employe->tacheRea}}</td>
                            <td>
                                <form action="{{ route('Employe.destroy', $Employe->id)}}" method="POST" >

                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" >Supprimer</button>
                                    @csrf
                                </form>
                            </td>
                            <td>

                                <a href="{{route('Employe.edit',$Employe->id)}}" class="btn btn-danger"
                                    title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                                <a href="{{ route('Employe.show', $Employe->id)}}" class="btn btn-info"
                                title="appuyez sur ce boutton pour afficher la liste des Projets">Afficher</a>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <hr>
                <a href="{{ route('Employe.create') }}" class="btn btn-primary"
                title="appuyez sur ce boutton pour ajouter un nouveau employez">Ajouter un nouveau employez</a>
 @endsection
