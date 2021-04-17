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
  <form action="{{ route('contact.update',$contact->id)}}" method="POST">
  @csrf
  
  @method ('PATCH')

<div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input value="{{$contact->nom}}" type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom du contact" required>
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
      <input value="{{$contact->prenom}}" type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Le Prénom du contact" required>
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
      <input value="{{$contact->email}}" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="L'adresse email du contact" required>
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
      <input value="{{$contact->fonction}}" type="text" name="fonction" class="form-control @error('fonction') is-invalid @enderror" placeholder="La fonction du contact" required>
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
      <input value="{{$contact->tel}}" type="tel" minlength="8" name="tel" class="form-control @error('tel') is-invalid @enderror" placeholder="Le telephone du contact" required>
      @error('tel')
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