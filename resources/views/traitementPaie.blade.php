@extends('comptabledash')

@section('content')

<div class="container">
    <div class="title"> Traitement de la paie</div>
    <div class="content">
     
      <form method="POST" action="addUser">
          @csrf
      <div class="ENP-details">
        <div class="input-box">
            <span class="details"> Choisissez un/plusieurs employé(s) </span>
             <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               Sélectionner
             </button>
           </div>
         
         <div class="input-box">
              <span class="details">Date du traitement</span>
              <input type="Date" required autofocus>
            </div>

          
            <div class="input-box" >
              <span class="details">Taux CNAS</span>
              <select class="country" >
                  <option>--Selectionner un taux--</option>
                  <option>26%</option>
                  <option>16%</option>
                  <option>13%</option>
                  <option>7%</option>
              </select>
            </div>

            <div class="input-box">
                <span class="details">Mode de calcul de l'IRG</span>
                <select class="country" >
                    <option>--Selectionner un taux--</option>
                    <option>16%</option>
                    <option>23%</option>
                    <option>24%</option>
                    <option>30%</option>
                </select>
              </div>

              <div class="input-box">
                <span class="details">Nombre J ouvrable</span>
                <input type="text">
            
            </div>

            <div class="input-box">
                <span class="details">Nombre H ouvrable</span>
                <input type="text">
            
            </div>
             
           
        
           
            <div class="Info-virement" style="width: 32%; border-style: solid; border-width:1px; border-radius:10px">
            <div class="input-box">
                <span class="details" style="width:350%;margin-left:5px">Type de virement</span>
                <select class="country" style="width:350%;margin-left:5px">
                    <option>--Selectionner le type de virement--</option>
                    <option >Virement CCP</option>
                    <option >Virement bancaire</option>
                    <option >Par chèque</option>
                    <option >Cache</option>
                </select>
            </div>

            <div class="input-box">
                <span class="details" style="width:350%;margin-left:5px">N°Compte</span>
                <input type="text" style="width:350%;margin-left:5px">
            
            </div>

            <div class="input-box">
                <span class="details" style="width:350%;margin-left:5px"> Banque entreprise</span>
                <select class="country" style="width:350%;margin-left:5px"> 
                    <option>Banque 1</option>
                    <option>Banque 2</option>
                    <option>Banque 3</option>
                </select>

            </div>

            <div class="input-box" >
                <span class="details" style="width:350%; margin-left:5px"> N°Compte employé</span>
                <input type="text" style="width:350%;margin-left:5px">

            </div>
            </div>

            <div style="width: 32%; border-style: solid; border-width:1px; border-radius:10px">
              <h5 style="margin-left:5px">Statut Salarié</h5>
                  <div style="width:60%">
                    <div class="SF-details">
                      <input type="radio" name="SF" id="dot-1" value="actif">
                      <input type="radio" name="SF" id="dot-2" value="congé">
          
                      <div class="category">
                        <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="SF">Actif</span>
                      </label>
                      <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="SF">Congé</span>
                      </label>
                      
                      </div>
                    </div>
                  </div>     
            </div>
            
            <div style="width: 32%; border-style: solid; border-width:1px; border-radius:10px">
              <h5>Profile de calcul</h5>
              <select class="country"> 
                <option>--Selectionner le profile de calcul--</option>
                <option>Mensuel</option>
                <option>Horaire</option>
                <option>Journalier</option>
            </select>

            <a href="#"type="button" class="btn btn-dark" style="margin-top: 10px; margin-left:5px" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" >
              Rubriques
            </a>
            </div>
          </div> 

          <div class="button"> 
              <input id="userBTNsub" type="submit" value=" {{ __('Calculer') }}">
          </div>

      </form>
  </div>
</div>


  <!-- Modal employé -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Sélectionner les employés</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            @foreach ($chicks as $chi )
                <input type="checkbox">
                <label> {{ $chi['Nom'] }}</label>
                <label> {{ $chi['Prénom'] }}</label>
                <br></br>
            @endforeach

            
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary">Confirmer</button>
        </div>
      </div>
    </div>
  </div>
  
  
   <!-- Modal rubrique -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Sélectionner les rubriques</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div id="spreadsheet"> </div>
 
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary">Confirmer</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    jspreadsheet(document.getElementById('spreadsheet'), {
      tabs: true,
      toolbar: false,
      worksheets: [{
      minDimensions: [8,8],
      }],
      license: 'MWEzMTE4MGFkNWY5YzQzNjE4NjZiNmE1NThhM2M0Yjc1NmUyNGM2N2YzZjU2NDQ5ZjM1MGFiYWNmOTFkNTkwODFiYmYwNDE1YjhhM2ViNGUyMzM2YjYzY2Q4NTcyMWE4MGQ4YjVjNjI2NWY4NWYyMTBjMWU5M2ZmNTU4OGI1MDQsZXlKdVlXMWxJam9pY0dGMWJDNW9iMlJsYkNJc0ltUmhkR1VpT2pFMk5UZzVOakk0TURBc0ltUnZiV0ZwYmlJNld5SnFjM0J5WldGa2MyaGxaWFF1WTI5dElpd2lZM05pTG1Gd2NDSXNJbXB6YUdWc2JDNXVaWFFpTENKc2IyTmhiR2h2YzNRaVhTd2ljR3hoYmlJNklqSWlMQ0p6WTI5d1pTSTZXeUoyTnlJc0luWTRJaXdpY0dGeWMyVnlJaXdpYzJobFpYUnpJaXdpWm05eWJYTWlMQ0p5Wlc1a1pYSWlMQ0ptYjNKdGRXeGhJbDE5'
  });
  
  </script>
  

@endsection