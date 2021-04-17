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

        <h2>AJOUT D'UN CONTACT A UN GROUPE</h2>
        
      </div>
      <br><br><br>

<div class="mx-auto">
  <form action="{{route('group.addtocontact')}}" method="POST">
  @csrf

  <div class="row">
    <div class="col-sm-2">
      <strong>Informations du groupe </strong>
    </div>
    <div class="col-sm-4">
       Nom: {{$groupe->libelle}}
       <br>
       Description: {{$groupe->description}}
      
    </div>
  </div><br>

        <input value="{{$groupe->id}}" type="hidden" name="groups_id">

  <div class="row">
    <div class="col-sm-2">
      <strong>Contact</strong>
    </div>
    <div class="col-sm-4">
      <select name="contacts_id" class="custom-select @error('contacts_id') is-invalid @enderror">
      @foreach($contact as $contacts)
      <option value="{{$contacts->id}}">{{$contacts->nom}} {{$contacts->prenom}} {{$contacts->tel}} {{$contacts->fonction}}</option>
      @endforeach
      </select>
      @error('contacts_id')
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
      <input type="number", min="0", step="1" max="15", name="priority" class="form-control @error('priority') is-invalid @enderror" value="{{old('priority')}}" placeholder="Priorité du contact dans le groupe" required>
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