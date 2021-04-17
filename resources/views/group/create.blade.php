@extends('layouts.principal')

@section('contain')

<div class="row">
  <div class="col-md-6 col-md-offset-3">

    @if($errors->any())
    <div class="alert alert-danger"></div>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
    @endif
  </div>

  <div class="full-right">

        <h2>AJOUT DE GROUPE DE CONTACT</h2>
        
      </div>
      <br><br><br>

<div class="mx-auto">
  <form action="{{ route('group.store')}}" method="POST">
  @csrf

  <div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" value="{{old('libelle')}}" placeholder="Nom du groupe" required>
      @error('libelle')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

   <div class="row">
    <div class="col-sm-2">
      <strong>Description</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" placeholder="Décrire le groupe">
      @error('description')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>



    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">Enrégistrer</button>
      
      <button class="btn btn-danger" onclick="history.back()">Annuler</button>
    </div>
  </div>
</form>

  </div>

    
@endsection
