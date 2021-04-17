@extends('layouts.principal')

@section('contain')

<div class="row">
  
  <!--<div class="col-md-6 col-md-offset-3">
    @if($errors->any())
    <div class="alert alert-danger"></div>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    @endif
  </div>-->
 
  <div class="full-right">

        <h2>AJOUT A UN GROUPE</h2>
        
      </div>
      <br><br><br>

<div class="mx-auto">
  <form action="{{route('contact.addtogroup')}}" method="POST">
  @csrf

  <div class="row">
    <div class="col-sm-2">
      <strong>Informations du contact </strong>
    </div>
    <div class="col-sm-4">
       Nom et Prénom (s) : {{$contact->nom}} {{$contact->prenom}}
       <br>
       Fonction : {{$contact->fonction}}
       <br>
       Téléphone : {{$contact->tel}}
    </div>
  </div><br>

        <input value="{{$contact->id}}" type="hidden" name="contacts_id">

  <div class="row">
    <div class="col-sm-2">
      <strong>Groupe de contact</strong>
    </div>
    <div class="col-sm-4">
      <select name="groups_id" class="custom-select @error('groups_id') is-invalid @enderror">
      @foreach($groups as $group)
      <option value="{{$group->id}}">{{$group->libelle}}</option>
      @endforeach
      </select>
      @error('group_id')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>
  
  <div class="row">
    <div class="col-sm-2">
      <strong>Priorité </strong> : entre 0 (plus faible) et 15 (plus fort)
    </div>
    <div class="col-sm-4">
      <input type="number", min="0", step="1" max="15", name="priority" class="form-control @error('priority') is-invalid @enderror" value="{{old('priority')}}" placeholder="Priorité d'envoi des SMS du group" required>
      @error('priority')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>



    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">Enrégistrer</button>
      
      <button class="btn btn-danger" onclick="history.back() ">Annuler</button>
    </div>
  </div>
</form>

  </div>

    
@endsection