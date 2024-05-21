@extends('LAYOUT.interface')
@section('content')
                <form action="{{route('Employe.update', $client->id)}}" method="post">
                   @method('put')
                     <div>
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{$Employe->nom}}">
                      </div>
                      <div>
                        <label for="prenom" class="form-label"><strong>Prenom</strong></label>
                      <br>
                        <input type="text" id="prenom" class="form-control" placeholder="prenom" name="prenom" value="{{$Employe->prenom}}">
                      </div>
                      <div>
                        <label for="email" class="form-label"><strong>E-mail</strong></label>
                      <br>
                        <input type="text" id="email" class="form-control" placeholder="email" name="email" value="{{$Employe->email}}">
                      </div>
                      <div>
                        <label for="departement" class="form-label"><strong>Departement</strong></label>
                      <br>
                        <input type="text" id="departement" class="form-control" placeholder="Departement" name="departement" value="{{$Employe->departement}}">
                      </div>
                      <label for="tacheRea" class="form-label"><strong>liste Tache</strong></label>
                    <br>
                      <input type="text" id="tacheRea" class="form-control" placeholder="tacheRea" name="tacheRea" value="{{$Employe->tacheRea}}">
                    </div>
                                       <br> <br>
                        @csrf
                    <input type="submit" class="btn btn-primary" value="Modifier">
                  </form>

@endsection