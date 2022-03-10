<style type="text/css">
.card {
  width: 300px;
}

.nav-tabs .nav-item {
    margin-right: 10px;
}
</style>

<div class="container" style="padding-right: 0px; padding-left: 0px;">

  <div class="mx-auto border-0">
    <div class="card-header border-bottom-0 bg-transparent">
      <ul class="nav nav-tabs justify-content-center pt-4" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active text-primary" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login"
             aria-selected="true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register"
             aria-selected="false">@lang('bookmap/lang.register')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" id="pills-forgot-tab" data-toggle="pill" href="#pills-forgot" role="tab" aria-controls="pills-forgot"
             aria-selected="false">@lang('bookmap/lang.forgot')</a>
        </li>
      </ul>
    </div>

    <div class="card-body pb-4">
      <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
          <form method="POST" action="{{ url('/login_bookmap') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="email" name="email" class="form-control"  placeholder="Email" required autofocus value="{{ old('email') }}">
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" name="password" class="form-control"  placeholder="Password" autofocus required>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
            <div class="text-center">
              <a class="btn btn-secondary mt-3" href="{{ route('facebook_bookmap.login') }}">Login Facebook</a>
            </div>
            <div class="text-center pt-2">
              <a class="btn btn-link text-primary" href="https://www.lavoro.gov.it/Documents/informativa_GDPR.pdf" target="_blank">Privacy</a>
            </div>
          </form>
        </div>

    
        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
          <form method="POST" action="{{ url('/register_bookmap') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <input type="text" name="name"  class="form-control" placeholder="@lang('bookmap/lang.name')" required autofocus value="{{ old('name') }}">
              @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
              <input type="text" name="lastname"  class="form-control" placeholder="@lang('bookmap/lang.lastname')" required autofocus value="{{ old('lastname') }}">
              @if ($errors->has('lastname'))
              <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <input type="text" name="username"  class="form-control" placeholder="Username" required autofocus value="{{ old('username') }}">
              @if ($errors->has('username'))
              <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <input type="email" name="email"  class="form-control" placeholder="Email" required value="{{ old('email') }}">
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <input type="password" name="password"  class="form-control" placeholder="@lang('bookmap/lang.set_pass')" required>
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <input type="password" name="password_confirmation"  class="form-control" placeholder="@lang('bookmap/lang.confirm') password" required>
              @if ($errors->has('password_confirmation'))
              <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
              @endif
            </div>
            <div class="text-center pt-2 pb-1">
              <button type="submit" class="btn btn-primary">@lang('bookmap/lang.register')</button>
            </div>
          </form>
        </div>

        <div class="tab-pane fade" id="pills-forgot" role="tabpanel" aria-labelledby="pills-forgot-tab">
          <form method="POST" action="{{ url('/reset_password_without_token_bookmap') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('remind_nick') ? ' has-error' : '' }}">
              <input  type="text" class="form-control" placeholder="Username*" name="remind_nick" required="" value="{{ $email or old('remind_nick') }}">
              @if ($errors->has('remind_nick'))
              <span class="help-block">
                <strong>{{ $errors->first('remind_nick') }}</strong>
              </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('remind_email') ? ' has-error' : '' }}">
              <input  type="email"  class="form-control" placeholder="Email*" name="remind_email" required="" value="{{ $email or old('remind_email') }}"> 
              @if ($errors->has('remind_email'))
              <span class="help-block">
                <strong>{{ $errors->first('remind_email') }}</strong>
              </span>
              @endif
            </div>
            <label>@lang('bookmap/lang.message_receive')</label><br>
            <button class="btn btn-outline-secondary" type="submit">@lang('bookmap/lang.send_request')</button>
          </form>
        </div>

      </div>
    </div>
    
  </div>
</div>
<script type="text/javascript">

</script>