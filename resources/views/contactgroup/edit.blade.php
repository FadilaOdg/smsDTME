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

       
         <h2>MOFIFICATION DES LIENS D'UN CONTACT DANS UN GROUPE</h2>
      </div>
      <br><br><br>

<div class="row"></div>
  <form action="{{ route('contactgroup.update',$contactgroup->id)}}" method="POST">
  @csrf
  
  @method ('PATCH')
  <input value="{{$flag}}" type="hidden" name="flag">
  <div class="row">
    <div class="col-sm-1">
      
    </div>
    <div class="col-sm-3">
      <strong>Informations du contact </strong>
      <br>
        - Nom et Prénom (s) : {{$contactgroup->contact->nom}} {{$contactgroup->contact->prenom}}
      <br>
        - Fonction : {{$contactgroup->contact->fonction}}
      <br>
        - Téléphone : {{$contactgroup->contact->tel}}
    </div>
  </div><br>
   <input value="{{$contactgroup->contacts_id}}" type="hidden" name="contacts_id">

<div class="row">
    <div class="col-sm-1">
      
    </div>
    <div class="col-sm-3">
      <strong>Nom du groupe</strong> : {{$contactgroup->group->libelle}} 
    </div>
  </div><br>
   <input value="{{$contactgroup->groups_id}}" type="hidden" name="groups_id">

  <div class="row">
    <div class="col-sm-1">
      
    </div>
    <div class="col-sm-3">
      <strong>Priorité d'envoi de SMS à ce contact dans le groupe</strong> : de 0 (faible) à 15 (forte)
      <input value="{{$contactgroup->priority}}" type="number" min="0" max="15" name="priority" class="form-control @error('code') is-invalid @enderror" placeholder="Priorité d'envoi des SMS" required>
      @error('code')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>
  
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">Enrégistrer</button>
    </div>
</form>
</div>
<div class="col-sm-4">
 <button class="btn btn-danger" onclick="history.back()">Annuler</button>
</div>


    
@endsection