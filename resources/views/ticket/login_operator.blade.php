<!DOCTYPE html>
<html>
<head>
  <title>Home | Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/test_ticket/css/layout_operatore.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<style type="text/css">
  /*login style*/

@import url('https://fonts.googleapis.com/css?family=Montserrat|Quicksand');

*{
    font-family: 'quicksand',Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

body{
    background:#fff;
}


.form-modal{
    position:relative;
    width:450px;
    height:auto;
    margin-top:4em;
    left:50%;
    transform:translateX(-50%);
    background:#fff;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow:0 3px 20px 0px rgba(0, 0, 0, 0.1)
}

.form-modal button{
    cursor: pointer;
    position: relative;
    text-transform: capitalize;
    font-size:1em;
    z-index: 2;
    outline: none;
    background:#fff;
    transition:0.2s;
}

.form-modal .btn{
    border-radius: 20px;
    border:none;
    font-weight: bold;
    font-size:1.2em;
    padding:0.8em 1em 0.8em 1em!important;
    transition:0.5s;
    border:1px solid #ebebeb;
    margin-bottom:0.5em;
    margin-top:0.5em;
}

.form-modal .login , .form-modal .signup{
    background:#57b846;
    color:#fff;
}

.form-modal .login:hover , .form-modal .signup:hover{
    background:#222;
}

.form-toggle{
    position: relative;
    width:100%;
    height:auto;
}

.form-toggle button{
    width:50%;
    float:left;
    padding:1.5em;
    margin-bottom:1.5em;
    border:none;
    transition: 0.2s;
    font-size:1.1em;
    font-weight: bold;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}

.form-toggle button:nth-child(1){
    border-bottom-right-radius: 20px;
}

.form-toggle button:nth-child(2){
    border-bottom-left-radius: 20px;
}

#login-toggle{
    background:#57b846;
    color:#ffff;
}

.form-modal form{
    position: relative;
    width:90%;
    height:auto;
    left:50%;
    transform:translateX(-50%);  
}

#login-form , #signup-form{
    position:relative;
    width:100%;
    height:auto;
    padding-bottom:1em;
}

#signup-form{
    display: none;
}


#login-form button , #signup-form button{
    width:100%;
    margin-top:0.5em;
    padding:0.6em;
}

.form-modal input{
    position: relative;
    width:100%;
    font-size:1em;
    padding:1.2em 1.7em 1.2em 1.7em;
    margin-top:0.6em;
    margin-bottom:0.6em;
    border-radius: 20px;
    border:none;
    background:#ebebeb;
    outline:none;
    font-weight: bold;
    transition:0.4s;
}

.form-modal input:focus , .form-modal input:active{
    transform:scaleX(1.02);
}

.form-modal input::-webkit-input-placeholder{
    color:#222;
}


.form-modal p{
    font-size:16px;
    font-weight: bold;
}

.form-modal p a{
    color:#57b846;
    text-decoration: none;
    transition:0.2s;
}

.form-modal p a:hover{
    color:#222;
}


.form-modal i {
    position: absolute;
    left:10%;
    top:50%;
    transform:translateX(-10%) translateY(-50%); 
}

.fa-google{
    color:#dd4b39;
}

.fa-linkedin{
    color:#3b5998;
}

.fa-windows{
    color:#0072c6;
}

.-box-sd-effect:hover{
    box-shadow: 0 4px 8px hsla(210,2%,84%,.2);
}

@media only screen and (max-width:500px){
    .form-modal{
        width:100%;
    }
}

@media only screen and (max-width:400px){
    i{
        display: none!important;
    }
}
</style>
<body>


  <div id="login_user"> 
    <div class="form-modal" id="form_modal_login">
      <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">log in</button>
        <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
      </div>
      <div id="login-form">
        <form method="POST" action="{{ url('/login') }}">
         {{ csrf_field() }}
         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input id="email" type="email" name="email" placeholder="Email Address" required="" autofocus="" value="{{ old('email') }}">
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>                      
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">   
          <input id="password" type="password" placeholder="Password" required=""  name="password">
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <button type="submit" class="btn login">login</button>
      </form>
    </div>
    <div id="signup-form">
      <form method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}"> 
         <select style="position: relative; width: 100%; font-size: 1em; padding: 1.2em 1.7em 1.2em 1.7em; margin-top: 0.6em; margin-bottom: 0.6em; border-radius: 20px; border: none; background: #ebebeb; outline: none; font-weight: bold; transition: 0.4s; height: 50px" name="type" id="type">
          <option selected="" disabled="">Scegli tipo utente</option>
          <option value="0"  {{ old('type') == '0' ? 'selected' : '' }}>Operatore</option>
          <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Agente</option>
        </select>
        @if ($errors->has('type'))
        <span class="help-block">
          <strong>{{ $errors->first('type') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('circuito') ? ' has-error' : '' }}"> 
       <select style="position: relative; width: 100%; font-size: 1em; padding: 1.2em 1.7em 1.2em 1.7em; margin-top: 0.6em; margin-bottom: 0.6em; border-radius: 20px; border: none; background: #ebebeb; outline: none; font-weight: bold; transition: 0.4s; height: 50px" name="circuito" id="circuito">
        <option selected="" disabled="">Scegli circuito</option>
        <option value="0"  {{ old('circuito') == '0' ? 'selected' : '' }}>Good</option>
        <option value="1" {{ old('circuito') == '1' ? 'selected' : '' }}>Zone</option>
      </select>
      @if ($errors->has('circuito'))
      <span class="help-block">
        <strong>{{ $errors->first('circuito') }}</strong>
      </span>
      @endif
    </div>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <input id="name" type="text" placeholder="Nome" required="" name="name" value="{{ old('name') }}">
      @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
      @endif
    </div> 
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <input id="email" type="email" placeholder="Email Address" required="" autofocus=""  name="email" value="{{ old('email') }}">
      @if ($errors->has('email'))
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
    </div>  
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <input id="password" type="password"  placeholder="Password" required="" name="password">
      @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>  
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <input id="password-confirm" type="password" placeholder="Confirm password" required="" name="password_confirmation">
      @if ($errors->has('password_confirmation'))
      <span class="help-block">
        <strong>{{ $errors->first('password_confirmation') }}</strong>
      </span>
      @endif
    </div> 
    <button type="submit" class="btn signup">Registra</button>
  </form>
</div>  
</div>
</div>


<script type="text/javascript">
  
  function toggleSignup(){
  document.getElementById("login-toggle").style.backgroundColor="#fff";
  document.getElementById("login-toggle").style.color="#222";
  document.getElementById("signup-toggle").style.backgroundColor="#57b846";
  document.getElementById("signup-toggle").style.color="#fff";
  document.getElementById("login-form").style.display="none";
  document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
  document.getElementById("login-toggle").style.backgroundColor="#57B846";
  document.getElementById("login-toggle").style.color="#fff";
  document.getElementById("signup-toggle").style.backgroundColor="#fff";
  document.getElementById("signup-toggle").style.color="#222";
  document.getElementById("signup-form").style.display="none";
  document.getElementById("login-form").style.display="block";
}

</script>

</body>
</html>