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
use Illuminate\Http\Response;
use Cookie;

class IleniadesignController extends Controller{

  function universal_db($db){
    $dab=$db;
    DB::disconnect("mysql_dynamic");
    Config::set('database.connections.mysql_dynamic.database',$dab);
    $universal=DB::connection('mysql_dynamic');
    return $universal;
  }

  public function universal_user_db(){
    Config::set('database.connections.mysql_dynamic.database','test');
    $universal=DB::connection('mysql');
    return $universal;
  }

  //random token
  function random_token_user_ilenia_design($db, $table, $column){

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

  function getRandomString($length = 8) {
    $characters = '0123456789';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
      $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
  }

  //Controllers start
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

    //mi permette di controllare sin dall'inizio se l'utente è loggato o meno e quindi passarmi i dati senza andare in errore sfruttando semplicemente nelle view {{$_SESSION['cell']}}
    if (auth()->guard('users_ileniadesign')->check()) {

      $_SESSION["id"]=auth()->guard('users_ileniadesign')->user()->id;
      $_SESSION["name"]=auth()->guard('users_ileniadesign')->user()->name;
      $_SESSION["lastname"]=auth()->guard('users_ileniadesign')->user()->lastname;
      $_SESSION["email"]=auth()->guard('users_ileniadesign')->user()->email;
      $_SESSION["cell"]=auth()->guard('users_ileniadesign')->user()->cell;
      $_SESSION["address"]=auth()->guard('users_ileniadesign')->user()->address;
      $_SESSION["state"]=auth()->guard('users_ileniadesign')->user()->state;
      $_SESSION["region"]=auth()->guard('users_ileniadesign')->user()->region;
      $_SESSION["city"]=auth()->guard('users_ileniadesign')->user()->city;
      $_SESSION["zip"]=auth()->guard('users_ileniadesign')->user()->zip;

    }else{

      //controllo se esiste il cookie diversamente lo associo
      $this->getCookie()=='' ? $this->setCookie() : false;

      $_SESSION["id"]="";
      $_SESSION["name"]="";
      $_SESSION["lastname"]="";
      $_SESSION["email"]="";
      $_SESSION["cell"]="";
      $_SESSION["address"]="";
      $_SESSION["state"]="";
      $_SESSION["region"]="";
      $_SESSION["city"]="";
      $_SESSION["zip"]="";

    }

    return view('ileniadesign.'.$result.'.home')->with("data",json_encode($data));
  }

  function setCookie(){
    $minutes = 525960;//1 anno
    $value = $this->random_token_user_ilenia_design('ileniadesign','cart_ileniadesign','id_user');
    Cookie::queue('cookie', $value, $minutes);
  }

  function getCookie(){
    $value = Cookie::get('cookie');
    return $value;
  }

  public function lang_change(){
      $lang=Request::get("lang");
      App::setLocale($lang);
      session()->put('locale', $lang); 
      return redirect()->back();
  }

