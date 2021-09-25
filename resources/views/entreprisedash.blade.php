<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Choix de l'entreprise</title>
    <link rel="stylesheet" href="css\entreprisedashstyle.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div style="margin-bottom: 850px; position:absolute; right:0; margin-right:10px; align-items:center">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <i style="font-size: 25px;
     
        line-height: 50px;
        cursor: pointer; margin-right:10px" class='bx bx-log-out' href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"></i> 
      </form>
  </div>
  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">

      <div class="cards">
      
        <div class="card" onclick="location.href='{{ route('IENP') }}';" style="cursor: pointer;">
         <div class="content">
           <div class="img">
             <img src="images/img7.png" alt="">
           </div>
           <div class="details">
             <div class="name">Entreprise A</div>
             <div class="job">infos</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
           </div>
         </div>
        </div>
       

        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img7.png" alt="">
           </div>
           <div class="details">
             <div class="name">Entreprise B</div>
             <div class="job">infos</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
           </div>
         </div>
        </div>

        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img7.png" alt="">
           </div>
           <div class="details">
             <div class="name">Entreprise C</div>
             <div class="job">infos</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
           </div>
         </div>
        </div>

      </div>


      <div class="cards">

        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img7.png" alt="">
           </div>
           <div class="details">
             <div class="name">Entreprise D</div>
             <div class="job">infos</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
           </div>
         </div>
        </div>

        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img7.png" alt="">
           </div>
           <div class="details">
             <div class="name">Entreprise E</div>
             <div class="job">infos</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
           </div>
         </div>
        </div>

        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/img7.png" alt="">
           </div>
           <div class="details">
             <div class="name">Entreprise F</div>
             <div class="job">infos</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
           </div>
         </div>
        </div>
      </div>
    </div>

    <div class="button">
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
    </div>

    

  
</div>
</body>
</html>
