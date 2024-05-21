@extends('LAYOUT.interface')
@section('content')
                 @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif
             <hr>
             <center>
                <h1>LISTE DES TACHES</h1>
             </center>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>DESCRIPTION</th>
                            <th>DEBUT DE LA TACHE</th>
                            <th>FIN DE LA TACHE</th>
                            <th>TACHE DU PROJET</th>
                            <th colspan="3">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Taches as $Tache)
                        <tr>
                            <td scope='row'>{{$Tache->id}}</td>
                            <td>{{$Tache->nom}}</td>
                            <td>{{$Tache->description}}</td>
                            <td>{{$Tache->debut}}</td>
                            <td>{{$Tache->fin}}</td>
                            <td>{{$Tache->tacheProjet}}</td>
                            <td>
                                <form action="{{ route('Taches.destroy', $Tache->id)}}" method="post" onsubmit="return confirm('êtes-vous sûr de vouloir supprimer {{$Tache->nom}}')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" >Supprimer</button>
                                   <form action="{{ route('Taches.destroy', $Tache->id)}}" method="post" onsubmit="console.log('ID: {{$Tache->id}}'); return confirm('êtes-vous sûr de vouloir supprimer {{$Tache->nom}}')">
                                </form>
                            </td>
                            <td>
                                
                                <a href="{{ route('Taches.edit',["Tach"=>$Tache["id"]])}}" class="btn btn-warning"
                                    title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                                    </td>
                                    <td>
                                <a href="{{ route('Taches.show', $Tache->id)}}" class="btn btn-info"
                                title="appuyez sur ce boutton pour afficher la liste des Projets">Afficher</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <hr>
                <a href="{{ route('Taches.create') }}" class="btn btn-primary"
                title="appuyez sur ce boutton pour ajouter une nouvelle tache">Ajouter une nouvelle tache</a>
                <hr>

                <h1><span>LISTE DES EMPLOYEZ EN CHARGE DE REALISATION DES TACHES :</span></h1>
                <thead>
                    <table class="table table-dark table-striped-columns">
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>EMAIL</th>
                        <th>DEPARTEMENT</th>
                        <th>TACHE A REALISEZ</th>
                        <th colspan="3">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Employes as $Employe)
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

                            <a href="{{route('Employe.edit',$Employe->id)}}" class="btn btn-warning"
                                title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                            {{-- <a href="{{ route('Employe.show', $Employe->id)}}" class="btn btn-info"
                            title="appuyez sur ce boutton pour afficher la liste des Projets">Afficher</a> --}}
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>

                </table>
    @endsection
