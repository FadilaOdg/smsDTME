@extends('layouts.principal')

@section('contain')


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMS DTME</title>

  <!-- Custom fonts for this template-->
  
  <!-- Custom styles for this template-->


  <link href="/assets/newsms/style.css" rel="stylesheet">


</head>

<body>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        
        <div class="row">
          <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
          <div class="col-lg-7">
            <div class="p-5">
              <!--<div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">NOUVEAU MESSAGE</h1>
              </div><br><br>-->
              <form class="user" action="{{route('newsms')}}" method="POST">
<fieldset>
 <legend>ENVOYER MESSAGE</legend>

<div><select type="text" class="form-control" id="telephone">
                      <option selected="liste">Liste des contacts</option>
                        <option>+70253601</option>
                        <option>+78210304</option>
                        <option>+51142348</option>
                        <option>+52040307</option>
                    </select>
                  </div><br><br>

  <div class="col-lg-6 text-center">
    <a href="{{route('modele.index')}}"><button type="button" class="btn btn-outline-danger btn-lg"><strong>Utiliser un modèle</strong></button></a>
</div><br><br>

  
  <div> <textarea name="messages" type="text" cols="" rows="10" placeholder="Régiger votre message">
   </textarea></div>
</fieldset>

 <p>
 <input type="submit" value="Envoyer" />
 <input type="reset" value="Annuler" />
 </p>
                
              </form>
              <hr>
              <!--<div class="text-center">
                <a class="small" href="#">Forgot Password?</a>
              </div>
              <div class="text-center">
                <p>Assurer vous d'avoir bien saisis toute les informations!</p>
              </div>-->
            </div>
          </div>
        </div>
      
      </div>
    </div>

  </div>



</body>

</html>
@endsection