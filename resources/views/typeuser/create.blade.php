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

<div class="row"></div>
  <form action="{{ route('typeuser.store')}}" method="POST">
  @csrf

  

<div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Nom du type" required>
      @error('name')
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
      <input type="number" name="code" class="form-control @error('code') is-invalid @enderror" value="{{old('code')}}" placeholder="Le code du type utilisateur" required>
      @error('code')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

      <button type="submit" class="btn btn-primary">Enrégistrer</button>
      <button class="btn btn-danger" onclick="history.back()">Annuler</button>
  
</form>
</div>

@endsection