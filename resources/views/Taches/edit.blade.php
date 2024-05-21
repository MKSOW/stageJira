@extends('LAYOUT.interface')
@section('content')

                <h1>MODIFIER LES INFORMATIONS D'UNE TACHE</h1>
                <hr>
                <form action="{{ route('Taches.update',["Tach"=>$Tache["id"]]) }}" method="post">
                    @method("PUT")
                    
                    @csrf
                    <input type="text" name="id" value="{{$Tache->id}}" style="display: none">
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ $Tache->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="{{ $Tache->description }}">
                    </div>
                    <div class="mb-3">
                        <label for="debut" class="form-label"><strong>Debut des Taches</strong></label>
                        <input type="date" id="debut_projet" class="form-control" placeholder="Liste Projet" name="debut" value="{{ $Tache->debut }}">
                    </div>
                    <div class="mb-3">
                        <label for="fin" class="form-label"><strong>fin des Taches</strong></label>
                        <input type="date" id="fin" class="form-control" placeholder="Liste " name="fin" value="{{ $Tache->fin }}">
                    </div>
                    <div class="mb-3">
                        <label for="tacheProjet" class="form-label"><strong>Tache du projet</strong></label>
                        <input type="text" id="tacheProjet" class="form-control" placeholder="Liste des Taches" name="tacheProjet" value="{{ $Tache->tacheProjet }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
  @endsection
