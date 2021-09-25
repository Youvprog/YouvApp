@extends('comptabledash')

@section('content')

         <div class="principal-title">
            <h3>Liste des employés</h3>
         </div>

         <div class="card-bttn">
            <a href="{{ "addemployé" }}" class="btn btn-primary">Ajouter</a>
         </div>
         <div class="card">
             <div class="card-body">
                <table  id="empTable" class="table  table-hover table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th class="color" scope="col">Nom</th>
                        <th class="color" scope="col">Prénom</th>
                        <th class="color" scope="col">Matricule</th>                  
                        <th class="color" scope="col">DateN</th>
                        <th class="color" scope="col">Lieu_N</th>
                        <th class="color" scope="col">Nationalité</th>
                        <th class="color" scope="col">Enfant</th>
                        <th class="color" scope="col">N°acte</th>
                        <th class="color" scope="col">CIN_N</th>
                        <th class="color" scope="col">N°Passport</th>
                        <th class="color" scope="col">Téléphone</th>
                        <th class="color" scope="col">Email</th>
                        <th class="color" scope="col">Groupage</th>
                        <th class="color" scope="col">SituF</th>
                        <th class="color" scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>    
                    @foreach ($employes as $emp )
                    <tr>
                      <td style="display: none">{{ $emp['id'] }}</td>
                      <td>{{ $emp['Nom'] }}</td>
                      <td>{{ $emp['Prénom'] }}</td>
                      <td>{{ $emp['Matricule'] }}</td>
                      <td>{{ $emp['Date_naiss'] }}</td>
                      <td>{{ $emp['Lieu_naiss'] }}</td>
                      <td>{{ $emp['Nationnalité'] }}</td>
                      <td>{{ $emp['nbrEnfantC'] }}</td>
                      <td>{{ $emp['numActNaiss'] }}</td>
                      <td>{{ $emp['CIN_N'] }}</td>
                      <td>{{ $emp['PassportN'] }}</td>
                      <td>{{ $emp['TéléphoneE'] }}</td>
                      <td>{{ $emp['Email'] }}</td>
                      <td>{{ $emp['Groupage'] }}</td>
                      <td>{{ $emp['Situ_fami'] }}</td>
                      <td>
                          <a href="{{ "modifierE/".$emp->id }}" class="btn btn-primary" >EDIT</a>
                          <a type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            SUPP
                          </a>
                          
                      </td>
                    </tr>     
                    @endforeach
                    </tbody>
                  </table>
   
             </div>
             
         </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Etes vous sur de vouloir supprimer l'employé {{ $emp['Nom'] }} {{ $emp['Prénom'] }}
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <a href="{{ "supprimer/".$emp['id'] }}" type="button" class="btn btn-primary">Supprimer</a>
              </div>
            </div>
          </div>
       

@endsection

