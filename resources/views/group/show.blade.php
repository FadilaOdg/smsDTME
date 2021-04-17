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
	<form action="#" method="POST">
	@csrf

   <table width="100%" class="table table-bordered">
    <tr>
     
      <th>Nom</th>
      <th>Description</th>
      <th>Contacts  &nbsp;&nbsp;&nbsp; &nbsp;
        <?php if (Auth::user()->typeusers_code==1) { ?>
          <a href="{{route('group.addcontact', $groupe->id) }}" class="btn btn-success btn-sm">
          <i class="fa fa-plus"></i>
          </a>
        <?php } ?>
      </th>
      
  
    </tr>
    @if ($message =Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
      @endif
 
    <tr>

      <td>{{$groupe->libelle}}</td>
      <td>{{$groupe->description}}</td>
      <td>
        @foreach($groupe->groupcontacts as $groupcontact)
        {{$groupcontact->nom}} {{$groupcontact->prenom}} Tél : {{$groupcontact->tel}} (Priorité : {{$groupcontact->pivot->priority}})
        <?php if (Auth::user()->typeusers_code==1) {
          $id_concatrem = $groupcontact->pivot->id.'_'.$groupe->id;
          $id_concatedit = $groupcontact->pivot->id.'_'.'0';
        ?>
          <a href="{{route('contactgroup.edit', $id_concatedit)}}" class="btn btn-primary btn-sm">
          <i class="fa fa-edit"></i>
          </a>
        
          <a href="{{route('group.removefromgroup', $id_concatrem)}}" class="btn btn-danger btn-sm">
          <i class="fa fa-trash"></i>
          </a>
          <br/>
        <?php } ?>

        @endforeach
      </td>
    </tr>
    
  </table>
    <div class="pull right"><button><a href="{{route('group.index')}}">Retour</a></button></div>
</body>

</html>
@endsection
