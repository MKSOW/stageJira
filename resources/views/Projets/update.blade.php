@extends('LAYOUT.interface')
@section('content')
                <form action="{{route('Projets.update', $client->id)}}" method="post">
                   @method('put')
                     <div>
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{$Projet->nom}}">
                      </div>
                      <div>
                        <label for="description" class="form-label"><strong>Description</strong></label>
                      <br>
                        <input type="text" id="description" class="form-control" placeholder="description" name="description" value="{{$Projet->description}}">
                      </div>
                      <div>
                        <label for="debut_projet" class="form-label"><strong>Debut De Projets</strong></label>
                      <br>
                        <input type="date" id="debut_projet" class="form-control" placeholder="debut_projet" name="debut_projet" value="{{$Projet->debut_projet}}">
                      </div>
                      <div>
                        <label for="fin_projet" class="form-label"><strong>Fin De Projets</strong></label>
                      <br>
                        <input type="date" id="fin_projet" class="form-control" placeholder="fin_projet" name="fin_projet" value="{{$Projet->fin_projet}}">
                      </div>
                      <div>
                        <label for="projetDePE" class="form-label"><strong>PROJET DE L'ENTREPRISE</strong></label>
                      <br>
                        <input type="text" id="projetDePE" class="form-control" placeholder="projetDePE" name="projetDePE" value="{{$Projet->projetDePE}}">
                      </div>

                                       <br> <br>
                        @csrf
                    <input type="submit" class="btn btn-primary" value="Modifier">
                  </form>

@endsection
