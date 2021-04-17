@extends('layouts.principal')

@section('contain')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>
<body>
  <div class="row">
    <div class="col-sm-12"> 
      <div class="full-right">

        <h2>TYPES D'UTILISATEURS</h2>
        
      </div>
    </div>
  </div>

  <table width="100%" class="table table-bordered">
    <tr>
      <th>N°</th>
      <th>Nom</th>
      <th>Code</th>
    
      <th class="text-center"> <a href="{{route('typeuser.create')}}" class="btn btn-success btn-sm">
          <i class="fa fa-plus"></i>
        </a>
  
    </tr>
    @if ($message =Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
      @endif

    
    @foreach($type as $types)

    <tr>
      <td>{{$types->id}}</td>
      <td>{{$types->name}}</td>
      <td>{{$types->code}}</td>
    
      <td>
        <a href="{{route('typeuser.edit',$types->id)}}" class="btn btn-primary btn-sm">
          <i class="fa fa-edit"></i>
        </a>  

        <form method="POST" action="{{route('typeuser.destroy',$types->id)}}" style="display: inline;" >
          {{ csrf_field()}}
          {{method_field('DELETE')}}
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i>
          </button>
        </form>
      </th>    
      </td>

    </tr>
    @endforeach
  </table>

  <br><button class="btn btn-danger" onclick="history.back() ">Retour</button>
</body>

</html>

@endsection