
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


	<form action="#" method="POST">
	@csrf

   <table width="100%" class="table table-bordered">
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
      <th>Fonction</th>
      <th>Téléphone</th>
      <th>Groupes  &nbsp;&nbsp;&nbsp; &nbsp;
        <?php if (Auth::user()->typeusers_code==1) { ?>
          <a href="{{route('contact.addgroup', $contact->id) }}" class="btn btn-success btn-sm">
          <i class="fa fa-plus"></i>
          </a>
        <?php } ?>
          <br/>
      </th>
    </tr>

    @if ($message =Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
      @endif

    <tr>
      <td>{{$contact->nom}}</td>
      <td>{{$contact->prenom}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->fonction}}</td>
      <td>{{$contact->tel}}</td>
      <td>
         <!-- <a href="#" class="btn btn-success btn-sm">Ajouter</a> --> 
         
        @foreach($contact->contactgroups as $contactgroup)
        {{$contactgroup->libelle}} (Priorité : {{$contactgroup->pivot->priority}})
        
        <?php if (Auth::user()->typeusers_code==1) {
          $id_concatrem = $contactgroup->pivot->id.'_'.$contact->id;
          $id_concatedit = $contactgroup->pivot->id.'_'.'1';
        ?>
          
        <a href="{{route('contactgroup.edit', $id_concatedit)}}" class="btn btn-primary btn-sm">
          <i class="fa fa-edit"></i>
        </a>
        
        <a href="{{route('contact.removefromgroup', $id_concatrem)}}" class="btn btn-danger btn-sm">
          <i class="fa fa-trash"></i>
        </a>

      <?php } ?>
      <br/>
        @endforeach
      </td>
    </tr>
  </table><br>

  <div class="pull right"><button><a href="{{route('contact.index')}}">Retour</a></button></div>
</body>

</html>
@endsection
