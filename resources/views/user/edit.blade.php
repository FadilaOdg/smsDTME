
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
	<form action="{{ route('user.update',$user->id)}}" method="POST">
	@csrf
@method ('PATCH')
	<div class="row">
		
		<div class="col-sm-2">
			<strong>Name</strong>
		</div>
		<div class="col-sm-4">
			<input type="text" value="{{ $user->name }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom" required>
			@error('name')
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
			<input value="{{ $user->prenom }}" type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Prénom" required>
			@error('prenom')
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
			<input value="{{ $user->fonction }}" type="text" name="fonction" class="form-control @error('fonction') is-invalid @enderror" placeholder="Fonction" required>
			@error('fonction')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Département</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->departement }}" type="text" name="departement" class="form-control @error('departement') is-invalid @enderror" placeholder="Département" required>
			@error('departement')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Service</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->service }}" type="text" name="service" class="form-control @error('service') is-invalid @enderror" placeholder="Service" required>
			@error('service')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Division</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->division }}" type="text" name="division" class="form-control @error('division') is-invalid @enderror" placeholder="Division" required>
			@error('division')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

	<div class="row">
		<div class="col-sm-2">
			<strong>Type Utlisateur</strong>
		</div>
		<div class="col-sm-4">
			<select name="typeusers_code" class="custom-select @error('typeusers_code') is-invalid @enderror" required>
			<option selected value="{{ $user->typeuser->code }}">{{ $user->typeuser->name }}</option>
			@foreach($typeuser as $typeusers)
			<option value="{{$typeusers->code}}">{{$typeusers->name}}</option>
			@endforeach
			</select>
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