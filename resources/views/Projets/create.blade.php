@extends('LAYOUT.interface')
@section('content')
                <h1>REMPLISSEZ CE FORMULAIRE POUR ENREGISTRÉ VOTRE PROJETS DANS LA BASE DES DONNÉES</h1>
                <hr>
                @if ($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                    </ul>
                @endif
                <form action="{{ route('Projets.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="{{ old('description') }}">
                    </div>
                    <div class="mb-3">
                        <label for="debut_projet" class="form-label"><strong>Debut de Projets</strong></label>
                        <input type="date" id="debut_projet" class="form-control" placeholder="Liste des Projets" name="debut_projet" value="{{ old('debut_projet') }}">
                    </div>
                    <div class="mb-3">
                        <label for="fin_projet" class="form-label"><strong>Fin de Projets</strong></label>
                        <input type="date" id="fin_projet" class="form-control" placeholder="Liste des Projets" name="fin_projet" value="{{ old('fin_projet') }}">
                    </div>

                    <div class="mb-3">
                        <label for="projetDePE" class="form-label"><strong>PROJET DE L'ENTREPRISE</strong></label>
                        <input type="text" id="projetDePE" class="form-control" placeholder="Projet de l' entreprise" name="projetDePE" value="{{ old('projetDePE') }}">
                    </div>
                    <button class="btn btn-info mb-2" type="submit">Ajouter le projet</button>
                </form>
            @endsection