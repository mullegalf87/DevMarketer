<style>

</style>
<section class="container-fluid p-0 h-100" style="background-color: #dbd3d3;">
    <div class="d-flex flex-nowrap h-100">
        <div class="col-md-6 p-0">
            <div class="" style="display: block;position: absolute; bottom:0;right: 0; left: 0;margin: 5rem!important;">
                <img class="m-auto" src="ileniadesign_repo/1.jpeg" style="width: 60%;float:right">
                <img class="img-corner" src="ileniadesign_repo/2.jpeg" style="width: 190px; object-fit: contain; pointer-events: none;position: absolute; bottom:-50px;left: 100px;">
            </div>
            <div class="emblem" style="position: absolute;left: 180px;bottom: 0;">Ileniazitodesign-Ileniazitodesign-</div>
        </div>
        
        <div class="col-md-6 p-0">
            <form id="login_account" class="w-100" style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);" method="POST" action="{{ url('/login_ileniadesign/1') }}">
                {{ csrf_field() }}
                <div class="col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
                    <h4 class="flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;" onclick="switch_account('register_account')">REGISTER</h4>
                    <input type="text" class="form-control p-0" name="email" placeholder="Email"  style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control p-0" name="password" placeholder="Password" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary text-left mt-3">LOGIN  <img style="position: absolute;right: 15px;top: 50%;transform: translateY(-50%);width: 30px;" src="ileniadesign_repo/long-arrow.png"></button>
                </div>
            </form>   
            <form id="register_account" class="w-100" style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);display: none;" method="POST" action="{{ url('/register_ileniadesign/1') }}">
                    {{ csrf_field() }}
                <div class="col-md-12{{ $errors->has('name') ? ' has-error' : '' }}">
                    <h4 class="flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;" onclick="switch_account('login_account')">LOGIN</h4>
                    <input type="text" class="form-control p-0" name="name" placeholder="Name" value="{{ old('name') }}" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('name'))
                    <span class="error">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <input type="text" class="form-control p-0" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('lastname'))
                    <span class="error">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control p-0" name="email" placeholder="Email" value="{{ old('email') }}" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('email'))
                    <span class="error">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control p-0" name="password" placeholder="Password" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('password'))
                    <span class="error">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control p-0" name="password_confirmation" placeholder="Confirm Password" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if ($errors->has('password_confirmation'))
                    <span class="error">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-12{{ $errors->has('captcha') ? ' has-error' : '' }}">
                    <img class="" src="ileniadesign_repo/captcha.php" style="height: 60px;width: 60%;" />
                    <input type="text" name="captcha" class="captcha form-control p-0" placeholder="Inserisci Captcha" style="width: 60%;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" required>
                    @if (session('captcha'))
                    <div class="alert alert-danger" style="width: 60%;">
                        {{ session('captcha') }}
                    </div>
                    @endif
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary text-left mt-3">REGISTER  <img style="position: absolute;right: 15px;top: 50%;transform: translateY(-50%);width: 30px;" src="ileniadesign_repo/long-arrow.png"></button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>

    //switch tra i form login/register
    var old_id="login_account";
    function switch_account(id){
        $("#"+old_id).css("display","none");
        old_id=id;
        $("#"+id).css("display","");
    }

    //controlla se dal carrello il cliente è già registrato oppure no
    function check_page_from_to_login(){
        
        var url_register = "{{ url('/register_ileniadesign/2') }}";
        
        $("#register_account").attr("action",url_register);
        
        var url_login = "{{ url('/login_ileniadesign/2') }}";
        
        $("#login_account").attr("action",url_login);
        
    }

</script>