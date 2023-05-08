<form method="POST" action="{{ url('/register_dnd') }}">
  {{ csrf_field() }}
  <div class="mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
    <label class="form-label" for="card-name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" required/>
    @if ($errors->has('name'))
    <span class="error">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
  </div>
  <div class="mb-3{{ $errors->has('lastname') ? ' has-error' : '' }}">
    <label class="form-label" for="card-email">Lastname</label>
    <input type="text" class="form-control" name="lastname" placeholder="LastName" required />
    @if ($errors->has('lastname'))
    <span class="error">
      <strong>{{ $errors->first('lastname') }}</strong>
    </span>
    @endif
  </div>
  <div class="mb-3{{ $errors->has('username') ? ' has-error' : '' }}">
    <label class="form-label" for="card-email">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" required />
    @if ($errors->has('username'))
    <span class="error">
      <strong>{{ $errors->first('username') }}</strong>
    </span>
    @endif
  </div>
  <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="form-label" for="card-email">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required>
    @if ($errors->has('email'))
    <span class="error">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>
  <div class="row gx-2">
    <div class="mb-3 col-sm-6{{ $errors->has('password') ? ' has-error' : '' }}">
      <input type="password" class="form-control" name="password" placeholder="Password" required>
      @if ($errors->has('password'))
      <span class="error">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
    <div class="mb-3 col-sm-6{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
      <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
      @if ($errors->has('password_confirmation'))
      <span class="error">
        <strong>{{ $errors->first('password_confirmation') }}</strong>
      </span>
      @endif
    </div>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="card-register-checkbox" />
    <label class="form-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
  </div>
  <div class="mb-3">
    <button class="btn btn-primary d-block w-100 mt-3 button-form-submit" type="submit" name="submit">Register</button>
  </div>
</form>