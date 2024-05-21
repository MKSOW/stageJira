@extends('LAYOUT.interface')
@section('content')
                <form action="{{ route('PetiteEntreprise.update', $PetiteEntreprise->id) }}" method="post"> 
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ $PetiteEntreprise->nom }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="Description" name="description" value="{{ $PetiteEntreprise->description }}">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="listeProjets" class="form-label"><strong>Liste Projets</strong></label>
                        <input type="text" id="listeProjets" class="form-control" placeholder="Liste Projets" name="listeProjets" value="{{ $PetiteEntreprise->listeProjets }}">
                    </div> --}}
                    @csrf
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
@endsection
