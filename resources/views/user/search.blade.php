@extends('layouts.principal')

@section('contain')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>
<body>
  <div class="row">
    <div class="col-sm-12">	
      <div class="full-right">

        <h2 style="text-align: center">GESTION DES UTILISATEURS</h2>
        
      </div>
    </div>
  </div><br><br>

  <table width="100%" class="table table-bordered">
    <tr>
      <th>N°</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Fonction</th>
      <th>Département</th>
      <th>Service</th>
      <th>Division</th>
      <th>Téléphone</th>
      <th>Email</th>
      <th>Role</th>

        
      <th class="text-center"> <a href="{{ route('user.create') }}" class="btn btn-success btn-sm">
          <i class="fa fa-plus"></i>
        </a></th>
        

    </tr>
    @if ($message =Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
      @endif

    
    @foreach($user as $users)

    <tr>
      <td>{{$users->id}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->prenom}}</td>
      <td>{{$users->fonction}}</td>
      <td>{{$users->departement}}</td>
      <td>{{$users->service}}</td>
      <td>{{$users->division}}</td>
      <td>{{$users->telephone}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->typeuser->name}}</td>

      <td>
        <a href="{{route ('user.edit',$users->id)}}" class="btn btn-primary btn-sm">
          <i class="fa fa-edit"></i>
        </a>

        <form method="POST" action="{{route('user.destroy',$users->id)}}" style="display: inline;" >
          {{ csrf_field()}}
          {{method_field('DELETE')}}
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i>
          </button>
        </form>      
      </td>

    </tr>
    @endforeach
  </table>

 <br><button class="btn btn-danger" onclick="history.back() ">Retour</button>
 
</body>

</html>

@endsection