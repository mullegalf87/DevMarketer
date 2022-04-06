<?php

namespace App\Http\Controllers;

use DB;
use View;
use Schema;
use Request;
use Config;
use Session;
use Auth;
use Carbon\Carbon;
use App\Users_ileniadesign;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Mail;
use App;
use Socialite;
use File;
use Jenssegers\Agent\Agent;


class IleniadesignController extends Controller
{

  // HOME
  public function go_to_page(){
    $data = [];
    $data["page"] = Request::get('page');
    $agent = new Agent();
    $result;
     if ($agent->isMobile()) {
      $result="mobile";
     }elseif ($agent->isDesktop()) {
      $result="desktop";
     }
    return view('ileniadesign.'.$result.'.home')->with("data",json_encode($data));
  }

  public function lang_change()
    {
      $lang=Request::get("lang");
      App::setLocale($lang);
      session()->put('locale', $lang); 
      return redirect()->back();
    }

  //blocco register/login/logout

  public function store($numb,$cookie)
  {
      
      //Error messages
      $messages = [
          "email.required" => "Email is required",
          "email.email" => "Email is not valid",
          "email.exists" => "Email doesn't exists",
          "password.required" => "Password is required",
          "password.min" => "Password must be at least 6 characters",

      ];

      session_start();

    if ($_POST['captcha'] != $_SESSION['captcha']) {
      // die('Codice captcha non valido');

       return redirect('/id?page=login')->with('captcha', 'Codice captcha non valido');
       
    }else{

      // validate the form data
      $validator = Validator::make(Request::all(), [
          'email' => 'required|email|max:255|unique:users_ileniadesigns',
          'password' => 'required|min:6|confirmed'
          ], $messages);

      if ($validator->fails()) {
        
        return back()->withErrors($validator)->withInput();

      } else {

        $user = Users_ileniadesign::create([
          'name' =>Request::get('name'),
          'lastname' =>Request::get('lastname'),
          // 'address' =>Request::get('address'),
          // 'state' =>Request::get('state'),
          // 'city' =>Request::get('city'),
          // 'zip' =>Request::get('zip'),
          'email' => Request::get('email'),
          'password' => bcrypt(Request::get('password')),
          'password_decript' => Request::get('password'),
          'cookie' => $cookie,
          'token_user' => $this->random_token_user_ilenia_design(),

      ]);
      
      auth()->guard('users_ileniadesign')->login($user);

      // DB::table('cart_ileniadesign')
      //   ->where('id_user','=',$cookie)
      //   ->update(
      //     array(

      //      'id_user'=>auth()->guard('users_ileniadesign')->user()->id,

      //    ));

    //   $email=auth()->guard('users_ileniadesign')->user()->email;
    //   $password=auth()->guard('users_ileniadesign')->user()->password_decript;
    //   $token_user=auth()->guard('users_ileniadesign')->user()->token_user;

    //   $object="Summary account";
    //   $recovery_password="Welcome to Ileniazitodesign!";
    //   $return="Return to login";

    //   $data = array('email'=>$email, 'password_decript'=>$password, 'recovery_password'=>$recovery_password, 'token_user'=>$token_user, 'return'=>$return);

    //   Mail::send('mail', $data, function($message) use ($data) {
    //    $message->to($data['email'])->subject
    //    ('Welcome to Ileniazitodesign');
    //    $message->from('no-reply@ileniazitodesign.com','Ileniazitodesign');
    //  });

    //   DB::table('newsletter_ileniadesign')
    //   ->insertGetId(array( 
       
    //    'id_user'=>auth()->guard('users_ileniadesign')->user()->id,
    //    'email'=>$email,


    //  ));

      // if ($numb==1) {
      //   return redirect()->to('/');
      // }else{
      //   return redirect()->to('/id?page=cart');
      // }

      }

    }
      
  }



  protected function check_login($numb,$cookie)
  {

      //Error messages
      $messages = [
          "email.required" => "Email is required",
          "email.email" => "Email is not valid",
          "email.exists" => "Email doesn't exists",
          "password.required" => "Password is required",
          "password.min" => "Password must be at least 6 characters",

      ];

      // validate the form data
      $validator = Validator::make(Request::all(), [
              'email' => 'required|email|exists:users_ileniadesigns,email',
              'password' => 'required|min:6'
          ], $messages);

      if ($validator->fails()) {

          return back()->withErrors($validator)->withInput(); 
        
      } else {
      
          $email=Request::get('email');
          $password=Request::get('password');

          if(auth()->guard('users_ileniadesign')->attempt(['email' => $email, 'password' => $password])) {
              
            if ($numb==1) {
              return redirect()->to('/ileniadesign');
            }else{

              DB::table('cart_ileniadesign')
              ->where('id_user','=',$cookie)
              ->update(
                array(

                 'id_user'=>auth()->guard('users_ileniadesign')->user()->id,

               ));

              return redirect()->to('/id?page=cart');
            }

            } else{

              return back()->withErrors([
                'password' => 'Incorrect password!'
            ])->withInput(); 
        

            }

      }
  }

