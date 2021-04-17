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

        <h2>Affecter le contact aux groupes</h2>
        
      </div><br><br>


  <form action="{{ route('contact.ajoutgroupe')}}" method="POST">
  @csrf
  @method ('POST')
  <br><br><div class="row">
    <div class="col-sm-2">
      <strong>Priorité</strong>
    </div>
    <div class="col-sm-4">
      <input type="number" name="priority" class="custom-select @error('priority') is-invalid @enderror">
     
      @error('priority')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br><br>

  <div class="row">
    <div class="col-sm-2">
      <strong>Nom</strong>
    </div>
    <div class="col-sm-4">
      @foreach($groupe as $groupes)
      <input type="checkbox" class="form-checkbox-input" name="contactgroups[]" value="{{$groupes->id}}">{{$groupes->libelle}}</option>
      @endforeach
      </select>
      @error('libelle')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
  </div><br><br>
    
       <div class="col-sm-4">
      <button type="submit" class="btn btn-primary btn-lg">Enrégistrer</button>
      <button class="btn btn-danger" onclick="history.back()">Annuler</button>
    </div>
    
  </div>
</form>
</div>

  </div>
@endsection