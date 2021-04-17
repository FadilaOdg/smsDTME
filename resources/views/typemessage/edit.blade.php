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
  <form action="{{ route('typemessage.update',$typem->id)}}" method="POST">
  @csrf
  @method ('PATCH')

<div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      <input value="{{$typem->nom}}" type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom du type" required>
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
      <input value="{{$typem->codem}}" type="number" name="codem" class="form-control @error('codem') is-invalid @enderror" placeholder="Le code du type de message" required>
      @error('codem')
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