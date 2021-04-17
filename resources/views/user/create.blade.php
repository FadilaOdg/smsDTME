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

        <h2>AJOUT DES UTILISATEURS</h2>
        
      </div><br><br>


	<form action="{{ route('user.store')}}" method="POST">
	@csrf

	<br><br><div class="row">
		
		<div class="col-sm-2">
			<strong>Nom</strong>
		</div>
		<div class="col-sm-4">
			<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Nom" required>
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
			<strong>Département</strong>
		</div>
		<div class="col-sm-4">
			<input type="text" name="departement" class="form-control @error('departement') is-invalid @enderror" value="{{old('departement')}}" placeholder="Département" required>
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
			<input type="text" name="service" class="form-control @error('service') is-invalid @enderror" value="{{old('service')}}" placeholder="Service" required>
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
			<input type="text" name="division" class="form-control @error('division') is-invalid @enderror" value="{{old('division')}}" placeholder="Division" required>
			@error('division')
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
			<input type="tel" minlength="8" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{old('telephone')}}" placeholder="Téléphone" required>
			@error('telephone')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Adresse Email</strong>
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
			<strong>Mot de passe</strong>
		</div>
		<div class="col-sm-4">
			<input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder="Mot de passe" required>
			@error('password')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Type d'utlisateur</strong>
		</div>
		<div class="col-sm-4">
			<select name="typeusers_code" class="custom-select @error('typeusers_code') is-invalid @enderror">
			@foreach($typeuser as $typeusers)
			<option value="{{$typeusers->code}}">{{$typeusers->name}}</option>
			@endforeach
			</select>
			@error('typeusers_code')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

		
			<button type="submit" class="btn btn-primary btn-lg">Enrégistrer</button>
			<button class="btn btn-danger" onclick="history.back()">Annuler</button>
		
</form>
</div>

@endsection