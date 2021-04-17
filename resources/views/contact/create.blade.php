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

        <h2>AJOUT DE CONTACT</h2>
        
      </div>
      <br><br><br>

<div class="mx-auto">
  <form action="{{ route('contact.store')}}" method="POST">
  @csrf

  <div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{old('nom')}}" placeholder="Nom" required>
       @error('nom')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

<div class="row">
    <div class="col-sm-2">
      <strong>Prénom</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{old('prenom')}}" placeholder="Prénom" required>
      @error('prenom')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

  <div class="row">
    <div class="col-sm-2">
      <strong>Email</strong>
    </div>
    <div class="col-sm-4">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email" required>
      @error('email')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

<div class="row">
    <div class="col-sm-2">
      <strong>Fonction</strong>
    </div>
    <div class="col-sm-4">
      <input type="text" name="fonction" class="form-control @error('fonction') is-invalid @enderror" value="{{old('fonction')}}" placeholder="Fonction" required>
      @error('fonction')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br>

<div class="row">
    <div class="col-sm-2">
      <strong>Téléphone</strong>
    </div>
    <div class="col-sm-4">
      <input type="tel" minlength="8"  name="tel" class="form-control @error('tel') is-invalid @enderror" value="{{old('tel')}}" placeholder="+22670253262" required>
      @error('tel')
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