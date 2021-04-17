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

        <div class="col-sm-2">
          <form action="{{route('typemessage.rechercher')}}" class="d-flex mb-0">
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
       <?php if (Auth::user()->typeuser->code==1) { ?>
      <th>Code</th>
        <?php } ?>
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

    <?php $i=1; ?>    
    @foreach($typem as $typems)

    <tr>
     <td><?php echo $i; $i++ ?></td>
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
</body>

</html>

@endsection