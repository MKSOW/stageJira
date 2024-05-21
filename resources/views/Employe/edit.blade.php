@extends('LAYOUT.interface')
@section('content')

                <h1>MODIFIER LES INFORMATIONS LE NOM D'UN EMPLOYE</h1>
                <hr>
                <form action="{{ route('Employe.update', $Employe->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label"><strong>NOM</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" name="nom" value="{{ $Employe->nom}}">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label"><strong>PRENOM</strong></label>
                        <input type="text" id="prenom" class="form-control" placeholder="Prenom" name="prenom" value="{{ $Employe->prenom }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>E-MAIL</strong></label>
                        <input type="text" id="email" class="form-control" placeholder="E-mail" name="email" value="{{ $Employe->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="departement" class="form-label"><strong>DEPARTEMENT</strong></label>
                        <input type="text" id="departement" class="form-control" placeholder="Departement" name="departement" value="{{ $Employe->departement }}">
                    </div>
                    <div class="mb-3">
                        <label for="tacheRea" class="form-label"><strong>TACHE A REALISEZ</strong></label>
                        <input type="text" id="tacheRea" class="form-control" placeholder="tacheRea" name="tacheRea" value="{{ $Employe->tacheRea }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
 @endsection
