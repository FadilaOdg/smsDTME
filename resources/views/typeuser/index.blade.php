@extends('layouts.principal')

@section('contain')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>
<body>
  <div class="row">
    <div class="col-sm-12"> 
      <div class="full-right">

         <h2 style="text-align: center">TYPES D'UTILISATEURS</h2>

        <div class="col-sm-2">
          <form action="{{route('typeuser.recherche')}}" class="d-flex mb-0">
            <div class="form-group mb-0 mr-1">
              <input type="text" name="q" class="form-control" value="{{request()->q ?? ''}}" placeholder="Rechercher">
            </div>
            <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div><br>
        
      </div>
    </div>
  </div><br>

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

    <?php $i=1; ?>
    @foreach($type as $types)

    <tr>
      <td><?php echo $i; $i++ ?></td>
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
</body>

</html>

@endsection