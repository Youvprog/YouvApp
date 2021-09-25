@extends('comptabledash')

@section('content')

<div class="container">
    <div class="title">Modifier les infos de l'employé : {{ $datas['id'] }}</div>
        <div class="content">
            <form action="/modifierE" method="POST">
                @csrf
                <div class="ENP-details">
            
                    <input type="hidden" name="id" id="id" value="{{ $datas['id'] }}">
                    
                    <div class="input-box">
                      <span class="details">Nom</span>
                      <input type="text" name ="NomEp" id="new_nom"placeholder="Nom de l'employé"  value="{{ $datas['Nom'] }}" required>
                    </div>
            
                    <div class="input-box">
                      <span class="details">Prénom</span>
                      <input type="text" name="PrénomEp" id="new_prenom" placeholder="Prénom de l'employé" value="{{ $datas['Prénom'] }}" required>
                    </div>
            
                    <div class="input-box">
                      <span class="details">Matricule</span>
                      <input type="text" name="MatriculeEp" id="new_mat" placeholder="Matricule de l'employé" value="{{ $datas['Matricule'] }}" required>
                    </div>
            
                    <div class="input-box">
                        <span class="details">Date de naissance</span>
                        <input type="date" name="dateCEp" id="new_dateC" placeholder="Date de naissance employé" value="{{ $datas['Date_naiss'] }}" equired>
                      </div>
            
                      <div class="input-box">
                        <span class="details">Lieu de naissance</span>
                        <input type="text" name="LieuDN" id="new_LDN" placeholder="Lieu de naissance" value="{{ $datas['Lieu_naiss'] }}" required>
                      </div>
            
                      <div class="input-box">
                        <span class="details">Nationalité</span>
                        <select class="country" name="countries" id="countries" value="{{ $datas['Nationnalié'] }}"></select>
                    </div>
                
            
                    <div class="input-box">
                        <span class="details">N° Enfant en charge</span>
                        <input type="text" name="enfantEN" id="new_nbrEnf" placeholder="Nombre enfant en charge" value="{{ $datas['nbrEnfantC'] }}" >
                      </div>
            
                      <div class="input-box">
                        <span class="details">N° acte de naissance</span>
                        <input type="text" name="ActN" id="new_Nact" placeholder="N°acte de naissance employé" value="{{ $datas['numActNaiss'] }}" required>
                      </div>
            
                      <div class="input-box">
                        <span class="details">CIN Nationnal</span>
                        <input type="text" name="CIN" id="new_CIN" placeholder="N°carte d'identité" value="{{ $datas['CIN_N'] }}" >
                      </div>
            
                      <div class="input-box">
                        <span class="details">N° passport</span>
                        <input type="text" name="Npass" id="new_passport" placeholder="N°passport" value="{{ $datas['PassportN'] }}" >
                      </div>
            
                      <div class="input-box">
                        <span class="details">N°Téléphone</span>
                        <input type="text" name="telEp"  id="new_tel" placeholder="N°téléphone de l'employé"value="{{ $datas['TéléphoneE'] }}" required>
                      </div>
            
                    
                    <div class="input-box">
                      <span class="details">Email</span>
                      <input type="email" name="emailEp" id="new_email" placeholder="Email de l'employé"value="{{ $datas['Email'] }}" required>
                    </div>
            
            
                    <div class="input-box">
                      <span class="details">Groupage</span>
                      <input type="text" name="sang" id="new_groupage" placeholder="Groupage employé"value="{{ $datas['Groupage'] }}" required>
                    </div>  
                  </div>
            
                  <div class="SF-details">
                      <input type="radio" name="SF" id="dot-1" value="Célibataire"
                      <?php
                      if ($datas['Situ_fami'] == 'Célibataire') {
                        echo "checked";
                      }
                      ?>>
            
                      <input type="radio" name="SF" id="dot-2" value="Marié(e)"
                      <?php
                      if ($datas['Situ_fami'] == 'Marié(e)') {
                        echo "checked";
                      }
                      ?>>
            
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
                        <input id="redirect" type="submit" value="Valider"> </div>
            </form>
        </div>
</div>


@endsection