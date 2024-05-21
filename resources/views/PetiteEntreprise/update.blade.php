@extends('LAYOUT.interface')
@section('content')
                <form action="{{route('PetiteEntreprise.update', $PetiteEntreprise->id)}}" method="post"> 
                   @method('put')
                   @csrf
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                        <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{$PetiteEntreprise->nom}}">
                      </div>
                      <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="description" name="description" value="{{$PetiteEntreprise->description}}">
                      </div>
                      {{-- <label for="listeProjets" class="form-label"><strong>liste Des Projets</strong></label>
                      <br>
                        <input type="text" id="listeProjets" class="form-control" placeholder="listeProjets" name="listeProjets" value="{{$PetiteEntreprise->listeProjets}}">
                      </div> --}}
                      
                                       <br> <br>
                    <input type="submit" class="btn btn-primary" value="Modifier">
                  </form>

@endsection