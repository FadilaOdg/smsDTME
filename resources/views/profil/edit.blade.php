
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
<div class="row"></div>
	<form action="{{ route('profil.update',$user->id)}}" method="POST">
	@csrf
@method ('PATCH')
	<div class="row">
		
		<div class="col-sm-2">
			<strong>Name</strong>
		</div>
		<div class="col-sm-4">
			<input type="text" value="{{ $user->name }}" name="name" class="form-control" placeholder="Nom" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Prénom</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->prenom }}" type="text" name="prenom" class="form-control" placeholder="Prénom" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Fonction</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->fonction }}" type="text" name="fonction" class="form-control" placeholder="Fonction" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Département</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->departement }}" type="text" name="departement" class="form-control" placeholder="Département" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Service</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->service }}" type="text" name="service" class="form-control" placeholder="Service" required>
		</div>
</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Division</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->division }}" type="text" name="division" class="form-control" placeholder="Division" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Téléphone</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->telephone }}" type="text" name="telephone" class="form-control" placeholder="Téléphone" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Email</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->email }}" type="email" name="email" class="form-control" placeholder="Email" required>
		</div>
	</div><br>

<div class="row">
		<div class="col-sm-2">
			<strong>Password</strong>
		</div>
		<div class="col-sm-4">
			<input value="{{ $user->password }}" type="text" name="password" class="form-control" placeholder="Mot de passe" required>
		</div>
	</div><br>

<!--<div class="row">
		<div class="col-sm-2">
			<strong>Type Utlisateur</strong>
		</div>
		<div class="col-sm-4">
			<select type="text" name="typeusers_code" class="form-control" required>
			<option selected="type">{{ $user->typeusers_code }}</strong></option>
			<option>Administrateur</option>
			<option>Manager</option>
			<option>Opérateur</option>
			<option>prévisionniste</option>
			</select>
		</div>
	</div><br>-->

		<div class="col-sm-4">
			<button type="submit" class="btn btn-primary">Enrégistrer les modifications</button>
			<!--<a href="{{route('user.index')}}"><button type="submit" class="btn btn-primary">Annuler</button></a>-->
		</div>
	</div>
</form>

	</div>

		
@endsection