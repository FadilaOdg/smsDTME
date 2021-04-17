@extends('layouts.app')
<br><br>
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <!--<link rel="shortcut icon" href="/assets/admin/img/icons/icon-48x48.png" />
  <link href="/assets/admin/essai/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

  <title>SMS DTME</title>

  <link href="/assets/admin/essai/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="/assets/admin/css/app.css" rel="stylesheet">

</head>

<body>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar">
      <div class="sidebar-content js-simplebar">
        <p class="sidebar-brand">
          <span class="align-middle">SMS DTME</span>
        </p>
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

           
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Accueil</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
           

            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static">
          <i class="fas fa-fw fa-envelope"></i>
                    <span>Boite d'Envoi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Messages Envoyés</a>
          <a class="dropdown-item" href="#">Messages En cours d'Envoi</a>
          <a class="dropdown-item" href="#">Messages Non Envoyés</a>
        </div>
      </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Messages</span>
                </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <?php if (Auth::user()->typeuser->code>=2) { ?>
                        <a class="dropdown-item" href="{{route('message.create')}}">Nouveaux Messages</a>
                        <?php } ?>

                         <?php if (Auth::user()->typeuser->code>=2) { ?>
                        <a class="dropdown-item" href="{{route('modele.index')}}">Modèles</a>
                         <?php } ?>

                          <?php if (Auth::user()->typeuser->code<=1) { ?>
                        <a class="dropdown-item" href="{{route('typemessage.index')}}">Types de Messages</a>
                        <?php } ?>
                        
                        <a class="dropdown-item" href="#">Messages Programmés</a>
                         <a class="dropdown-item" href="#">Messages Reçus</a>
                    </div>
                
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static">
                   <i class="fas fa-fw fa-address-book"></i>
                    <span>Contacts</span>
                </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('contact.index')}}">Liste de Contacts</a>
                        
                        <a class="dropdown-item" href="{{route('group.index')}}">Groupe de Contacts</a>
                        
                    </div>
            </li>
          
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Historiques</span></a>
            </li>

            <?php if (Auth::user()->typeuser->code==0) { ?>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>ADMIN</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="{{route('user.index')}}">Gestion des Utilisateurs</a>
                        <a class="dropdown-item" href="{{route('typeuser.index')}}">Gestion des Types d'Utilisateurs</a>
                       
                        <a class="dropdown-item" href="#">Paramètres</a>
                    </div>
            </li>
            <?php } ?>


        </ul>

      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

<!--<div class="col-sm-2">
       <form class="d-none d-sm-inline-block">
          <div class="input-group input-group-navbar">
            <input type="text" class="form-control" placeholder="Rechercher…" aria-label="Search">
            <button class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
          </div>
        </form></div><br>-->
        
        
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            
           
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link d-none d-sm-inline-block" data-toggle="dropdown">
                <img src="/assets/admin/img/avatars/back5.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark"></span>
                <li><a href="{{url('/profil/edit')}}">Modifier Profil</a></li>
              </a>
          
            </li>
          </ul>
        </div>
      </nav>

      <main class="content">
        <div class="container-fluid p-0">
          
          @yield('contain')
          
          </div> 
      </main>
      </div>
    </div>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-left">
              <p class="mb-0">
                <a href="#" class="text-muted"><strong>SONABEL</strong></a> &copy;
              </p>
            </div>
            
          </div>
        </div>
      </footer>
   
</div>
   

     <script src="/assets/admin/js/app.js"></script>

</body>

</html>
@endsection