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
	<div class="full-right">

        <h2>AJOUT DE MODELES</h2>
        
      </div><br><br>


	<form action="{{ route('modele.store')}}" method="POST">
	@csrf

	<br><br>
<div class="row">
		<div class="col-sm-2">
			<strong>Type de message</strong>
		</div>
		<div class="col-sm-4">
			<select name="typemessages_codem" class="custom-select @error('typemessages_codem') is-invalid @enderror" required>
			
			@foreach($typemessage as $typemessages)
			<option value="{{$typemessages->codem}}">{{$typemessages->nom}}</option>
			@endforeach
			</select>
			@error('typemessages_codem')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>

	</div><br>

	<div class="row">
		<div class="col-sm-2">
			<strong>Message</strong>
		</div>
		<div class="col-sm-4">
			<textarea cols="20" rows="10" type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" placeholder="Corps du message" required></textarea>
			   @error('libelle')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
		</div>
	</div><br>

		<div class="col-sm-4">
			<button type="submit" class="btn btn-primary btn-lg">Enrégistrer</button>
			<button class="btn btn-danger" onclick="history.back()">Annuler</button>

		</div>
	</div>
</form>

</div>

	</div>

		
@endsection