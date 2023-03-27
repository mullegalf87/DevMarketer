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
use App\Users_bookmap;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Filesystem\Filesystem;
use Mail;
use App;
use Socialite;


class BookmapController extends Controller
{


  public function go_to_page(){
      $data = [];
      $data["page"] = Request::get('page');
      return view('bookmap.home')->with("data",json_encode($data));
  }

  public function lang_change()
    {
        $lang=Request::get("lang");
        App::setLocale($lang);
        session()->put('locale', $lang); 
        return redirect()->back();
    }

  //blocco register/login/logout

  public function store()
  {
      $this->validate(request(), [
          'name' => 'required',
          'lastname' => 'required',
          'username' => 'required',
          'email' => 'required|email',
          'password' => 'required'
      ]);
      
   
       $user = Users_bookmap::create([
          'name' =>Request::get('name'),
          'lastname' =>Request::get('lastname'),
          'username' =>Request::get('username'),
          'email' => Request::get('email'),
          'password' => bcrypt(Request::get('password')),
          'password_decript' => Request::get('password'),
      ]);
      
      auth()->guard('users_bookmap')->login($user);
      return redirect()->to('/bookmap');
  }


  public function check_login()
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
              'email' => 'required|email|exists:users_bookmaps,email',
              'password' => 'required|min:6'
          ], $messages);

      if ($validator->fails()) {

      return back()->withErrors($validator)->withInput(); 

    } else {

      $email=Request::get('email');
      $password=Request::get('password');

      if(auth()->guard('users_bookmap')->attempt(['email' => $email, 'password' => $password]))  {

        return redirect()->to('/bookmap');

      } else{

        return back()->withErrors([
                'password' => 'Incorrect password!'
            ])->withInput(); 
      }
  }

}

  public function logout_bookmap(){

    auth()->guard('users_bookmap')->logout();
        
    return redirect()->to('/bookmap');

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
        $user_exist = $this->universal_db()->table('users_bookmaps')
        ->where('email', '=', $user->getEmail())
        ->get();

        //Check if the user exists
        if ($user_exist) {

          return redirect('/bm?page=login')->withErrors(['email' => trans('email esiste')]);

        }else{

          $users = Users_bookmap::create([
          'username' =>$user->getEmail(),
          'password' => bcrypt($pass),
          'password_decript' => $pass,
          'email' => $user->getEmail(),
          ]);

          auth()->guard('users_bookmap')->login($users);

          return redirect()->to('/bookmap');

        }

    }

    function getRandomPass($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
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
    $user = $this->universal_db()->table('users_bookmaps')
    ->where('username', '=', $nickname)
    ->get();

    //Check if the user exists
    if (count($user) < 1) {
        return redirect()->back()->withErrors(['remind_nick' => trans('nickname non esiste')]);
    }


    //Retrieve the user from the database
    $user = $this->universal_db()->table('users_bookmaps')
    ->where('username', '=' ,$nickname)
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
        $return="Torna su comiziamo!";
      }else{
        $object="Recovery password";
        $recovery_password="Recovery password:";
        $return="Return to comiziamo!";
      }


      $data = array('nickname'=>$nickname, 'email'=>$email, 'password_decript'=>$user->password_decript, 'recovery_password'=>$recovery_password, 'return'=>$return);
   
      Mail::send('mail', $data, function($message) use ($data) {
         $message->to($data['email'], $data['nickname'])->subject
            ('Password');
         $message->from('infocomiziamo@gmail.com','Comiziamo');
      });

      return redirect()->to('/bookmap');  

    }else{

      return redirect()->back()->withErrors(['remind_email' => trans('email non corrisponde')]);

    }


  }
  
  //blocco register/login/logout

  public function universal_db(){

    Config::set('database.connections.mysql_dynamic.database','bookmap');
    $universal=DB::connection('mysql_dynamic');

    return $universal;

  }

  public function universal_db_user(){

    Config::set('database.connections.mysql_dynamic.database','test');
    $universal=DB::connection('mysql');

    return $universal;

  }

  public function show_last_prod_bookmap(){

    $get_search=$this->universal_db()->table('products_bookmap')
      ->get();

    return View::make('query')->with("result",json_encode($get_search));  

  }

  public function get_product_bookmap(){


    
      $geo_products_bookmap=$this->universal_db()->table('products_bookmap')
      ->where("visibility","=",0)
      ->get();

      return View::make('query')->with("result",json_encode($geo_products_bookmap));

  }


  public function get_product_user_bookmap(){

    //l'id vendor dovrà essere passato con il session per sicurezza
    
      $products_bookmap=$this->universal_db()->table('products_bookmap')
      ->where("id_vendor","=",auth()->guard('users_bookmap')->user()->id)//inserire id user Auth::user()->id
      ->orderBy('id', 'DESC')
      ->get();



      return View::make('query')->with("result",json_encode($products_bookmap));

  }


  // public function file_upload_batch_bookmap($name_prod, $cat_prod, $desc_prod, $ean_prod, $qnt_prod, $price_prod, $place_prod, $prod_lat, $prod_lng){

  public function file_upload_batch_bookmap($name_prod, $cat_prod, $desc_prod, $price_prod, $place_prod, $prod_lat, $prod_lng){

    //1)fare check abbonamento
    //2)se passa il check abbonamento aggiungere prodotto al db e ricavare lìid prod
    //3)inserisci il prodotto nella cartella


    if (auth()->guard('users_bookmap')->check()) {


    //0=standard 0-5
    //1=premium 6-50
    //2=51 - deluxe infinito

    //result 0=puoi creare
    //result 1=non puoi creare
    //result 2=non sei loggato

     $type_subscription=auth()->guard('users_bookmap')->user()->subscription; //lo ricavo da user 
     $date_subscription=auth()->guard('users_bookmap')->user()->date_subscription; //lo ricavo da user 
     $qnt_prod=auth()->guard('users_bookmap')->user()->qnt_prod; //lo ricavo da user 
 
      if ($type_subscription==0 && $qnt_prod<=4) {
   
        $result=0;
        //add product
       $id_prod=$this->universal_db()->table('products_bookmap')
       ->insertGetId(array( 
       'name_prod'=>$name_prod,
       'cat'=>$cat_prod,
       'desc'=>$desc_prod,
       // 'ean'=>$ean_prod,
       // 'qnt'=>$qnt_prod,
       'price'=>$price_prod,
       'place'=>$place_prod,
       'lat'=>$lat_prod,
       'lng'=>$lng_prod,
       'id_vendor'=>auth()->guard('users_bookmap')->user()->id,//inserire id user Auth::user()->id
       'name_vendor'=>auth()->guard('users_bookmap')->user()->username,//inserire id user Auth::user()->id
      ));


       $this->universal_db()->table('products_bookmap')
        ->where('id', '=',$id_prod)
        ->update(
          array(
           'path'=>$id_prod,
         ));

       $qnt_prod=$this->universal_db()->table('products_bookmap')
        ->select(DB::raw('count(id_vendor) as count_prod'))
        ->where('id_vendor', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user
        ->first();

        $this->universal_db()->table('users_bookmaps')
        ->where('id', '=',auth()->guard('users_bookmap')->user()->id)
        ->update(
          array(
           'qnt_prod'=>$qnt_prod->count_prod,
         ));

      } else if($type_subscription==1 && $qnt_prod<=49) {

        $result=0;
        //add product
       $id_prod=$this->universal_db()->table('products_bookmap')
       ->insertGetId(array( 
       'name_prod'=>$name_prod,
       'cat'=>$cat_prod,
       'desc'=>$desc_prod,
       // 'ean'=>$ean_prod,
       // 'qnt'=>$qnt_prod,
       'price'=>$price_prod,
       'place'=>$place_prod,
       'lat'=>$lat_prod,
       'lng'=>$lng_prod,
       'id_vendor'=>auth()->guard('users_bookmap')->user()->id,//inserire id user Auth::user()->id
       'name_vendor'=>auth()->guard('users_bookmap')->user()->username,//inserire id user Auth::user()->id
      ));

       $this->universal_db()->table('products_bookmap')
        ->where('id', '=',$id_prod)
        ->update(
          array(
           'path'=>$id_prod,
         ));

       $qnt_prod=$this->universal_db()->table('products_bookmap')
        ->select(DB::raw('count(id_vendor) as count_prod'))
        ->where('id_vendor', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user
        ->first();

        $this->universal_db()->table('users_bookmaps')
        ->where('id', '=',auth()->guard('users_bookmap')->user()->id)
        ->update(
          array(
           'qnt_prod'=>$qnt_prod->count_prod,
         ));

      }else if($type_subscription==2){

        $result=0;
        //add product
       $id_prod=$this->universal_db()->table('products_bookmap')
       ->insertGetId(array( 
       'name_prod'=>$name_prod,
       'cat'=>$cat_prod,
       'desc'=>$desc_prod,
       // 'ean'=>$ean_prod,
       // 'qnt'=>$qnt_prod,
       'price'=>$price_prod,
       'place'=>$place_prod,
       'lat'=>$lat_prod,
       'lng'=>$lng_prod,
       'id_vendor'=>auth()->guard('users_bookmap')->user()->id,//inserire id user Auth::user()->id
       'name_vendor'=>auth()->guard('users_bookmap')->user()->username,//inserire id user Auth::user()->id
      ));

       $this->universal_db()->table('products_bookmap')
        ->where('id', '=',$id_prod)
        ->update(
          array(
           'path'=>$id_prod,
         ));

       $qnt_prod=$this->universal_db()->table('products_bookmap')
        ->select(DB::raw('count(id_vendor) as count_prod'))
        ->where('id_vendor', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user
        ->first();

        $this->universal_db()->table('users_bookmaps')
        ->where('id', '=',auth()->guard('users_bookmap')->user()->id)
        ->update(
          array(
           'qnt_prod'=>$qnt_prod->count_prod,
         ));

      }else{

        $result=1;

      }

    }else{

      $result=2;

    }

    $id_user=auth()->guard('users_comiziamo')->user()->id;

    $input = 'kartik-input-25';

    $target_dir = "../public/bookmap_repo/img_user/".$id_user."/".$id_prod."/";


    if( is_dir($target_dir) === false ){

      mkdir($target_dir);

    }

    $total = count($_FILES[$input]['name']); 

    for ($i = 0; $i < $total; $i++) {

      $path = str_replace(" ","_",$_FILES[$input]['name'][$i]);
         
      $target_file = $target_dir . basename($path);   

      move_uploaded_file($_FILES[$input]['tmp_name'][$i], $target_file);

    }
    
    echo json_encode(str_replace(" ","_",$_FILES[$input]['name']));
    
  }

  public function add_product_bookmap(Request $request){

   
   $id_prod= Request::get('id_prod');
   $name_prod= Request::get('name_prod');
   $cat_prod= Request::get('cat_prod');
   $desc_prod= Request::get('desc_prod');
   // $ean_prod= Request::get('ean_prod');
   // $qnt_prod= Request::get('qnt_prod');
   $price_prod= Request::get('price_prod');
   $place_prod= Request::get('place_prod');
   $lat_prod= Request::get('lat_prod');
   $lng_prod= Request::get('lng_prod');
   // $image_prod= Request::get('image_prod');

  //add product
   $id_prod=$this->universal_db()->table('products_bookmap')
   ->insertGetId(array( 
   'name_prod'=>$name_prod,
   'cat'=>$cat_prod,
   'desc'=>$desc_prod,
   // 'ean'=>$ean_prod,
   // 'qnt'=>$qnt_prod,
   'price'=>$price_prod,
   'place'=>$place_prod,
   'lat'=>$lat_prod,
   'lng'=>$lng_prod,
   // 'name_img'=>$image_prod,
   'id_vendor'=>auth()->guard('users_bookmap')->user()->id,//inserire id user Auth::user()->id
   'name_vendor'=>auth()->guard('users_bookmap')->user()->username,//inserire id user Auth::user()->id
   'image_vendor'=>auth()->guard('users_bookmap')->user()->image,//inserire id user Auth::user()->id
  ));

   $this->universal_db()->table('products_bookmap')
   ->where('id', '=',$id_prod)
   ->update(
    array(
     'path'=>$id_prod,
   ));

   $qnt_prod=$this->universal_db()->table('products_bookmap')
    ->select(DB::raw('count(id_vendor) as count_prod'))
    ->where('id_vendor', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user
    ->first();

    $this->universal_db_user()->table('users_bookmaps')
    ->where('id', '=',auth()->guard('users_bookmap')->user()->id)
    ->update(
      array(
       'qnt_prod'=>$qnt_prod->count_prod,
     ));

  return View::make('query')->with("result",json_encode($id_prod));//inserire id user Auth::user()->id


  }


  public function add_image_product_bookmap(Request $request){

   
   $id_prod= Request::get('id_prod');
   $image_prod= Request::get('image_prod');



   $this->universal_db()->table('products_bookmap')
   ->where('id', '=',$id_prod)
   ->update(
    array(
     'name_img'=>$image_prod,
   ));

  return View::make('query')->with("result",json_encode("fatto"));//inserire id user Auth::user()->id


  }


  public function save_product_bookmap(){

    


   //update 
   $id_prod= Request::get('id_prod');
   $name_prod= Request::get('name_prod');
   $cat_prod= Request::get('cat_prod');
   $desc_prod= Request::get('desc_prod');
   // $ean_prod= Request::get('ean_prod');
   // $qnt_prod= Request::get('qnt_prod');
   $price_prod= Request::get('price_prod');
   $place_prod= Request::get('place_prod');
   $lat_prod= Request::get('lat_prod');
   $lng_prod= Request::get('lng_prod');


   $this->universal_db()->table('products_bookmap')
   ->where('id', '=',$id_prod)
   ->update(
    array(

     'name_prod'=>$name_prod,
     'cat'=>$cat_prod,
     'desc'=>$desc_prod,
     // 'ean'=>$ean_prod,
     // 'qnt'=>$qnt_prod,
     'price'=>$price_prod,
     'place'=>$place_prod,
     'lat'=>$lat_prod,
     'lng'=>$lng_prod,

   ));

       return View::make('query')->with("result",json_encode($id_prod));
    
  }


  public function update_img_product_bookmap(){

    


   //update 
   $id_prod= Request::get('id_prod');
   $image_prod= Request::get('image_prod');

   $this->universal_db()->table('products_bookmap')
   ->where('id', '=',$id_prod)
   ->update(
    array(

     'name_img'=>$image_prod,

   ));

     return View::make('query')->with("result",json_encode(auth()->guard('users_bookmap')->user()->id));//inserire id user Auth::user()->id
    
  }


  public function delete_product_bookmap(){
    
    $this->universal_db()->table('products_bookmap')
    ->where('id', '=',Request::get('id_prod'))
    ->where('id_vendor', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user Auth::user()->id
    ->delete();
    
    $dirPath='bookmap_repo/img_user/'.auth()->guard('users_bookmap')->user()->id.'/'.Request::get('id_prod').'/';
    $this->deleteDir($dirPath);
    return View::make('query')->with("result",json_encode("delete!"));

  }

  function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
      throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
      $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
      if (is_dir($file)) {
        self::deleteDir($file);
      } else {
        unlink($file);
      }
    }
    rmdir($dirPath);
  }

  public function check_subscription_bookmap(){

    //DARIO

    if (auth()->guard('users_bookmap')->check()) {

      $id_user=auth()->guard('users_bookmap')->user()->id;
      $date_subscription=auth()->guard('users_bookmap')->user()->date_subscription; //lo ricavo da user
      $qnt_prod=auth()->guard('users_bookmap')->user()->qnt_prod;
      $date_current=date("Y-m-d H:i:s");

      //result 0=scaduto
      //result 1=non scaduto
      //result 2=non sei loggato

      if ($date_current>$date_subscription) {

        $result=0;

        $this->universal_db()->table('users_bookmaps')
        ->where('id','=',$id_user)
        ->update(
          array(
            'subscription'=>0,
         ));

        $qnt_residue=$qnt_prod-5;

        $this->universal_db()->table('products_bookmap')
        ->where('id_vendor','=',$id_user)
        ->limit($qnt_residue)
        ->update(
          array(
            'visibility'=>1,
         ));

      }else{
        $result=1;
      }

    }else{
        $result=2;
    }

    return View::make('query')->with("result",json_encode($result));

  }


  public function check_count_product_user(){

  if (auth()->guard('users_bookmap')->check()) {


    //0=standard 0-5
    //1=premium 6-50
    //2=51 - deluxe infinito

    //result 0=puoi creare
    //result 1=non puoi creare
    //result 2=non sei loggato

   $type_subscription=auth()->guard('users_bookmap')->user()->subscription; //lo ricavo da user 
   $date_subscription=auth()->guard('users_bookmap')->user()->date_subscription; //lo ricavo da user 
   $qnt_prod=auth()->guard('users_bookmap')->user()->qnt_prod; //lo ricavo da user 
 

    if ($type_subscription==0 && $qnt_prod<=4) {
 
      $result=0;

    } else if($type_subscription==1 && $qnt_prod<=49) {

      $result=0;

    }else if($type_subscription==2){

      $result=0;

    }else{

      $result=1;

    }

  }else{

    $result=2;

  }

    return View::make('query')->with("result",json_encode($result));

    
  }

  public function add_cart_bookmap(){

   $id_prod= Request::get('id_prod');
   $price_prod= Request::get('price_prod'); 

   

   $prod_exist=$this->universal_db()->table('cart_bookmap')
   ->where('id_product', '=',$id_prod)
   ->where('id_buyer', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user
   ->first();

   if ($prod_exist==null) {

    $this->universal_db()->table('cart_bookmap')
   ->insertGetId(array( 
   'id_product'=>$id_prod,
   'price'=>$price_prod,
   'id_buyer'=>auth()->guard('users_bookmap')->user()->id,//inserire id user Auth::user()->id
   ));

   }

   $count_prod=$this->universal_db()->table('cart_bookmap')
    ->select(DB::raw('count(id_buyer) as count_prod'))
    ->where('id_buyer', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user Auth::user()->id
    ->get();

   return View::make('query')->with("result",json_encode($count_prod[0]->count_prod));
  

  }

  public function count_get_cart_bookmap(){

    if (auth()->guard('users_bookmap')->check()) {
   
   $get_cart=$this->universal_db()->table('cart_bookmap')
    ->select(DB::raw('count(products_bookmap.id) as count_prod_cart'))
    ->join('products_bookmap', 'products_bookmap.id', '=', 'cart_bookmap.id_product') 
    ->where('id_buyer', '=',auth()->guard('users_bookmap')->user()->id) //inserire id user Auth::user()->id
    ->get();
    }else{

      $get_cart=0;
    }

    return View::make('query')->with("result",json_encode($get_cart));

  }

  //conta i messaggi da leggere dell'utente
  public function count_get_chat_bookmap(){
    $get_mess_chat=$this->universal_db()->table('chat_bookmap')
      ->select(DB::raw('count(id) as count_mess_chat'))
      ->where('id_user_receive', '=',auth()->guard('users_bookmap')->user()->id) //inserire id user Auth::user()->id
      ->where('readen','=',0)
      ->get();
      return View::make('query')->with("result",json_encode($get_mess_chat));
  }

  public function get_cart_bookmap(){

    if (auth()->guard('users_bookmap')->check()) {
   
   $get_cart=$this->universal_db()->table('cart_bookmap')
    ->select(DB::raw('products_bookmap.*'))
    ->join('products_bookmap', 'products_bookmap.id', '=', 'cart_bookmap.id_product') 
    ->where('id_buyer', '=',auth()->guard('users_bookmap')->user()->id) //inserire id user Auth::user()->id
    ->get();
    }else{

      $get_cart=0;
    }
    

   return View::make('query')->with("result",json_encode($get_cart));

  }

  public function delete_prod_cart_bookmap(){

    
    $this->universal_db()->table('cart_bookmap')
    ->where('id_product', '=',Request::get('id_prod'))
    ->where('id_buyer', '=',auth()->guard('users_bookmap')->user()->id)//inserire id user Auth::user()->id
    ->delete();

    return View::make('query')->with("result",json_encode("delete!"));

  }

  //contact
  public function get_user_chat_box_bookmap(){
    $id_user_send=auth()->guard('users_bookmap')->user()->id;
    $dataroom = $this->universal_db()->table('chat_room_bookmap as ch')
    ->where(function($query) use ($id_user_send) {
      $query->where("user1", "=", $id_user_send);
      $query->orWhere("user2", "=", $id_user_send);
    })
    ->select('user1', 'user2')
    ->distinct()
    ->get();
    $distinct_users = collect($dataroom->pluck('user1')->merge($dataroom->pluck('user2')))
    ->unique()
    ->reject(function ($value) use($id_user_send){
      return $value == $id_user_send;
    })
    ->values();
    $result = [];
    foreach ($distinct_users as $key => $value) {
      $datauser=$this->get_data_user_chat($value);
      if (isset($datauser)) {
        $result[] = $datauser;
      }
    }
    return View::make('query')->with("result",json_encode($result));
  }

  //ottiene i nomi e quanti messaggi sono stati inviati a users
  function get_data_user_chat($value){
    $id_user_send = auth()->guard('users_bookmap')->user()->id;
    $data = $this->universal_db_user()->table('users_bookmaps as ub')
        ->select(DB::raw('ub.id, ub.username, ub.image, cb.id_room, sum(cb.readen=0) as count'))
        ->leftJoin('bookmap.chat_bookmap as cb', 'cb.id_user_send', '=', 'ub.id') 
        ->where("cb.id_user_send","=",$value)
        ->where("cb.id_user_receive","=",$id_user_send)
        ->groupBy('ub.id', 'ub.username', 'ub.image', 'cb.id_room')
        ->first();
    return $data;
  }

  //ottiene tutti i messaggi della chat
  public function get_chat_bookmap(){
    $id_room= Request::get('id_room');
    $get_chat=$this->universal_db()->table('chat_bookmap')
    ->where('id_room', '=',$id_room)
    ->get();
    $get_chat[]=array("id_user"=>auth()->guard('users_bookmap')->user()->id);
    //update chat_bookmap set readen=0
    $this->universal_db()->table('chat_bookmap')
      ->where('id_user_receive','=',auth()->guard('users_bookmap')->user()->id)
      ->where('id_room','=',$id_room)
      ->update(
        array(
       'readen'=>1,
       ));
    return View::make('query')->with("result",json_encode($get_chat));
  }

  //invia messaggi chat
  public function send_chat_bookmap(){
    $id_user_send=auth()->guard('users_bookmap')->user()->id;
    $id_room=Request::get("id_room");
    $message=Request::get("message");
    $id_user_receive=Request::get("id_user_receive");
    $new_id_room;
    if ($id_user_receive) {
      $new_id_room=$this->send_chat_from_home($id_user_send, $id_user_receive, $message);
    }else{
      $new_id_room=$this->send_chat_from_contact($id_room, $id_user_send, $message);
    }
    return View::make('query')->with("result",json_encode($new_id_room));
  }

  //invia messaggi chat dalla home
  function send_chat_from_home($id_user_send, $id_user_receive, $message){
    //query che controlla se i membri della chat hanno comunicato tra loro
    $id_room=$this->universal_db()->table('chat_room_bookmap')
    ->where(function($query) use ($id_user_send, $id_user_receive) {
      $query->where("user1","=",$id_user_send);
      $query->where("user2","=",$id_user_receive);
    })
    ->orWhere(function($query) use ($id_user_send, $id_user_receive) {
      $query->where("user2","=",$id_user_send);
      $query->Where("user1","=",$id_user_receive);
    })
    ->first();
    //controlla se non hanno comunicato tra loro crea un nuovo idroom diversamente si prende l'idroom già esistente
    if (!isset($id_room)) {
      $id_room=$this->universal_db()->table('chat_room_bookmap')
      ->insertGetId(array(
        "user1"=>$id_user_send,
        "user2"=>$id_user_receive,
        "date"=>now()
      ));
    }else{
      $id_room=$id_room->id;
    }
    $this->save_chat($id_user_send, $id_user_receive, $id_room, $message);
    return $id_room;
  }

  //invia messaggi chat dal contact
  function send_chat_from_contact($id_room, $id_user_send, $message){
    $get_user_chat=$this->universal_db()->table('chat_room_bookmap')
    ->where('id', '=',$id_room)
    ->first();
    $user_chat=array($get_user_chat->user1, $get_user_chat->user2);
    foreach ($user_chat as $key => $value) {
      if ($value != $id_user_send) {
        $id_user_receive=$value;
      }
    }
    $this->save_chat($id_user_send, $id_user_receive, $id_room, $message);
    return $id_room;
  }

  //salva messaggi della chat
  function save_chat($id_user_send, $id_user_receive, $idroom, $message){
    $get_data_user_send=Users_bookmap::find($id_user_send);
    $get_data_user_receive=Users_bookmap::find($id_user_receive);
    $this->universal_db()->table('chat_bookmap')
      ->insertGetId(array(
        "id_room"=>$idroom,
        "message"=>$message,
        "id_user_send"=>$get_data_user_send->id,
        "name_user_send"=>$get_data_user_send->username,
        "image_user_send"=>$get_data_user_send->image,
        "id_user_receive"=>$get_data_user_receive->id,
        "name_user_receive"=>$get_data_user_receive->username,
        "image_user_receive"=>$get_data_user_receive->image,
        "readen"=>0
      ));
  }

  //profile
  public function upload_img_profile_bookmap(){
    
    $id_user=auth()->guard('users_bookmap')->user()->id;
    $file_name=Request::get('file_name');
    $this->universal_db()->table('users_bookmaps')
      ->where('id','=',$id_user)
      ->update(
        array(
       'image'=>$file_name,
       ));

  }


  public function save_data_user_bookmap(){
    
    $id_user=auth()->guard('users_bookmap')->user()->id;
    $username=Request::get('username');
    $this->universal_db()->table('users_bookmaps')
      ->where('id','=',$id_user)
      ->update(
        array(
       'username'=>$username,
       ));

    $this->universal_db()->table('products_bookmap')
      ->where('id_vendor','=',$id_user)
      ->update(
        array(
       'name_vendor'=>$username,
       ));

    $this->universal_db()->table('chat_bookmap')
      ->where('id_user_send','=',$id_user)
      ->update(
        array(
       'name_user_send'=>$username,
       ));

    $this->universal_db()->table('chat_bookmap')
      ->where('id_user_receive','=',$id_user)
      ->update(
        array(
       'name_user_receive'=>$username,
       ));          

    return View::make('query')->with("result",json_encode("fatto"));

  }

  public function change_subscription_bookmap(){
    
    $id_user=auth()->guard('users_bookmap')->user()->id;
    $state_subscription=Request::get('state_subscription');
    $qnt_prod=auth()->guard('users_bookmap')->user()->qnt_prod;
    $this->universal_db()->table('users_bookmaps')
      ->where('id','=',$id_user)
      ->update(
        array(
       'subscription'=>$state_subscription,
       'date_subscription'=>date("Y-m-d", strtotime("+1 month")),
       ));

      if ($state_subscription==1) {
        $qnt_residue=50;
      }else{
        $qnt_residue=$qnt_prod;
      }
      
      $this->universal_db()->table('products_bookmap')
      ->where('id_vendor','=',$id_user)
      ->limit($qnt_residue)
      ->update(
        array(
          'visibility'=>0,
        ));  

    return View::make('query')->with("result",json_encode("fatto"));

  }

  public function get_user_bookmap(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));

    $get_user=$this->universal_db()->table('users_bookmaps')
      ->select(DB::raw('id, username, created_at, subscription, date_subscription, qnt_prod'))
      ->get();

    return View::make('query')->with("result",json_encode($get_user));   

  }


  public function check_token_exist_bookmap(){
    //
    $ip_address=Request::get('ip_address');
    $type_interaction=Request::get('type_interaction');
    $search=Request::get('search');
    $from=Request::get('from');

    $max_numb = $this->universal_db()->table('cookie_bookmap')
    ->select(DB::raw('max(numb_access) as max_numb_access'))
    ->where("ip_address", "=", $ip_address)
    ->where("type_interaction", "=", $type_interaction)
    ->where("last_access", "LIKE" , "%".Carbon::today()."%")
    ->get();


    if ($max_numb[0]->max_numb_access!=0) {

      $this->universal_db()->table('cookie_bookmap')  
      ->where('ip_address', '=',$ip_address)
      ->where("type_interaction", "=", $type_interaction)
      ->where("last_access", "LIKE" , "%".Carbon::today()."%")
      ->update(
        array(
         'numb_access'=>$max_numb[0]->max_numb_access+1,
       ));

    }else{

      $this->universal_db()->table('cookie_bookmap')
      ->insertGetId(array( 
       'ip_address'=>$ip_address,
       'type_interaction'=>$type_interaction,
       'last_access'=>Carbon::today(),
       'numb_access'=>1,
       'from_fb'=>$from,

     ));

    }

    if ($type_interaction=="search") {
      $this->universal_db()->table('cookie_bookmap_search')
      ->insertGetId(array( 
       'ip_address'=>$ip_address,
       'search'=>$search,
     ));
    }

    return View::make('query')->with("result",json_encode("fatto"));

  }

  public function get_visitor_bookmap(){

    $get_access = DB::select('SELECT * FROM `cookie_bookmap` WHERE last_access >= CURRENT_DATE - INTERVAL 9 DAY AND last_access < CURRENT_DATE + INTERVAL 1 DAY ORDER BY `cookie_bookmap`.`date_stamp` DESC');

    return View::make('query')->with("result",json_encode($get_access));  

  }

  public function get_search_bookmap(){

    $get_search=$this->universal_db()->table('cookie_bookmap_search')
      //->where('search', '!=',"")
      ->orderBy('date', 'DESC')
      ->get();

    return View::make('query')->with("result",json_encode($get_search));  

  }

  public function get_discount_code_bookmap(){

    // 

    $code_discount=Request::get("code_discount");

    $get_discount=$this->universal_db()->table('discount_code_bookmap')
    ->where('code', 'LIKE','%'.$code_discount.'%')
    ->where('used', '=',0)
    ->get();  

    return View::make('query')->with("result",json_encode($get_discount));

  }

  public function get_last_prod_bookmap(){

    // 


    $get_last_prod = DB::select('SELECT * FROM `products_bookmap` where name_img!="" ORDER BY RAND() LIMIT 1');

    return View::make('query')->with("result",json_encode($get_last_prod));

  }

  function random_token(){
    $token;
    do{
      $token = $this->getRandomString(64);
      $orders_with_token = $this->universal_db()->table('chat_room_bookmap')
      ->where("id_room", "=", $token)
      ->get();
      $token_exists = count($orders_with_token) > 0;
      return $token;
    }while($token_exists);
  }


  function getRandomString($length = 64) {
    $characters = '0123456789abcdefghijklmnopqrstuvxyzABCDEFGHIJKLMNOPQRSTUVXYZ';
    $string = '';
    for ($i = 0; $i < $length; $i++) {
      $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $string;
  }


}