  public function logout_ileniadesign(){

    auth()->guard('users_ileniadesign')->logout();
        
    return redirect()->to('/');

  }

  public function recovery_ileniadesign(){

    $email=Request::get('email');
 

    //You can add validation login here
    $user = DB::table('users_ileniadesigns')
    ->where('email', '=', $email)
    ->get();

    //Check if the user exists
    if (count($user) < 1) {
        return redirect()->back()->withErrors(['email' => trans('email not exist!')]);
    }


    //Retrieve the user from the database
    $user = DB::table('users_ileniadesigns')
    ->where('email', '=' ,$email)
    ->first();    

    if ($user) {

        $object="Recovery password";
        $recovery_password="Recovery password:";
        $return="Return to login";

      $data = array('email'=>$email, 'password_decript'=>$user->password_decript, 'recovery_password'=>$recovery_password, 'token_user'=>"", 'return'=>$return);
   
      Mail::send('mail', $data, function($message) use ($data) {
         $message->to($data['email'])->subject
            ('Recovery Password');
         $message->from('no-reply@ileniazitodesign.com','Ileniazitodesign');
      });

      return redirect()->to('/id?page=login');  

    }else{

      return redirect()->back()->withErrors(['email' => trans('email does not match!')]);

    }


  }

  public function random_token_user_ilenia_design(){

    
    $token;
    do{
      $token = $this->getRandomString(14);



      $orders_with_token = DB::table('users_ileniadesigns')
      ->where("token_user", "=", $token)
      ->get();

      $token_exists = count($orders_with_token) > 0;


      return View::make('query')->with("result",$token);

    }while($token_exists);


  }

  function getRandomString($length = 8) {
    $characters = '0123456789';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
      $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
  }

  public function validatePasswordRequest(){

    $nickname=Request::get('remind_nick');
    $email=Request::get('remind_email');
 

    //You can add validation login here
    $user = DB::connection('mysql_dynamic')->table('users_ileniadesigns')
    ->where('nickname', '=', $nickname)
    ->get();

    //Check if the user exists
    if (count($user) < 1) {
        return redirect()->back()->withErrors(['remind_nick' => trans('nickname non esiste')]);
    }


    //Retrieve the user from the database
    $user = DB::connection('mysql_dynamic')->table('users_ileniadesigns')
    ->where('nickname', '=' ,$nickname)
    ->where('email', '=' ,$email)
    ->first();    


    if ($user) {
      
      $lang=session()->get('locale'); 
      if ($lang=="") {
        $lang="it";
      }

      if ($lang=="it") {
        $object="Recupero password";
        $recovery_password="Hai richiesto il recupero delle credenziali:";
        $return="Torna su ileniadesign!";
      }else{
        $object="Recovery password";
        $recovery_password="Recovery password:";
        $return="Return to ileniadesign!";
      }

      $data = array('nickname'=>$nickname, 'email'=>$email, 'password_decript'=>$user->password_decript, 'recovery_password'=>$recovery_password, 'return'=>$return);
   
      Mail::send('mail', $data, function($message) use ($data) {
         $message->to($data['email'], $data['nickname'])->subject
            ('Password');
         $message->from('infoileniadesign@gmail.com','ileniadesign');
      });

      return redirect()->to('/ileniadesign');  

    }else{

      return redirect()->back()->withErrors(['remind_email' => trans('email non corrisponde')]);

    }

  }

  public function universal_db(){

    Config::set('database.connections.mysql_dynamic.database','ileniadesign');
    $universal=DB::connection('mysql_dynamic');

    return $universal;

  }

  public function get_image_shopmyart_ileniadesign(){
    $type_img=Request::get("type_img");
    $get_image = $this->universal_db()->table('image_shopmyart_ileniadesign')
    ->orderBy('position', 'DESC')
    ->get();
    return View::make('query')->with("result",json_encode($get_image)); 
   }

  
  public function update_position_image_ileniadesign(){
  
  $ultimate_array_position=Request::get('ultimate_array_position');

  $array=explode(",", $ultimate_array_position);

  for ($i=0; $i < count($array); $i++) { 
    $this->universal_db()->table('image_shopmyart_ileniadesign')
    ->where('id', '=',explode("_", $array[$i])[0])
    ->update(
      array(
        'position'=>explode("_", $array[$i])[1],
      ));
  }

  return View::make('query')->with("result",json_encode("edited!")); 

  }

  public function get_subcat_ileniadesign(){
  
    $id_cat=Request::get('id_cat');

    $get_subcat=$this->universal_db()->table('subcategory_image_ileniadesign')
      ->where('id_cat', '=',$id_cat)
      ->get();
  
    return View::make('query')->with("result",json_encode($get_subcat)); 
  
    }

}