  //controller login
  public function store($numb){
      
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
          'cookie' => $this->getCookie(),
          'token_user' => $this->random_token_user_ilenia_design('test','users_ileniadesigns','token_user'),

      ]);
      
      auth()->guard('users_ileniadesign')->login($user);

      $this->universal_db('ileniadesign')->table('cart_ileniadesign')
        ->where('id_user','=',$this->getCookie())
        ->update(
          array(
           'id_user'=>auth()->guard('users_ileniadesign')->user()->id,
      ));

      if ($numb==1) {
        return redirect()->to('/ileniadesign');
      }else{
        return redirect()->to('/id?page=cart');
      }

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

  protected function check_login($numb){

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
              
            $this->universal_db('ileniadesign')->table('cart_ileniadesign')
              ->where('id_user','=',$this->getCookie())
              ->update(
                array(
                'id_user'=>auth()->guard('users_ileniadesign')->user()->id,
            ));

            if ($numb==1) {
              return redirect()->to('/ileniadesign');
            }else{
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
    
    $user = $this->universal_db('test')->table('users_ileniadesigns')
    ->where('email', '=', $email)
    ->get();
    
    if (count($user) < 1) {
      return redirect()->back()->withErrors(['email' => trans('email not exist!')]);
    }
    
    $user = $this->universal_db('test')->table('users_ileniadesigns')
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

  //controllers home
  public function get_promotion_ileniadesign(){

    $get_discount=$this->universal_db('ileniadesign')->table('image_discount_ileniadesign')
    ->where('end_discount', '=',0)
    ->get();  

    $get_gift=$this->universal_db('ileniadesign')->table('image_gift_ileniadesign')
    ->where('status', '=',0)
    ->get(); 

    $result=["get_discount"=>$get_discount, "get_gift"=>$get_gift];

    return View::make('query')->with("result",json_encode($result));

  }

  public function check_locator_ileniadesign(){
    $locator=Request::get("locator");
    if (auth()->guard('users_ileniadesign')->check()) {
      $this->universal_user_db('test')->table('users_ileniadesigns')
      ->where('id', '=',auth()->guard('users_ileniadesign')->user()->id)
      ->update(
        array(
         'state'=>$locator,
      ));
    }  
    $price = $locator == "Italy" ? 7 : 21;
    $type_delivery = $locator == "Italy" ? "DHL SPEDIZIONI ITALIA" : "DHL SPEDIZIONI EUROPA";
    $within_delivery = $locator == "Italy" ? "Spedizione prevista 3 - 6 giorni" : "Spedizione prevista 12 - 16 giorni";
    $result=["locator"=>$locator, "price"=>$price, "type_delivery"=>$type_delivery, "within_delivery"=>$within_delivery];
    return View::make('query')->with("result",json_encode($result));

  }

  public function check_token_exist_ileniadesign(){
   
    $ip_address=Request::get('ip_address');
    $type_interaction=Request::get('type_interaction');
    $from=Request::get('from');
    $city=Request::get('city');
    $max_numb = $this->universal_db('ileniadesign')->table('cookie_ileniadesign')
    ->select($this->universal_db('ileniadesign')->raw('max(numb_access) as max_numb_access'))
    ->where("ip_address", "=", $ip_address)
    ->where("type_interaction", "=", $type_interaction)
    ->where("last_access", "LIKE" , "%".Carbon::today()."%")
    ->get();
    if ($max_numb[0]->max_numb_access!=0) {
      $this->universal_db('ileniadesign')->table('cookie_ileniadesign')  
      ->where('ip_address', '=',$ip_address)
      ->where("type_interaction", "=", $type_interaction)
      ->where("last_access", "LIKE" , "%".Carbon::today()."%")
      ->update(
        array(
         'numb_access'=>$max_numb[0]->max_numb_access+1,
       ));
    }else{
      $this->universal_db('ileniadesign')->table('cookie_ileniadesign')
      ->insertGetId(array( 
       'ip_address'=>$ip_address,
       'type_interaction'=>$type_interaction,
       'last_access'=>Carbon::today(),
       'numb_access'=>1,
       'from_fb'=>$from,
       'city'=>$city,
     ));
    }

    return View::make('query')->with("result",json_encode("fatto"));

  }

  //controllers shopmyart
  public function get_image_shopmyart_ileniadesign(){

    $type_img=Request::get("type_img");
    $get_image = $this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
    ->orderBy('position', 'DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_image)); 

  }

  public function get_subcat_ileniadesign(){

    $id_cat=Request::get('id_cat');

    $get_subcat=$this->universal_db('ileniadesign')->table('image_subcategory_ileniadesign')
      ->get();

    return View::make('query')->with("result",json_encode($get_subcat)); 

  }

  public function update_position_image_ileniadesign(){
  
  $ultimate_array_position=Request::get('ultimate_array_position');

  $array=explode(",", $ultimate_array_position);

  for ($i=0; $i < count($array); $i++) { 
    $this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
    ->where('id', '=',explode("_", $array[$i])[0])
    ->update(
      array(
        'position'=>explode("_", $array[$i])[1],
      ));
  }

  return View::make('query')->with("result",json_encode("edited!")); 

  }

  //controllers shopdetail
  public function get_image_detail_ileniadesign(){

    $id_image=Request::get('id_image');
    $type_page=Request::get('type_page');

    $get_image = $this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
    ->where('id', '=',$id_image)
    ->get();
    return View::make('query')->with("result",json_encode($get_image)); 

  }

  public function get_count_prod_cart_ileniadesign(){

    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      $id_user=$this->getCookie();

    }

    $get_cart=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->select(DB::raw('sum(qnt) as sum_qnt_cart'))
    ->where('id_user', '=',$id_user)
    ->where('sold', '=',null)
    ->first();

    return View::make('query')->with("result",$get_cart->sum_qnt_cart);

  }

  public function add_cart_ileniadesign(){

    $id_product=Request::get("id_product");
    $name_product=Request::get("name_product");
    $qnt=Request::get("qnt");
    $price=Request::get("price");
    $format=Request::get("format");
    $price_a4=Request::get("price_a4");
    $price_a3=Request::get("price_a3");
    $price_a5=Request::get("price_a5");
    $type_image=Request::get("type_image");
    
    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      $id_user=$this->getCookie();

    }

    $exist_product=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->where('id_user','=',$id_user)
    ->where('id_product','=',$id_product)
    ->where('format','=',$format)
    ->where('sold','=',null)
    ->first();

    if ($exist_product) {

      $this->universal_db('ileniadesign')->table('cart_ileniadesign')
      ->where('id_user','=',$id_user)
      ->where('id_product','=',$id_product)
      ->where('format','=',$format)
      ->where('sold','=',null)
      ->update(array( 
        'qnt'=>$exist_product->qnt+1,
      ));

    }else{

      $this->universal_db('ileniadesign')->table('cart_ileniadesign')
      ->insertGetId(array( 
        'id_product'=>$id_product,
        'name_product'=>$name_product,
        'qnt'=>$qnt,
        'price'=>$price,
        'format'=>$format,
        'id_user'=>$id_user,
        'price_a4'=>$price_a4,
        'price_a3'=>$price_a3,
        'price_a5'=>$price_a5,
        'type_img'=>$type_image,
      ));  

    }

  return View::make('query')->with("result",json_encode("added!"));

  }

  public function add_prefer_ileniadesign(){

    $id_product=Request::get("id_product");
    $name_product=Request::get("name_product");
    $price=Request::get("price");
    $type_image=Request::get("type_image");
    
    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      $id_user=$this->getCookie();

    }

    $exist_product=$this->universal_db('ileniadesign')->table('prefer_ileniadesign')
    ->where('id_user','=',$id_user)
    ->where('id_product','=',$id_product)
    ->first();

    if (!$exist_product) {

      $this->universal_db('ileniadesign')->table('prefer_ileniadesign')
      ->insertGetId(array( 
        'id_product'=>$id_product,
        'name_product'=>$name_product,
        'price'=>$price,
        'id_user'=>$id_user,
        'type_img'=>$type_image,
      ));  

    }

    return View::make('query')->with("result",json_encode($exist_product));

  }

  //controllers cart
  public function get_prod_cart_ileniadesign(){

    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      $id_user=$this->getCookie();

    }

    $get_cart=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->select(DB::raw('image_shopmyart_ileniadesign.type_img as cat_img, image_shopmyart_ileniadesign.subtype_image as subcat_img, cart_ileniadesign.*'))
    ->join('image_shopmyart_ileniadesign', 'image_shopmyart_ileniadesign.id', '=', 'cart_ileniadesign.id_product') 
    ->where('cart_ileniadesign.id_user', '=',$id_user)
    ->where('cart_ileniadesign.sold', '=',null)
    ->get();

    return View::make('query')->with("result",json_encode($get_cart));

  }

  public function update_prod_cart_ileniadesign(){

    $id_cart=Request::get("id_cart");
    $format=Request::get("format");
    $qnt=Request::get("qnt");
    $price=Request::get("price");
    
    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      $id_user=$this->getCookie();

    }

    $this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->where('id', '=',$id_cart)
    ->where('id_user', '=',$id_user)
    ->update(
      array(

        'format'=>$format,
        'qnt'=>$qnt,
        'price'=>$price,

      ));

    return View::make('query')->with("result",json_encode("aggiornato"));

  }

  public function delete_prod_cart_ileniadesign(){
  
    $id_product=Request::get("id_product");

    $this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->where('id', '=',$id_product)
    ->delete();

    return View::make('query')->with("result",json_encode("delete!"));
    
  }

  public function get_setting_gift_ileniadesign(){

    $get_setting_gift=$this->universal_db('ileniadesign')->table('image_gift_ileniadesign')
    ->where("status","=",0)
    ->get();

    return View::make('query')->with("result",json_encode($get_setting_gift));

  }

  public function send_data_cart_ileniadesign(){

    $discount_cart=Request::get("discount_cart");
    $object_real_price=Request::get("object_real_price");

    for ($i=0; $i < count($object_real_price); $i++) { 
      $id_cart=$object_real_price[$i]["id_cart"];
      $real_price=$object_real_price[$i]["real_price"];
      $this->universal_db('ileniadesign')->table('cart_ileniadesign')
      ->where("id","=",$id_cart)
      ->update(array(
        "disc_applied"=>$discount_cart,
        "price_applied"=>$real_price,
      ));
    }  

    $get_list_item=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->where('id_user','=', auth()->guard('users_ileniadesign')->user()->id)
    ->where('sold','=', null)
    ->get();

    return View::make('query')->with("result",json_encode($get_list_item));

  }

