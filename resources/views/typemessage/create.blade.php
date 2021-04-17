@extends('layouts.principal')

@section('contain')

<div class="row">

<div class="row"></div>
  <form action="{{ route('typemessage.store')}}" method="POST">
  @csrf

<div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" placeholder="Nom du type" >
      @error('nom')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

<div class="row">
    <div class="col-sm-2">
      <strong>Code</strong>
    </div>
    <div class="col-sm-4">
      <input type="number" name="codem" class="form-control @error('codem') is-invalid @enderror" value="{{old('codem')}}" placeholder="Le code du type de message" >
      @error('codem')
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