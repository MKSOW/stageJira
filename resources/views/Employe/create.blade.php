@extends('LAYOUT.interface')
@section('content')
<hr>
                @if ($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                    </ul>
                @endif
                <form action="{{ route('Employe.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label"><strong>PRENOM</strong></label>
                        <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>E-MAIL</strong></label>
                        <input type="text" id="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="departement" class="form-label"><strong>DEPARTEMENT</strong></label>
                        <input type="text" id="departement" class="form-control" placeholder="Departement" name="departement" value="{{ old('departement') }}">
                    </div>
                    <div class="mb-3">
                        <label for="tacheRea" class="form-label"><strong>Tache a realisez</strong></label>
                        <input type="text" id="tacheRea" class="form-control" placeholder="Nom de la tache a realiger" name="tacheRea" value="{{ old('tacheRea') }}">
                    </div>
                    <button class="btn btn-info mb-2" type="submit">Ajouter la tache</button>
                </form>
 @endsection
