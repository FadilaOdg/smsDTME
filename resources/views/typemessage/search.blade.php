@extends('layouts.principal')

@section('contain')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>
<body>
  <div class="row">
    <div class="col-sm-12"> 
      <div class="full-right">

        <h2 style="text-align: center">TYPES DE MESSAGES</h2>
        
      </div>
    </div>
  </div><br>

  <table width="100%" class="table table-bordered">
    <tr>
      <th>N°</th>
      <th>Nom</th>
      <th>Code</th>
        <?php if (Auth::user()->typeuser->code==1) { ?>
      <th class="text-center"> <a href="{{route('typemessage.create')}}" class="btn btn-success btn-sm">
          <i class="fa fa-plus"></i>
        </a>
         <?php } ?>
    </tr>

    @if ($message =Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
      @endif

    
    @foreach($typem as $typems)

    <tr>
      <td>{{$typems->id}}</td>
      <td>{{$typems->nom}}</td>
      <td>{{$typems->codem}}</td>

       <?php if (Auth::user()->typeuser->code==1) { ?>
      <td>
        <a href="{{route('typemessage.edit',$typems->id)}}" class="btn btn-primary btn-sm">
          <i class="fa fa-edit"></i>
        </a>  

        <form method="POST" action="{{route('typemessage.destroy',$typems->id)}}" style="display: inline;" >
          {{ csrf_field()}}
          {{method_field('DELETE')}}
       <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i>
          </button>
        </form>    
      </td>
         <?php } ?>

    </tr>
    @endforeach
  </table>

  <br><button class="btn btn-danger" onclick="history.back() ">Retour</button>
  
</body>

</html>

@endsection