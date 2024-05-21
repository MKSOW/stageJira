<@extends('LAYOUT.interface')
@section('content')
<hr>
                @if ($errors->any())
                    <ul>
                        
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                    </ul>
                @endif
                <form action="{{ route('Taches.store') }}" method="post">
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
                        <label for="debut" class="form-label"><strong>Debut des Taches</strong></label>
                        <input type="date" id="debut" class="form-control" placeholder="Debut des tache" name="debut" value="{{ old('debut') }}">
                    </div>
                    <div class="mb-3">
                        <label for="fin" class="form-label"><strong>fin des s</strong></label>
                        <input type="date" id="fin" class="form-control" placeholder="fin des Pfojet" name="fin" value="{{ old('fin') }}">
                    </div>
                    <div class="mb-3">
                        <label for="tacheProjet" class="form-label"><strong>Tache du projet</strong></label>
                        <input type="text" id="tacheProjet" class="form-control" placeholder="Liste des Taches" name="tacheProjet" value="{{ old('tacheProjet') }}">
                    </div>
                    <button class="btn btn-info mb-2" type="submit">Ajouter la tache</button>
                </form>
@endsection
