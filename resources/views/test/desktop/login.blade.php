<style>    
    #login.card {
        width: 400px;
        border: none
    }
    #login.btr {
        border-top-right-radius: 5px !important
    }
    #login.btl {
        border-top-left-radius: 5px !important
    }
    #login.btn-dark {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }
    #login.btn-dark:hover {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }
    #login.nav-pills {
        display: table !important;
        width: 100%
    }
    #login.nav-pills .nav-link {
        border-radius: 0px;
        border-bottom: 1px solid #0d6efd40
    }
    #login.nav-item {
        display: table-cell;
    }
    #login.form {
        padding: 10px;
        height: 300px
    }
    #login.form input {
        margin-bottom: 12px;
        border-radius: 3px
    }
    #login.form input:focus {
        box-shadow: none
    }
    #login.form button {
        margin-top: 20px
    }
</style>
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item text-center">
                <a class="nav-link active btl" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link btr" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <form method="POST" action="{{ url('/login_test') }}" class="signup-form tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                {{ csrf_field() }}
                <div>
                    <div class="form px-4 pt-5">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" name="email" placeholder="Email*" value="{{ old('email') }}" required="">
                            @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                            @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </div>
                </div>
            </form>    
            <form method="POST" action="{{ url('/register_test') }}" class="signup-form tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                {{ csrf_field() }}
                <div>
                    <div class="form px-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            @if ($errors->has('name'))
                            <span class="error">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <input type="text" name="lastname" class="form-control" placeholder="LastName" required>
                            @if ($errors->has('lastname'))
                            <span class="error">
                            <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            @if ($errors->has('email'))
                            <span class="error">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            @if ($errors->has('password'))
                            <span class="error">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password confirmation" required>
                            @if ($errors->has('password_confirmation'))
                            <span class="error">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark btn-block">Signup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>