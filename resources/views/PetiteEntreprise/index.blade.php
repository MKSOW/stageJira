@extends('LAYOUT.interface')
@section('content')
                 {{-- cas de succes  --}}
                 @if (session('status'))
                 <div class="alert alert-success">
                     {{ session('status') }}
                 </div>
             @endif
             <hr>
             <center><h1><span>ENTREPRISE</span></h1></center>
                <table class="table table-dark table-striped-columns">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>DESCRIPTION</th>
                            {{-- <th>LISTE DES PROJETS</th> --}}
                            <th colspan="2">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($PetiteEntreprises as $PetieEntreprise)
                        <tr>
                            <td scope='row'>{{$PetieEntreprise->id}}</td>
                            <td>{{$PetieEntreprise->nom}}</td>
                            <td>{{$PetieEntreprise->description}}</td>
                            {{-- <td>{{$PetieEntreprise->listeProjets}}</td> --}}
                            <td>
                                <form action="{{ route('PetiteEntreprise.destroy', $PetieEntreprise->id)}}" method="POST" >
                                    
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" >Supprimer</button>
                                    @csrf
                                </form>
                            </td>
                            <td>
                                
                                <a href="{{route('PetiteEntreprise.edit',$PetieEntreprise->id)}}" class="btn btn-danger"
                                    title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                                <a href="{{ route('PetiteEntreprise.show', $PetieEntreprise->id)}}" class="btn btn-info"
                                title="appuyez sur ce boutton pour afficher la liste des PetiteEntreprise">Afficher</a>
                            </td>
                            @endforeach
                        </tr>
                        
                    </tbody> 
                </table>
                <hr>
                
                <a href="{{ route('PetiteEntreprise.create') }}" class="btn btn-primary" 
                title="appuyez sur ce boutton pour ajouter une un nouveau client">Ajouter une nouvelle Petite Entreprise</a><hr>

                    <table class="table table-dark table-striped-columns">
                        <h1><span>LISTE DES PROJETS :</span></h1>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>DESCRIPTION</th>
                            <th>DATE DEBUT</th>
                            <th>DATE FIN </th>
                            <th>PROJET DE L'ENTREPRISE</th>
                            <th colspan="2">ACTIONS</th>
                        </tr>
                        @foreach    ($Projets as $Projet)
                        <tr>
                        <td scope='row'>{{$Projet->id}}</td>
                        <td>{{$Projet->nom}}</td>
                        <td>{{$Projet->description}}</td>
                        <td>{{$Projet->debut_projet}}</td>
                        <td>{{$Projet->fin_projet}}</td>
                        <td>{{$Projet->projetDePE}}</td>
                        <td>
                        <form action="{{ route('Projets.destroy', $Projet->id)}}" method="POST" >

                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" >Supprimer</button>
                            @csrf
                        </form>
                    </td>
                    <td>

                        <a href="{{route('Projets.edit',$Projet->id)}}" class="btn btn-warning"
                            title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                        {{-- <a href="{{ route('Projets.show', $Projet->id)}}" class="btn btn-info"
                        title="appuyez sur ce boutton pour afficher la liste des Projets">Afficher</a> --}}
                    </td>
                        <br>
                        @endforeach
                    </tr>
                </table>
                <hr>
                <h1><span>LISTE DES TACHES :</span></h1>
                <table class="table table-dark table-striped-columns">
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>DESCRIPTION</th>
                        <th>DATE DEBUT</th>
                        <th>DATE FIN </th>
                        <th colspan="3">ACTIONS</th>
                    </tr>
                    @foreach ($Taches as $Tache)
                    <tr>
                        <td scope='row'>{{$Tache->id}}</td>
                        <td>{{$Tache->nom}}</td>
                        <td>{{$Tache->description}}</td>
                        <td>{{$Tache->debut}}</td>
                        <td>{{$Tache->fin}}</td>
                        <td>{{$Tache->listeTache}}</td>
                        <td>
                            <form action="{{ route('Taches.destroy', $Tache->id)}}" method="POST" >

                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" >Supprimer</button>
                                @csrf
                            </form>
                        </td>
                        <td>

                            <a href="{{ route('Taches.edit',$Tache->id)}}" class="btn btn-warning"
                                title="appuyez sur ce boutton pour modifier les informations ">Modifier</a>
                            {{-- <a href="{{ route('Taches.show', $Tache->id)}}" class="btn btn-info"
                            title="appuyez sur ce boutton pour afficher la liste des Projets">Afficher</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </table> <hr>
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
                        @endforeach
                    </tr>
                </tbody>

                </table>
@endsection