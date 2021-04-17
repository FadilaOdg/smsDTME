@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title></title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">ENVOI DE MESSAGE</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('message.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <label><strong>Sélectionnez Contacts:</strong></label><br>
                                <select class="selectpicker form-control" multiple="true" name="groupids[]">
                                  @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->libelle}}</option>
                                  @endforeach
                                </select>
                            </div><br><br>
                            
                             @foreach($groups->groupcontacts as $groupcontact)
                             {
                                <?php if (Auth::user()->typeusers_code>=2) {
                                    $id_group = $groupcontact->pivot->id.'_'.$groups->id;
                                    $priorite= $groupcontact->pivot->priority.'_'.$groupcontact->contacts_id;
                                }?>
                             }
                             @endforeach
                            

                            <div class="col-lg-8 text-center">
                                <a href="{{route('modele.index')}}"><button type="button" class="btn btn-outline-danger btn-lg"><strong>Utiliser un modèle</strong></button></a>
                            </div><br><br>

  
  <div> <textarea name="libelle" type="text" class="form-control" cols="75" rows="10" placeholder="Régiger votre message">
   </textarea></div>
                            
                            <div class="text-center" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-success">Envoyer</button>
                                <button type="#" class="btn btn-danger">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
  
<!-- Initialize the plugin:--> 
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>
  
</html>

@endsection