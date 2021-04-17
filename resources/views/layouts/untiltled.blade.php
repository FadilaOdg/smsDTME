<?php if (Auth::user()->typeusers_code==0) { ?>
               <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>ADMIN</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!--<h6 class="collapse-header">Login Screens:</h6>-->
                        <a class="collapse-item" href="{{route('user.index')}}">Gestion des Utilisateurs</a>
                        <a class="collapse-item" href="{{route('typeuser.index')}}">Gestion des Types d'Utilisateurs</a>
                       
                        <a class="collapse-item" href="#">Paramètres</a>
                    </div>
                </div>
            </li>
            <?php } ?>