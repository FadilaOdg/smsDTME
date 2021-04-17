@extends('layouts.principal')

@section('contain')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
	
	<div class="row">
		<div class="col-sm-2">
			{!! form::label('name','Name') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{ $errors->has('name') ? 'has-error': "" }} ">
				{{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name','placeholder'=>'Name Post...']) }}
				{{ $errors->first('name', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('prenom','Prenom') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('prenom') ? 'has-error': ""}} ">
				{{ Form::text('prenom',NULL, ['class'=>'form-control', 'id'=>'prenom','placeholder'=>'Prenom Post...']) }}
				{{ $errors->first('prenom', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('fonction','Fonction') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('fonction') ? 'has-error': "" }} ">
				{{ Form::text('fonction',NULL, ['class'=>'form-control', 'id'=>'fonction','placeholder'=>'fonction Post...']) }}
				{{ $errors->first('fonction', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('departement','Departement') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('departement') ? 'has-error': ""}} ">
				{{ Form::text('departement',NULL, ['class'=>'form-control', 'id'=>'departement','placeholder'=>'departement Post...']) }}
				{{ $errors->first('departement', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('service','Service') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('service') ? 'has-error': ""}} ">
				{{ Form::text('service',NULL, ['class'=>'form-control', 'id'=>'service','placeholder'=>'service Post...']) }}
				{{ $errors->first('service', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('division','division') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('Division') ? 'has-error': ""}} ">
				{{ Form::text('division',NULL, ['class'=>'form-control', 'id'=>'division','placeholder'=>'division Post...']) }}
				{{ $errors->first('division', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('telephone','Telephone') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('telephone') ? 'has-error': ""}} ">
				{{ Form::text('telephone',NULL, ['class'=>'form-control', 'id'=>'telephone','placeholder'=>'telephone Post...']) }}
				{{ $errors->first('telephone', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			{!! form::label('email','Email') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('email') ? 'has-error': ""}} ">
				{{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email','placeholder'=>'email Post...']) }}
				{{ $errors->first('email', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="row">
		<div class="col-sm-2">
			{!! form::label('password','Password') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('password') ? 'has-error': "" }} ">
				{{ Form::text('password',NULL, ['class'=>'form-control', 'id'=>'password','placeholder'=>'password Post...']) }}
				{{ $errors->first('password', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

<div class="row">
		<div class="col-sm-2">
			{!! form::label('typeusers_code','Type Utilisateur') !!}
		</div>
		<div class="col-sm-4">
			<div class="form-group {{$errors->has('typeusers_code') ? 'has-error': ""}} ">
				{{ Form::text('typeusers_code',NULL, ['class'=>'form-control', 'id'=>'typeuser_code','placeholder'=>'type utilisateur Post...']) }}
				{{ $errors->first('typeusers_code', '<p class="help-block">:message</p>') }}
				
			</div>
				
		</div>
	</div>

	<div class="form-group">
		{{ Form::button(isset($model)? 'Update' : 'save', ['class'=>'btn btn-success', 'type'=>'submit']) }}
	</div>

</body>

</html>
@endsection