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
use Jenssegers\Agent\Agent;
use Illuminate\Http\Response;
use Cookie;

class TestsController extends Controller
{   
    //trovi tutte le tabelle
    public function universal_db(){
        Config::set('database.connections.mysql_dynamic.database','laravel');
        $universal=DB::connection('mysql_dynamic');
        return $universal;
    }

    //trovi gli utenti
    public function universal_db_user(){
        Config::set('database.connections.mysql_dynamic.database','test');
        $universal=DB::connection('mysql');
        return $universal;
    }

    //set random token
    function random_token($db, $table, $column){
        $token;
        do{
        $token = $this->getRandomString(14);
        $orders_with_token = $this->universal_db($db)->table($table)
            ->where($column, "=", $token)
            ->get();
        $token_exists = count($orders_with_token) > 0;
        if (!$token_exists) {
            return $token;
        }
        }while($token_exists);
    }

    //get random token
    function getRandomString($length = 8) {
        $characters = '0123456789';
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        return $string;
    }

    //setta i cookie ai nuovi utenti
    function setCookie(){
        $minutes = 525960;//1 anno
        $value = $this->random_token('laravel','table','column'); //qui bisogna scegliere la tabella e la colonna da check
        Cookie::queue('cookie', $value, $minutes);
    }

    //ottiene i cookie
    function getCookie(){
        $value = Cookie::get('cookie');
        return $value;
    }

    //parte la funzione per andare nella pagina
    public function go_to_page(){
        $data = [];
        $agent = new Agent();
        $result;
        if ($agent->isMobile()) {
            $result="mobile";
        }elseif ($agent->isDesktop()) {
            $result="desktop";
        }
        //se la pagina contiene il numero allora la divide, diversamente lascia la pagina originaria
        if(strpos(Request::get('page'), "_") !== false){
            $data = ['page' => explode("_", Request::get('page'))[0], 'num_page' => explode("_", Request::get('page'))[1]];
        }else{
            $data = ['page' => Request::get('page'), 'num_page' => '""'];
        }
        if (auth()->guard('users_test')->check()) { 
            //dati che poi rivedrò nelle view con {{ $variable }} 
            $data['name']=auth()->guard('users_test')->user()->name;
            $data['lastname']=auth()->guard('users_test')->user()->lastname;
            $data['email']=auth()->guard('users_test')->user()->email;
        }else{
            //controllo se esiste il cookie diversamente lo associo
            // $this->getCookie()=='' ? $this->setCookie() : false;      
        }
        return view('test.'.$result.'.index', $data);
    }

    //cambia lingua
    public function lang_change(){
        $lang=Request::get("lang");
        Session::put("locale",$lang);
        return redirect()->back();
    }

    //crea utente
    public function store(){
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
                'lastname' =>Request::get('lastname'),
                'email' =>Request::get('email'),
                'password' => bcrypt(Request::get('password')),
            ]);
            auth()->guard('users_test')->login($user);
            return redirect()->to('/test');
        }
    }

    //controlla il login
    protected function check_login(){
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
            }else{
                return back()->withErrors([
                    'password' => 'Incorrect password!'
                ])->withInput(); 
            }
        }
    }

    //logout
    public function logout_test(){
        auth()->guard('users_test')->logout();
        return redirect()->to('/test');
    }

}