public function convert_sold_ileniadesign(){
  
  $id_cart=Request::get("id_cart");
  $text_total_gift=Request::get("text_total_gift");
  $total_gift=Request::get("total_gift");
  $discount_cart=Request::get("discount_cart");
  $total_discount=Request::get("total_discount");
  $delivery=Request::get("delivery");
  
  $token = $this->random_token_user_ilenia_design('ileniadesign','cart_ileniadesign','sold_id');
  
  for( $i = 0; $i < count($id_cart); $i++ ) {
    
    $id_list_cart=str_replace("\"","",$id_cart[$i]);
    
    $this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->where('id','=', $id_list_cart)
    ->update(
      array(
        'gift_applied'=>$text_total_gift,
        'num_gift_applied'=>$total_gift,
        'disc_applied'=>$discount_cart,
        'percent_disc_applied'=>$total_discount,
        'delivery_cost'=>$delivery,
        'sold'=>1,
        'sold_id'=>$token,
        'status'=>"Processing",
      ));
      
    }
    
    return View::make('query')->with("result",json_encode($token));
    
  }

  //controllers summary
  public function save_data_user_ileniadesign(){
  
    $object_input=Request::get("object_input");

    $id_user=auth()->guard('users_ileniadesign')->user()->id;
    
    foreach ($object_input as $value) {
  
      $verify_code=$this->universal_db('test')->table('users_ileniadesigns')
      ->where('id', '=', $id_user)
      ->update(array(
        $value["column"]=>$value["value"],
      ));

    }
    
    return View::make('query')->with("result","updated!");
    
  }

  public function apply_discount_ileniadesign(){
  
    $name_discount=Request::get("name_discount");

    $verify_code=$this->universal_db('ileniadesign')->table('image_discount_ileniadesign')
    ->where('name', '=', $name_discount)
    ->first();

    if ($verify_code) {
      $code_verified=$verify_code->off;
    }else{
      $code_verified=0;
    }

    return View::make('query')->with("result",$code_verified);
    
  }

  //controllers setting
  public function get_all_image_ileniadesign(){

    $get_all_image=$this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
    ->select($this->universal_db('ileniadesign')->raw('image_shopmyart_ileniadesign.*, image_category_ileniadesign.id as id_cat, image_category_ileniadesign.name as name_cat, image_subcategory_ileniadesign.id as id_subcat, image_subcategory_ileniadesign.name as name_subcat'))
    ->join('image_category_ileniadesign', 'image_category_ileniadesign.id', '=', 'image_shopmyart_ileniadesign.type_img')
    ->join('image_subcategory_ileniadesign', 'image_subcategory_ileniadesign.id', '=', 'image_shopmyart_ileniadesign.subtype_image') 
    ->orderBy('id','DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_all_image));

  }

  public function get_category_image_ileniadesign(){

    $get_category=$this->universal_db('ileniadesign')->table('image_category_ileniadesign')
    ->select($this->universal_db('ileniadesign')->raw('id as id_cat, name as name_cat'))
    ->get();

    return View::make('query')->with("result",json_encode($get_category));

  }

  public function get_subcategory_image_ileniadesign(){

    $get_subcategory=$this->universal_db('ileniadesign')->table('image_subcategory_ileniadesign')
    ->select($this->universal_db('ileniadesign')->raw('id as id_subcat, name as name_subcat, id_cat as id_cat'))
    ->get();

    return View::make('query')->with("result",json_encode($get_subcategory));

  }

  public function get_discount_code_ileniadesign(){

    $get_discount_code=$this->universal_db('ileniadesign')->table('image_discount_ileniadesign')
    ->get();

    return View::make('query')->with("result",json_encode($get_discount_code));

  }

  public function get_gift_ileniadesign(){

    $get_gift_code=$this->universal_db('ileniadesign')->table('image_gift_ileniadesign')
    ->get();

    return View::make('query')->with("result",json_encode($get_gift_code));

  }

  public function add_image_ileniadesign(){

    $name_image=Request::get('name_image');
    $price_a4=Request::get('price_a4');
    $price_a3=Request::get('price_a3');
    $price_a5=Request::get('price_a5');
    $type_img_shopmyart=Request::get('type_img_shopmyart');
    $subtype_img_shopmyart=Request::get('subtype_img_shopmyart');

    $id_image=$this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
      ->insertGetId(array( 
  
        'name'=>strtoupper($name_image),
        'price_a4'=>$price_a4,
        'price_a3'=>$price_a3,
        'price_a5'=>$price_a5,
        'type_img'=>$type_img_shopmyart,
        'subtype_image'=>$subtype_img_shopmyart,

      ));

    return View::make('query')->with("result",json_encode($id_image)); 

  }

  public function add_data_cat_prod_ileniadesign(){

    $name_cat=Request::get('name_cat');

    $this->universal_db('ileniadesign')->table('image_category_ileniadesign')
    ->insertGetId(array(

      "name"=>$name_cat,

    ));

    return View::make('query')->with("result",json_encode("aggiornato")); 

  }

  public function add_data_subcat_prod_ileniadesign(){

    $name_subcat=Request::get('name_subcat');
    $id_cat=Request::get('id_cat');

    $this->universal_db('ileniadesign')->table('image_subcategory_ileniadesign')
    ->insertGetId(array(

      "name"=>$name_subcat,
      "id_cat"=>$id_cat,

    ));

    return View::make('query')->with("result",json_encode("aggiornato")); 

  }

  public function add_data_discount_prod_ileniadesign(){

    $name_discount=Request::get('name_discount');
    $off_discount=Request::get('off_discount');

    $this->universal_db('ileniadesign')->table('image_discount_ileniadesign')
    ->insertGetId(array(

      "name"=>$name_discount,
      "off"=>$off_discount,

    ));

    return View::make('query')->with("result",json_encode("aggiornato")); 

  }

  public function update_image_ileniadesign(){

    $id_image=Request::get('id_image');
    $image_file=Request::get('image_file');
    $position=Request::get('position');
    $ext_file=Request::get('ext_file');

    $this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
      ->where('id', '=',$id_image)
      ->update(
          array(
            'image_file'=>$image_file,
            'position'=>$position,
          ));

      return View::make('query')->with("result",json_encode("updated")); 

  }

  public function update_setting_image(){

    $table=Request::get("table");
    $id=Request::get("id");
    $complete_id=Request::get("complete_id");
    $name=Request::get("text");

    $this->universal_db('ileniadesign')->table($table)
    ->where("id","=",$id)
    ->update(array(
      $complete_id=>$name,
    ));

    return View::make('query')->with("result",json_encode("updated"));

  }

  public function update_setting_image_select(){

    $id=Request::get("id");
    $table=Request::get("table");
    $column=Request::get("column");
    $value=Request::get("value");

    $this->universal_db('ileniadesign')->table($table)
    ->where("id","=",$id)
    ->update(array(
      $column=>$value,
    ));

    return View::make('query')->with("result",json_encode("updated"));

  }

  public function delete_image_ileniadesign(){

    $id_image=Request::get('id_image');

    $this->universal_db('ileniadesign')->table('image_shopmyart_ileniadesign')
    ->where('id', '=',$id_image)
    ->delete();

    $file = new Filesystem;

    $target_dir = "../shopmyart/".$id_image."/";

    $file->deleteDirectory($target_dir);

    return View::make('query')->with("result",json_encode("eliminato")); 

  }

  public function delete_cat_subcat_ileniadesign(){

    $id=Request::get('id');
    $type=Request::get('type');
    $this->universal_db('ileniadesign')->table('image_'.$type.'_ileniadesign')
    ->where("id","=",$id)
    ->delete();

    return View::make('query')->with("result",json_encode("eliminato")); 

  }

  public function get_my_user_ileniadesign(){

    $get_user=$this->universal_user_db('test')->table('users_ileniadesigns')
    ->select(DB::raw('id as id, lastname as lastname, created_at as created_at'))
    ->get();  

    return View::make('query')->with("result",json_encode($get_user));

  }

  public function get_all_order_ileniadesign(){

    $get_cart_ileniadesign=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->orderBy('id', 'DESC')
    ->get();  

    return View::make('query')->with("result",json_encode($get_cart_ileniadesign));

  }

  public function get_visitor_ileniadesign(){

    $get_access_before = $this->universal_db('ileniadesign')->select('SELECT * FROM `cookie_ileniadesign` WHERE date_stamp >= CURRENT_DATE - INTERVAL 14 DAY AND date_stamp < CURRENT_DATE - INTERVAL 7 DAY ORDER BY `cookie_ileniadesign`.`date_stamp` DESC');
    $get_access_current = $this->universal_db('ileniadesign')->select('SELECT * FROM `cookie_ileniadesign` WHERE date_stamp >= CURRENT_DATE - INTERVAL 7 DAY AND date_stamp < CURRENT_DATE + INTERVAL 1 DAY ORDER BY `cookie_ileniadesign`.`date_stamp` DESC');
    $result=["get_access_current" => $get_access_current, "get_access_before" => $get_access_before]; 

    return View::make('query')->with("result",json_encode($result)); 

  }

  public function get_buyed_user_ileniadesign(){

    $get_cart=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->select($this->universal_db('ileniadesign')->raw('distinct sold_id, id_user, sold_date, status, count(id) as count_prod, sum(price) as sum_price'))
    ->where('sold', '=',1)
    ->groupBy('sold_id')
    ->groupBy('id_user')
    ->groupBy('sold_date')
    ->groupBy('status')
    ->orderBy('sold_date', 'DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_cart));

  }

  public function save_update_status_ileniadesign(){
    
    $sold_id=Request::get('sold_id');
    $status=Request::get('status'); 
    $comment_status=Request::get('comment_status'); 
    $this->universal_db('ileniadesign')->table('cart_ileniadesign')
      ->where('sold_id', 'LIKE', '%'.$sold_id.'%')
      ->update(
          array(
           'status'=>$status,
           'comment_status'=>$comment_status,
          ));
    $data_user=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
      ->where('sold_id', 'LIKE', '%'.$sold_id.'%')
      ->first(); 
    $user = $this->universal_db('ileniadesign')->table('users_ileniadesigns')
    ->select($this->universal_db('ileniadesign')->raw('name, email'))
    ->where('id', '=' ,$data_user->id_user)
    ->get();   


    return View::make('query')->with("result",json_encode($user));

  }

  //controller order
  public function get_product_user_ileniadesign(){

    $id_user=auth()->guard('users_ileniadesign')->user()->id;
    
    $get_cart=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->select(DB::raw('sold_id, id_product, type_img, gift_applied, disc_applied, delivery_cost, sold_date, status, sum(qnt) as count_prod, sum(price_applied)-num_gift_applied-percent_disc_applied+delivery_cost as sum_price'))
    ->where('id_user', '=',$id_user)
    ->where('sold', '=',1)
    ->groupBy('sold_id')
    ->get();

    return View::make('query')->with("result",json_encode($get_cart));

  }

  public function show_detail_myorder_ileniadesign(){

    $sold_id=Request::get('sold_id');

    $myorder_detail=$this->universal_db('ileniadesign')->table('cart_ileniadesign')
    ->where('sold_id', '=', $sold_id)
    ->get();

    return View::make('query')->with("result",json_encode($myorder_detail));

  }

  public function get_prefer_user_ileniadesign(){

    $id_user=auth()->guard('users_ileniadesign')->user()->id;

    $myprefer=$this->universal_db('ileniadesign')->table('prefer_ileniadesign')
    ->where('id_user', '=', $id_user)
    ->get();

    return View::make('query')->with("result",json_encode($myprefer));

  }

  public function delete_prod_prefer_ileniadesign(){

    $id_product=Request::get("id_product");
    $id_user=auth()->guard('users_ileniadesign')->user()->id;

    $this->universal_db('ileniadesign')->table('prefer_ileniadesign')
    ->where('id_product', '=',$id_product)
    ->where('id_user', '=',$id_user)
    ->delete();

    return View::make('query')->with("result",json_encode("delete!"));

  }

  public function send_data_setting_ileniadesign(){

    $name_setting=Request::get("name_setting");
    $lastname_setting=Request::get("lastname_setting");
    $email_setting=Request::get("email_setting");
    $cell_setting=Request::get("cell_setting");
    $address_setting=Request::get("address_setting");
    $state_setting=Request::get("state_setting");
    $region_setting=Request::get("region_setting");
    $city_setting=Request::get("city_setting");
    $zip_setting=Request::get("zip_setting");

    $this->universal_user_db('test')->table('users_ileniadesigns')
      ->where('id', '=',auth()->guard('users_ileniadesign')->user()->id)
      ->update(
        array(
         'name'=>$name_setting,
         'lastname'=>$lastname_setting,
         'email'=>$email_setting,
         'cell'=>$cell_setting,
         'address'=>$address_setting,
         'state'=>$state_setting,
         'region'=>$region_setting,
         'city'=>$city_setting,
         'zip'=>$zip_setting,
       ));

      return View::make('query')->with("result",json_encode("modificato user!"));

  }

}