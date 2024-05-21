@extends('LAYOUT.interface')
@section('content')
                <form action="{{route('Taches.update', $Tache->id)}}" method="post">
                   @method('put')
                     <div>
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{$Tache->nom}}">
                      </div>
                      <div>
                        <label for="description" class="form-label"><strong>Description</strong></label>
                      <br>
                        <input type="text" id="description" class="form-control" placeholder="description" name="description" value="{{$Tache->description}}">
                      </div>
                      <div>
                        <label for="debut" class="form-label"><strong>Debut De Tache</strong></label>
                      <br>
                        <input type="date" id="debut" class="form-control" placeholder="debut" name="debut" value="{{$Tache->debut}}">
                      </div>
                      
                      <div>
                        <label for="fin" class="form-label"><strong>FIN De Tache</strong></label>
                      <br>
                        <input type="date" id="fin" class="form-control" placeholder="fin" name="fin" value="{{$Tache->fin}}">
                      </div>
                      <div>
                        <label for="tacheProjet" class="form-label"><strong>Tache du projet</strong></label>
                      <br>
                        <input type="text" id="tacheProjet" class="form-control" placeholder="Liste des Taches" name="tacheProjet" value="{{$Tache->tacheProjet}}">
                      </div>
                      

                                       <br> <br>
                        @csrf
                    <input type="submit" class="btn btn-primary" value="Modifier">
                  </form>

@endsection
