<section class="ftco-section ftco-about img">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-12 about-intro">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="d-flex about-wrap">
              <div class="img d-flex align-items-center justify-content-center" style="background-image:url(promotion_repo/home/images/about-1.jpg);">
              </div>
              <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(promotion_repo/home/images/about.jpg);">
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-md-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <div class="login-wrap p-4 p-md-5" style="margin-top: 0!important">

                  <div id="register-form">
                    <h3 class="mb-4">Register Now</h3>
                    <form method="POST" action="{{ url('/register_promotion') }}" class="signup-form">
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
                        <label>Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
                        @if ($errors->has('password_confirmation'))
                        <span class="error">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                      </div>
                    </form>
                    <p class="text-center">Already have an account? <a onclick="change_vis_login('login-form')">Sign In</a></p>
                  </div>

                  <div id="login-form" style="display: none">
                    <h3 class="mb-4">Sign in</h3>
                    <form method="POST" action="{{ url('/login_promotion') }}" class="signup-form">
                      {{ csrf_field() }}
                      <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                        <label>Nickname</label>
                        <input type="text" class="form-control" name="nickname" placeholder="Nickname*" value="{{ old('nickname') }}" required="">
                        @if ($errors->has('nickname'))
                        <span class="help-block">
                          <strong>{{ $errors->first('nickname') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                      </div>
                      <div class="form-group d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                      </div>
                    </form>
                    <p class="text-center">I don't have an account? <a onclick="change_vis_login('register-form')">Register</a></p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">

  var old_page="register-form";

  function change_vis_login(new_page){

    $("#"+old_page).hide();

    old_page=new_page;

    $("#"+new_page).show();

  }

</script>