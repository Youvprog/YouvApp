@extends('Admin.dashboard')

@section('content2')


<div style="margin-top: 10px; margin-left:10px">
  <h2>Liste Utilisateurs</h2>
</div>

<div class="table-container "style="margin-top: 100px; margin-left:5px; margin-right:15px">
    
    <table id="example" class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Créer le:</th>
            <th>Modifier le:</th>
            <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($utilisateurs as $utl) 
        <tr>
           <td>{{ $utl['id'] }}</td>
           <td>{{ $utl['name'] }}</td>
           <td>{{ $utl['email'] }}</td>
           <td>{{ $utl['created_at'] }}</td>
           <td>{{ $utl['updated_at'] }}</td>
           
           <td> 
               <a href="#" class="btn btn-primary">EDIT</a>
               <a href="#" class="btn btn-danger det">SUPP</a>
           </td>

        </tr>
         
        @endforeach
    </tbody>
    
</table>
</div>


 
  
@endsection