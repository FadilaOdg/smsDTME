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
  </div>--->

<div class="row"></div>
  <form action="{{ route('group.update',$groupe->id)}}" method="POST">
  @csrf
  @method ('PATCH')

<div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input value="{{$groupe->libelle}}" type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" placeholder="Nom du groupe de contact" required>
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
      <input value="{{$groupe->description}}" type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="La description du groupe contact">
       @error('description')
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
