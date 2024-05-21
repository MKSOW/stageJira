@extends('LAYOUT.interface')
@section('content')
                {{-- affichage des erreurs --}} 
                @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                    <li  class="alert alert-danger">{{  $error }}</li>
                @endforeach
                </ul>
                @endif
                <form action="{{route('PetiteEntreprise.store')}}" method="post"> 
                  @csrf
                    <div class="mb-3">
                      <label for="nom" class="form-label"><strong>Nom</strong></label>
                      <input type="text" id="nom" class="form-control" placeholder="nom" name="nom" value="{{old('nom')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description</strong></label>
                        <input type="text" id="description" class="form-control" placeholder="description" name="description" value="{{old('description')}}">
                      </div>
                      {{-- <div class="mb-3">
                        <label for="listeProjets" class="form-label"><strong>listeProjets</strong></label>
                        <input type="text" id="listeProjets"class="form-control" placeholder="listeProjets" value="" name="listeProjets" value="{{old('listeProjets')}}" >

                      </div> --}}
                      {{-- <a href="{{route('PetiteEntreprise.store')}}"  class="btn btn-primary">Ajouter la voiture</a> --}}
                      <button class="btn btn-info mb-2" type="submit" >Ajouter l'entreprise</button>
                </form>
@endsection