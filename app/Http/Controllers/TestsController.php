<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use View;
use Schema;
use Request;
use Config;
use Session;
use Auth;
use Carbon\Carbon;
use App\Users_test;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Filesystem\Filesystem;
use Mail;
use App;
use Socialite;
use LaraFlash;

class TestsController extends Controller
{   

    public function go_to_page(){
        $data = [];
        $data["page"] = Request::get('page');
        return view('test.home')->with("data",json_encode($data));
    }

    public function lang_change()
    {
        $lang=Request::get("lang");
        App::setLocale($lang);
        session()->put('locale', $lang); 
        return redirect()->back();
    }

    //blocco register/login
    public function store()
    {

        $messages = [
            "email.required" => "il email is obbligatorio",
            "email.exists" => "il email non esiste",
            "password.required" => "la Password è obbligatoria",
            "password.min" => "la Password deve essere di almeno 6 caratteri",

        ];

        $validator = Validator::make(Request::all(), [
            'email' => 'required|max:255|unique:users_tests',
            'password' => 'required|min:6|confirmed'
        ], $messages);

    if ($validator->fails()) {

      return back()->withErrors($validator)->withInput();

        } else {

        $user = Users_test::create([
            'name' =>Request::get('name'),
            'email' =>Request::get('email'),
            'password' => bcrypt(Request::get('password')),
        ]);

            auth()->guard('users_test')->login($user);

            return redirect()->to('/test');

        }

    }

    protected function check_login()
    {

        $messages = [
            "email.required" => "il email is obbligatorio",
            "email.exists" => "il email non esiste",
            "password.required" => "la Password è obbligatoria",
            "password.min" => "la Password deve essere di almeno 6 caratteri",
        ];


        $validator = Validator::make(Request::all(), [
            'email' => 'required|max:255|exists:users_tests,email',
            'password' => 'required|min:6|'
        ], $messages);

        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput(); 

        } else {

        $email=Request::get('email');
        $password=Request::get('password');

        if(auth()->guard('users_test')->attempt(['email' => $email, 'password' => $password])) {

            return redirect()->to('/test');

        } else{

        return back()->withErrors([
                'password' => 'Incorrect password!'
            ])->withInput(); 
        }

        }
    }

    public function logout_test(){

        auth()->guard('users_test')->logout();

        return redirect()->to('/test');

    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $pass = $this->getRandomPass(14);

        $lang=session()->get('locale'); 
        if ($lang=="") {
          $lang="it";
        }

        //You can add validation login here
        $user_exist = DB::connection('mysql_dynamic')->table('users_tests')
        ->where('email', '=', $user->getEmail())
        ->get();

        //Check if the user exists
        if ($user_exist) {

          return redirect('/test')->withErrors(['email' => trans('email esiste')]);

        }else{

          $users = Users_test::create([
          'email' =>$user->getEmail(),
          'password' => bcrypt($pass),
          'password_decript' => $pass,
          ]);

          auth()->guard('users_test')->login($users);

          return redirect()->to('/test');

        }

    }
    //end function login

    //start function action

    //end function action

}
