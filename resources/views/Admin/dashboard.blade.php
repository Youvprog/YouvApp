<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard</title>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="\css\dashboardAdminStyle.css">   
    <link rel="stylesheet" href="\css\addemployéstyle.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-data' ></i>
      <span class="logo_name">Admin Panel</span>
    </div>

    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Utilisateurs</a></li>
        </ul>
      </li>

      
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Utilisateurs</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Utilisateurs</a></li>
          <li><a href="{{ route('utilisateur') }}">Ajouter</a></li>
          <li><a href="{{ route('UserList') }}">Liste</a></li>
         
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Entreprises</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Entreprises</a></li>
          <li><a href="#">Ajouter</a></li>
          <li><a href="#">Liste</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Param Sys</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Paramètres système</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content"></div>
      
      <div class="name-job">
        <div class="profile_name">{{ Auth::user()->name }}</div>
        <div class="job">Administrateur</div>
     </div>
    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
         <i class='bx bx-log-out' href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"></i> 
     </form>
     
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
   
    <div class="home-content" style="margin-left: 5px">
      <i class='bx bx-menu' style='color:#ffffff'  ></i>
      <span class="text"></span>
     </div>
     
          <div id="demo">

          </div>


    @yield('content2')
  </section>     

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<script src="\js\dashboardADMIN.js"></script>
<script src="\js\datable.js"></script>



</body>
</html>