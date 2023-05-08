<form method="POST" action="{{ url('/login_dnd') }}">
  <div class="mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
    <label class="form-label" for="card-email">Email address</label>
    <input class="form-control" name="email" placeholder="Email*" value="{{ old('email') }}" required="" />
    @if ($errors->has('email'))
    <span class="help-block">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>
  <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
    <div class="d-flex justify-content-between">
      <label class="form-label" for="card-password">Password</label>
    </div>
    <input type="password" class="form-control" name="password" placeholder="Password" required="" />
    @if ($errors->has('password'))
    <span class="help-block">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>
  <div class="mb-3">
    <button class="btn btn-primary d-block w-100 mt-3" type="submit">Log in</button>
  </div>
</form>




