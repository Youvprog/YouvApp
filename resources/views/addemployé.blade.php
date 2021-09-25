@extends('comptabledash')

@section('content')


<div class="container">
    <div class="title">Ajouter un Employé</div>
    <div class="content">
      
      <form action="addemp" method="POST" id="adde">
        @csrf
        <div class="ENP-details">
          <div class="input-box">
            <span class="details">Nom</span>
            <input type="text" name ="NomEp" placeholder="Nom de l'employé" required>
          </div>

          <div class="input-box">
            <span class="details">Prénom</span>
            <input type="text" name="PrénomEp" placeholder="Prénom de l'employé" required>
          </div>

          <div class="input-box">
            <span class="details">Matricule</span>
            <input type="text" name="MatriculeEp" placeholder="Matricule de l'employé"required>
          </div>
          
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="emailEp" placeholder="Email de l'employé"required>
          </div>

          <div class="input-box">
            <span class="details">N°Téléphone</span>
            <input type="text" name="telEp" placeholder="N°téléphone de l'employé"required>
          </div>

          <div class="input-box">
            <span class="details">Date de naissance</span>
            <input type="date" name="dateCEp" placeholder="Date de naissance employé"required>
          </div>

          <div class="input-box">
            <span class="details">Lieu de naissance</span>
            <input type="text" name="LieuDN" placeholder="Lieu de naissance"required>
          </div>

          <div class="input-box">
            <span class="details">N° Enfant en charge</span>
            <input type="text" name="enfantEN" placeholder="Nombre enfant en charge">
          </div>

          <div class="input-box">
            <span class="details">N° acte de naissance</span>
            <input type="text" name="ActN" placeholder="N°acte de naissance employé"required>
          </div>

          <div class="input-box">
            <span class="details">CIN Nationnal</span>
            <input type="text" name="CIN" placeholder="N°carte d'identité">
          </div>

          <div class="input-box">
            <span class="details">N° passport</span>
            <input type="text" name="Npass" placeholder="N°passport">
          </div>

          <div class="input-box">
            <span class="details">Groupage</span>
            <input type="text" name="sang" placeholder="Groupage employé"required>
          </div>

          <div class="input-box">
              <span class="details">Nationalité</span>
              <select class="country" name="countries" id="countries"></select>
          </div>

          
          

        </div>

        <div class="SF-details">
            <input type="radio" name="SF" id="dot-1" value="Célibataire">
            <input type="radio" name="SF" id="dot-2" value="Marié(e)">

            <span class="SF-title">Situation familialle</span>
            <div class="category">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="SF">Célibataire</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="SF">Marié(e)</span>
            </label>
            
            </div>
          </div>
        
        <div class="button">
          <input id="redirect" type="submit" value="Valider">
          <script>
           document.querySelector('#redirect')
              .addEventListener('click',()=> {
                  window.location.href='{{ route('listuser') }}';
              });
          </script>
           
          
        </div>
      </form>
    </div>
  </div>
    

     
  

@endsection