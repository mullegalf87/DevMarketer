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


class IleniadesignController extends Controller{

  function random_token_user_ilenia_design(){

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

  function universal_db(){

    Config::set('database.connections.mysql_dynamic.database','ileniadesign');
    $universal=DB::connection('mysql_dynamic');

    return $universal;

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
    return view('ileniadesign.'.$result.'.home')->with("data",json_encode($data));
  }

  public function lang_change(){
      $lang=Request::get("lang");
      App::setLocale($lang);
      session()->put('locale', $lang); 
      return redirect()->back();
  }

  //controller login
  public function store($numb,$cookie){
      
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

      return redirect()->to('/ileniadesign');

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

  protected function check_login($numb,$cookie){

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
    
    $user = DB::table('users_ileniadesigns')
    ->where('email', '=', $email)
    ->get();
    
    if (count($user) < 1) {
      return redirect()->back()->withErrors(['email' => trans('email not exist!')]);
    }
    
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

  //controllers shopmyart
  public function get_image_shopmyart_ileniadesign(){

    $type_img=Request::get("type_img");
    $get_image = $this->universal_db()->table('image_shopmyart_ileniadesign')
    ->orderBy('position', 'DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_image)); 

  }

  public function get_subcat_ileniadesign(){

    $id_cat=Request::get('id_cat');

    $get_subcat=$this->universal_db()->table('image_subcategory_ileniadesign')
      ->get();

    return View::make('query')->with("result",json_encode($get_subcat)); 

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

  //controllers shopdetail
  public function get_image_detail_ileniadesign(){

    $id_image=Request::get('id_image');
    $type_page=Request::get('type_page');

    $get_image = $this->universal_db()->table('image_shopmyart_ileniadesign')
    ->where('id', '=',$id_image)
    ->get();
    return View::make('query')->with("result",json_encode($get_image)); 

  }

  public function get_count_prod_cart_ileniadesign(){

    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      // $id_user=Request::get("token_user");

    }

    $get_cart=$this->universal_db()->table('cart_ileniadesign')
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
      
      // $id_user=Request::get("token_user");

    }

    $exist_product=$this->universal_db()->table('cart_ileniadesign')
    ->where('id_product','=',$id_product)
    ->where('format','=',$format)
    ->first();

    if ($exist_product) {

      $this->universal_db()->table('cart_ileniadesign')
      ->where('id_product','=',$id_product)
      ->update(array( 
        'qnt'=>$exist_product->qnt+1,
      ));

    }else{

      $this->universal_db()->table('cart_ileniadesign')
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

  //controllers cart
  public function get_prod_cart_ileniadesign(){

    if (auth()->guard('users_ileniadesign')->check()) {

      $id_user=auth()->guard('users_ileniadesign')->user()->id;

    }else{

      // $id_user=Request::get("token_user");

    }

    $get_cart=$this->universal_db()->table('cart_ileniadesign')
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

      // $id_user=Request::get("token_user");
    }

    $this->universal_db()->table('cart_ileniadesign')
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

    $this->universal_db()->table('cart_ileniadesign')
    ->where('id', '=',$id_product)
    ->delete();
    return View::make('query')->with("result",json_encode("delete!"));
    
  }

  //controllers summary
  public function apply_discount_ileniadesign(){
  
    $name_discount=Request::get("name_discount");

    $verify_code=$this->universal_db()->table('image_discount_ileniadesign')
    ->where('name', '=', $name_discount)
    ->first();

    if ($verify_code) {
      $code_verified=$verify_code->off_discount;
    }else{
      $code_verified=0;
    }
    

    return View::make('query')->with("result",$code_verified);
    
  }

  //controllers setting
  public function get_all_image_ileniadesign(){

    $get_all_image=$this->universal_db()->table('image_shopmyart_ileniadesign')
    ->select($this->universal_db()->raw('image_shopmyart_ileniadesign.*, image_category_ileniadesign.id as id_cat, image_category_ileniadesign.name as name_cat, image_subcategory_ileniadesign.id as id_subcat, image_subcategory_ileniadesign.name as name_subcat'))
    ->join('image_category_ileniadesign', 'image_category_ileniadesign.id', '=', 'image_shopmyart_ileniadesign.type_img')
    ->join('image_subcategory_ileniadesign', 'image_subcategory_ileniadesign.id', '=', 'image_shopmyart_ileniadesign.subtype_image') 
    ->orderBy('id','DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_all_image));

  }

  public function get_category_image_ileniadesign(){

    $get_category=$this->universal_db()->table('image_category_ileniadesign')
    ->select($this->universal_db()->raw('id as id_cat, name as name_cat'))
    ->get();

    return View::make('query')->with("result",json_encode($get_category));

  }

  public function get_subcategory_image_ileniadesign(){

    $get_subcategory=$this->universal_db()->table('image_subcategory_ileniadesign')
    ->select($this->universal_db()->raw('id as id_subcat, name as name_subcat, id_cat as id_cat'))
    ->get();

    return View::make('query')->with("result",json_encode($get_subcategory));

  }

  public function get_discount_code_ileniadesign(){

    $get_discount_code=$this->universal_db()->table('image_discount_ileniadesign')
    ->get();

    return View::make('query')->with("result",json_encode($get_discount_code));

  }

  public function add_image_ileniadesign(){

    $name_image=Request::get('name_image');
    $price_a4=Request::get('price_a4');
    $price_a3=Request::get('price_a3');
    $price_a5=Request::get('price_a5');
    $type_img_shopmyart=Request::get('type_img_shopmyart');
    $subtype_img_shopmyart=Request::get('subtype_img_shopmyart');

    $id_image=$this->universal_db()->table('image_shopmyart_ileniadesign')
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

    $this->universal_db()->table('image_category_ileniadesign')
    ->insertGetId(array(

      "name"=>$name_cat,

    ));

    return View::make('query')->with("result",json_encode("aggiornato")); 

  }

  public function add_data_subcat_prod_ileniadesign(){

    $name_subcat=Request::get('name_subcat');
    $id_cat=Request::get('id_cat');

    $this->universal_db()->table('image_subcategory_ileniadesign')
    ->insertGetId(array(

      "name"=>$name_subcat,
      "id_cat"=>$id_cat,

    ));

    return View::make('query')->with("result",json_encode("aggiornato")); 

  }

  public function add_data_discount_prod_ileniadesign(){

    $name_discount=Request::get('name_discount');
    $off_discount=Request::get('off_discount');

    $this->universal_db()->table('image_discount_ileniadesign')
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

    $this->universal_db()->table('image_shopmyart_ileniadesign')
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

    $this->universal_db()->table($table)
    ->where("id","=",$id)
    ->update(array(
      $complete_id=>$name,
    ));

    return View::make('query')->with("result",json_encode("updated"));

  }

  public function delete_image_ileniadesign(){

    $id_image=Request::get('id_image');

    $this->universal_db()->table('image_shopmyart_ileniadesign')
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
    $this->universal_db()->table('image_'.$type.'_ileniadesign')
    ->where("id","=",$id)
    ->delete();

    return View::make('query')->with("result",json_encode("eliminato")); 

  }

}