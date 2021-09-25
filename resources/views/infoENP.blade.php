<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Enregistrer Entreprise </title>
    <link rel="stylesheet" href="css\infoENPstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Paramétrer l'entreprise</div>
    <div class="content">
      
      <form action="infoENP" method="POST">
        @csrf
        <div class="ENP-details">
          <div class="input-box">
            <span class="details">Nom</span>
            <input type="text" name ="Nom" placeholder="Entrez le Nom de l'entreprise" required>
          </div>
          <div class="input-box">
            <span class="details">Nom Gérant</span>
            <input type="text" name="NomG" placeholder="Nom du gérant">
          </div>
          <div class="input-box">
            <span class="details">Prénom Gérant</span>
            <input type="text" name="PrénomG" placeholder="Prénom du gérant">
          </div>
          <div class="input-box">
            <span class="details">Matricule</span>
            <input type="text" name="Matricule" placeholder="Matricule de l'entreprise" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Email de l'entreprise" >
          </div>
          <div class="input-box">
            <span class="details">N°Téléphone</span>
            <input type="text" name="tel" placeholder="N°téléphone de l'entreprise">
          </div>
          <div class="input-box">
            <span class="details">N°adhération CNAS</span>
            <input type="text" name="Ncnas" placeholder="N° d'adhération à la CNAS">
          </div>
          <div class="input-box">
            <span class="details">Date création</span>
            <input type="date" name="dateC" placeholder="Date de création de l'entreprise">
          </div>
        </div>
        
        <div class="button">
          <input id="redirect" type="submit" value="Suivant">
          <script>
           document.querySelector('#redirect')
              .addEventListener('click',()=> {
                  window.location.href='{{ route('compt') }}';
              });
          </script>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
