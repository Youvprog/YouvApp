<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Comptable Dashoard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="\css\comptabledashboardstyle.css">
    <link rel="stylesheet" href="\css\addemployéstyle.css">
    <link rel="stylesheet" href="\css\listemployéstyle.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <script src="https://jspreadsheet.com/v8/jspreadsheet.js"></script>
     <script src="https://jsuites.net/v4/jsuites.js"></script>
     <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
     <link rel="stylesheet" href="https://jspreadsheet.com/v8/jspreadsheet.css" type="text/css" />


    </head>

<body>

  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-nodejs'></i>
      <span class="logo_name">Entreprise</span>
    </div>

    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-table'></i>
            <span class="link_name">Grilles</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Grilles</a></li>
          <li><a href="#">Salaire</a></li>
          <li><a href="#">Fonction</a></li>
          <li><a href="#">Département</a></li>
          <li><a href="#">CNAS</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-spreadsheet'></i>
            <span class="link_name">Plan paie</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plan paie</a></li>
          <li><a href="#">Rubrique salariés</a></li>
          <li><a href="#">Rubrique entreprise</a></li>
          <li><a href="#">Rubrique calculé</a></li>
        </ul>
      </li>

      <li>
        <a href="{{ route('TP') }}">
          <i class='bx bx-money'></i>
          <span class="link_name">Traitement paie</span>
        </a>
      </li>

      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-user-pin'></i>
          <span class="link_name">Employés</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Employés</a></li>
          <li><a href="{{ route('adduser') }}">Ajouter employé</a></li>
          <li><a href="{{ route('listuser') }}">Liste employés</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-receipt'></i>
            <span class="link_name">Bulletins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Bulletins</a></li>
          <li><a href="#">Bulletin de paie</a></li>
          <li><a href="#">Centralisateur</a></li>
          <li><a href="#">Virement bancaire</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Paramètres</span>
        </a>
      </li>
     
    <li>
    <div class="profile-details">
      <div class="profile-content"> </div>
      <div class="name-job">
        <div class="profile_name">{{ Auth::user()->name }}</div>
        <div class="job">Comptable</div>
      </div>  
      </div>
  </li>
</ul>
  </div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      
      <div class="dropdown" style="position: absolute; right:0; margin-right:10px">
        <a href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="kover"src="\images\picture.png" width="50" height="50">
        </a>
        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2" style="background-color:#11101d">
          <li style="vertical-align: middle; "><a class="dropdown-item" href="#">Profile</a></li>
          <li style="vertical-align: middle; "><a class="dropdown-item" href="#">Paramètres</a></li>
          <li style="vertical-align: middle; "><hr class="dropdown-divider"></li>
          <li style="vertical-align: middle; ">
            <a class="dropdown-item" href="#"> 
            <form method="POST" action="{{ route('logout') }}">
              @csrf
               <i class='bx bx-log-out' href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"></i> Déconnexion
           </form>
           </a>
           </li>
        </ul>
      </div>
    </div>
    
    @yield('content')
  </section>


  


  <script src="\js\scriptAddemployé.js"></script>
  <script src="\js\scriptcomptable.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if (session('message'))
<script>
  swal("Succès!!","{!! session('message') !!}",{
    button:"OK",
  })
</script>

@endif


</body>
</html>
