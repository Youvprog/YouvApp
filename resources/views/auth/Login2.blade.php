<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="\css\Login2style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>


     
      <form method="POST" action="{{ route('login') }}">
            @csrf
        
        <div class="txt_field">
          <input id="email" type="email" name="email" :value="old('email')" required autofocus>
          <span></span>
          <label> Email</label>
        </div>

        <div class="txt_field">
          <input id="password" type="password" name="password" required autocomplete="current-password">
          <span></span>
          <label>Password</label>
        </div>

        <div class="pass">
            @if (Route::has('password.request'))
                    <a class="kiki" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                

        </div>
    
        <input type="submit" value=" {{ __('Log in') }}">

        <div class="signup_link">
          
        </div>

      </form>
       
      

    </div>
    
  
  </body>
</html>
