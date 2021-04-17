@extends('layouts.principal')

@section('contain')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head></head>
<body>
  <div class="row">
    <div class="col-sm-12"> 
      <div class="full-right">

        <h2 style="text-align: center">CONTACTS</h2>
        
      </div>
    </div>
  </div><br>

  <table width="100%" class="table table-bordered">
    <tr>
      <th>N°</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Email</th>
      <th>Fonction</th>
      <th>Téléphone</th>
     <?php if (Auth::user()->typeuser->code==1) { ?>
      <th class="text-center"> <a href="{{ route('contact.create') }}" class="btn btn-success btn-sm">
          <i class="fa fa-plus"></i>
        </a></th>
      <?php } ?>
  
    </tr>
    @if ($message =Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
      @endif
    
    <?php $i=1; ?>
    
    @foreach($contact as $contacts)
    <tr>      
<td><?php echo $i; $i++ ?></td>
      <td>{{$contacts->nom}}</td>
      <td>{{$contacts->prenom}}</td>
      <td>{{$contacts->email}}</td>
      <td>{{$contacts->fonction}}</td>
      <td>{{$contacts->tel}}</td>

       <?php if (Auth::user()->typeusers_code==1) { ?>
      <td>
        <a href="{{route('contact.show',$contacts->id)}}" class="btn btn-secondary btn-sm">
          <i class="fa fa-eye"></i>
        </a> 
       
        <a href="{{route('contact.edit',$contacts->id)}}" class="btn btn-primary btn-sm">
          <i class="fa fa-edit"></i>
        </a> 

        <form method="POST" action="{{route('contact.destroy',$contacts->id)}}" style="display: inline;" >
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
