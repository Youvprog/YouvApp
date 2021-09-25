@extends('Admin.dashboard')

@section('content2')

      
  <div class="container">
      <div class="title"> Ajouter un utilisateur</div>
      <div class="content">
       
        <form method="POST" action="addUser">
            @csrf
        <div class="ENP-details">
            <div class="input-box">
                <span class="details">Nom</span>
                <input id="name" type="text" name="name"  :value="old('name')" placeholder="Enter your name" required autofocus>
              </div>

            
              <div class="input-box">
                <span class="details">Email</span>
                <input id="email" type="email" name="email" :value="old('email')" placeholder="Enter your email" required>
              </div>


            
            <div class="input-box">
                <span class="details">Mot de passe</span>
                <input id="password"
                       placeholder="Enter your password"
                       type="password"
                       name="password" 
                       required autocomplete="new-password">
              </div>

            
            <div class="input-box">
                <span class="details">Confirmer le mot de passe</span>
                <input id="password_confirmation" 
                       type="password" 
                       placeholder="Confirmer le mot de passe"
                       name="password_confirmation" 
                       required>
              </div>

            </div>
           
            <div class="input-box">
                <span for="role_id" class="details"> Role:</span>
                <select name="role_id" class="country" style="width: 31%">
                    <option value="comptable">Comptable</option>
                    <option value="administrateur">Admin</option>
                </select>

            </div>

            <div class="button">
                
                <input id="userBTNsub" type="submit" value=" {{ __('Enregistrer') }}">
                <script>
                    document.querySelector('#userBTNsub')
                       .addEventListener('click',()=> {
                           window.location.href='{{ route('UserList') }}';
                       });
                   </script>

            </div>
        </form>
    </div>
</div>


@endsection