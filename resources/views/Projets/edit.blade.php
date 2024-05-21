@extends('LAYOUT.interface')
@section('content')

                <h1>MODIFIER LES INFORMATIONS LE NOM D'UN PROJET</h1>
                <hr>
                <form action="{{ route('Projets.update', $Projet->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ $Projet->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="{{ $Projet->description }}">
                    </div>
                    <div class="mb-3">
                        <label for="liste_projet" class="form-label"><strong>Debut de Projets</strong></label>
                        <input type="date" id="debut_projet" class="form-control" placeholder="Debut Projets" name="debut_projet" value="{{ $Projet->debut_projet }}">
                    </div>
                    <div class="mb-3">
                        <label for="fin_projet" class="form-label"><strong>Fin de Projets</strong></label>
                        <input type="date" id="fin_projet" class="form-control" placeholder="Fin Projets" name="fin_projet" value="{{ $Projet->fin_projet }}">
                    </div>

                    <div class="mb-3">
                        <label for="projetDePE" class="form-label"><strong>PROJET DE L'ENTREPRISE</strong></label>
                        <input type="text" id="projetDePE" class="form-control" placeholder="Projet de l' entreprise" name="projetDePE" value="{{ $Projet->fin_projet }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            @endsection