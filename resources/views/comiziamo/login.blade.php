<style type="text/css">
  body {
    font-family: "Lato", sans-serif;
  }

  .main-head{
    height: 150px;
    background: #FFF;

  }

  .sidenav {
    height: 100%;
    background-color: #e9ecef;
    overflow-x: hidden;
    padding-top: 20px;
  }


  .main {
    padding: 0px 10px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
  }

  @media screen and (max-width: 450px) {
    .login-form{
      margin-top: 10%;
      margin-bottom: 10%;
    }

    .register-form{
      margin-top: 10%;
      margin-bottom: 10%;
    }
  }

  @media screen and (min-width: 768px){
    .main{
      margin-left: 40%; 
    }

    .sidenav{
      width: 40%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
    }

    .login-form{
      margin-top: 80%;
      margin-bottom: 10%;
    }

    .register-form{
      margin-top: 20%;
      margin-bottom: 10%;
    }
  }


  .login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #000;
  }

  .login-main-text h2{
    font-weight: 300;
  }

  .btn-black{
    background-color: #000 !important;
    color: #fff;
  }


</style>


<div class="sidenav">
  <div class="login-main-text">
    <h2>@lang('comiziamo/lang.register')<br> Login</h2>
    <p><a style="color:blue; text-decoration: underline;" onclick="change_vis_login('login-form')">Login</a> - <a style="color:blue; text-decoration: underline;" onclick="change_vis_login('register-form')">@lang('comiziamo/lang.register').</a> @lang('comiziamo/lang.title_login_1') <a style="color:blue; text-decoration: underline;" onclick="change_vis_login('form_remind')">@lang('comiziamo/lang.title_login_2').</a></p>
  </div>
</div>
<div class="main">

  <div id="login-form" class="col-md-6 col-sm-12">
    <div class="login-form">
      <form method="POST" action="{{ url('/login_comiziamo') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
          <label>Nickname</label>
          <input type="text" class="form-control" name="nickname" placeholder="Nickname*" value="{{ old('nickname') }}">
          @if ($errors->has('nickname'))
          <span class="help-block">
            <strong>{{ $errors->first('nickname') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <button type="submit" class="btn btn-black">Login</button>
      </form>
        
    </div>
  </div>

  <div id="register-form" class="col-md-6 col-sm-12" style="display: none;">
    <div class="login-form">
      <form method="POST" action="{{ url('/register_comiziamo') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
          <label>Nickname</label>
          <input type="text" class="form-control" name="nickname" placeholder="Nickname" value="{{ old('nickname') }}">
          @if ($errors->has('nickname'))
          <span class="error">
            <strong>{{ $errors->first('nickname') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label>Email</label>
          <input type="text" class="form-control" name="email" placeholder="Email" required="">
          @if ($errors->has('email'))
          <span class="error">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password min(6)">
          @if ($errors->has('password'))
          <span class="error">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label>@lang('comiziamo/lang.confirmation') Password</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
          @if ($errors->has('password_confirmation'))
          <span class="error">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
          @endif
        </div>
        <button type="submit" class="btn btn-secondary">@lang('comiziamo/lang.register')</button>
      </form>
    </div>
  </div>

  <div id="form_remind" class="col-md-6 col-sm-12" style="display: none;">
    <div class="login-form">
      <form method="POST" action="{{ url('/reset_password_without_token_comiziamo') }}">
        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('remind_nick') ? ' has-error' : '' }}">
        <label>@lang('comiziamo/lang.insert') Nickname</label>
        <input  type="text" class="form-control" placeholder="@lang('comiziamo/lang.insert') Nickname*" name="remind_nick" required="" value="{{ $email or old('remind_nick') }}">
        @if ($errors->has('remind_nick'))
        <span class="help-block">
          <strong>{{ $errors->first('remind_nick') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('remind_email') ? ' has-error' : '' }}">
        <label>@lang('comiziamo/lang.insert') Email</label>
        <input  type="email"  class="form-control" placeholder="@lang('comiziamo/lang.insert') Email*" name="remind_email" required="" value="{{ $email or old('remind_email') }}"> 
        @if ($errors->has('remind_email'))
        <span class="help-block">
          <strong>{{ $errors->first('remind_email') }}</strong>
        </span>
        @endif
      </div>
      <label>@lang('comiziamo/lang.receive_pass')</label><br>
      <button class="btn btn-outline-secondary" type="submit">@lang('comiziamo/lang.request')</button>
    </form>
    </div>
  </div>


</div>

<script type="text/javascript">

  var old_page="login-form";

  function change_vis_login(new_page){

    $("#"+old_page).hide();

    old_page=new_page;

    $("#"+new_page).show();

  }






</script>