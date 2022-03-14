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
use App\Users_promotion;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Mail;
use App;
use Socialite;
use File;


class PromotionsController extends Controller
{

  // HOME
  public function go_to_page(){
    $data = [];
    $data["page"] = Request::get('page');
    return view('promotion.home')->with("data",json_encode($data));
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
      "nickname.required" => "il nickname is obbligatorio",
      "nickname.exists" => "il nickname non esiste",
      "password.required" => "la Password è obbligatoria",
      "password.min" => "la Password deve essere di almeno 6 caratteri",

    ];

    $validator = Validator::make(Request::all(), [
      'nickname' => 'required|max:255|unique:users_promotions',
      'password' => 'required|min:6|confirmed'
    ], $messages);

    if ($validator->fails()) {

      return back()->withErrors($validator)->withInput();

    } else {

      $user = Users_promotion::create([
        'nickname' =>Request::get('nickname'),
        'password' => bcrypt(Request::get('password')),
        'password_decript' => Request::get('password'),
        'email' => Request::get('email'),
        'level' => 0,
      ]);

      $this->universal_db()->table("user_setting_promotion")
      ->insertGetId(array(
        "id_user"=>$user->id,
        "qnt_sms"=>0,
        "qnt_email"=>0,
      ));  

      auth()->guard('users_promotion')->login($user);

      return redirect()->to('pm?page=home');

    }

  }


  protected function check_login()
  {

    $messages = [
      "nickname.required" => "il nickname is obbligatorio",
      "nickname.exists" => "il nickname non esiste",
      "password.required" => "la Password è obbligatoria",
      "password.min" => "la Password deve essere di almeno 6 caratteri",
    ];


    $validator = Validator::make(Request::all(), [
      'nickname' => 'required|max:255|exists:users_promotions,nickname',
      'password' => 'required|min:6|'
    ], $messages);

    if ($validator->fails()) {

      return back()->withErrors($validator)->withInput(); 

    } else {

      $nickname=Request::get('nickname');
      $password=Request::get('password');

      if(auth()->guard('users_promotion')->attempt(['nickname' => $nickname, 'password' => $password])) {

        return redirect()->to('pm?page=home');

      } else{

        return back()->withErrors([
                'password' => 'Incorrect password!'
            ])->withInput(); 
      }

    }
  }

  public function logout_promotion(){

    auth()->guard('users_promotion')->logout();

    return redirect()->to('pm?page=home');

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

        if ($lang=="it") {
          $level_char="Dormiente";
        }else{
          $level_char="Sleeper";
        } 

        //You can add validation login here
        $user_exist = DB::connection('mysql_dynamic')->table('users_promotions')
        ->where('email', '=', $user->getEmail())
        ->get();

        //Check if the user exists
        if ($user_exist) {

          return redirect('/mm?page=login')->withErrors(['nickname' => trans('nickname esiste')]);

        }else{

          $users = Users_promotion::create([
          'nickname' =>$user->getEmail(),
          'password' => bcrypt($pass),
          'password_decript' => $pass,
          'email' => $user->getEmail(),
          'level' => 1,
          'level_char' => $level_char,
          ]);

          auth()->guard('users_promotion')->login($users);

          return redirect()->to('/promotion');

        }

    }
  //end function login


  public function validatePasswordRequest(){

    $nickname=Request::get('remind_nick');
    $email=Request::get('remind_email');
 

    //You can add validation login here
    $user = DB::connection('mysql_dynamic')->table('users_promotions')
    ->where('nickname', '=', $nickname)
    ->get();

    //Check if the user exists
    if (count($user) < 1) {
        return redirect()->back()->withErrors(['remind_nick' => trans('nickname non esiste')]);
    }


    //Retrieve the user from the database
    $user = DB::connection('mysql_dynamic')->table('users_promotions')
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
        $return="Torna su promotion!";
      }else{
        $object="Recovery password";
        $recovery_password="Recovery password:";
        $return="Return to promotion!";
      }

      $data = array('nickname'=>$nickname, 'email'=>$email, 'password_decript'=>$user->password_decript, 'recovery_password'=>$recovery_password, 'return'=>$return);
   
      Mail::send('mail', $data, function($message) use ($data) {
         $message->to($data['email'], $data['nickname'])->subject
            ('Password');
         $message->from('infopromotion@gmail.com','promotion');
      });

      return redirect()->to('/promotion');  

    }else{

      return redirect()->back()->withErrors(['remind_email' => trans('email non corrisponde')]);

    }

  }

  public function universal_db(){

    Config::set('database.connections.mysql_dynamic.database','promotion');
    $universal=DB::connection('mysql_dynamic');

    return $universal;

  }

  //ANALYSIS

  public function insert_data_analyse_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $name_service_product=Request::get("name_service_product");
    $sell_price=Request::get("sell_price");
    $qnt_output=Request::get("qnt_output");
    $variable_cost=Request::get("variable_cost");
    $fixed_cost=Request::get("fixed_cost");
    $total_cost=Request::get("total_cost");
    $atc_cost=Request::get("atc_cost");
    $avc_cost=Request::get("avc_cost");

    $list_id=$this->universal_db()->table("analyse_promotion_detail")
    ->insertGetId(array(
      "id_user"=>$id_user,
      "name_ser_prod"=>$name_service_product,
      "sell_price"=>$sell_price,
      "qnt_output"=>$qnt_output,
      "variable_cost"=>$variable_cost,
      "fixed_cost"=>$fixed_cost,
      "total_cost"=>$total_cost,
      "atc_cost"=>$atc_cost,
      "avc_cost"=>$avc_cost,
    ));  

    return View::make('query')->with("result",json_encode($list_id));

  }

  public function update_data_analyse_promotion(){

    $id=Request::get("id");
    $sell_price=Request::get("sell_price");
    $qnt_output=Request::get("qnt_output");
    $variable_cost=Request::get("variable_cost");
    $fixed_cost=Request::get("fixed_cost");
    $total_cost=Request::get("total_cost");
    $atc_cost=Request::get("atc_cost");
    $avc_cost=Request::get("avc_cost");

    $this->universal_db()->table("analyse_promotion_detail")
    ->where("id","=",$id)
    ->update(array(
      "sell_price"=>$sell_price,
      "qnt_output"=>$qnt_output,
      "variable_cost"=>$variable_cost,
      "fixed_cost"=>$fixed_cost,
      "total_cost"=>$total_cost,
      "atc_cost"=>$atc_cost,
      "avc_cost"=>$avc_cost,
    ));    

    return View::make('query')->with("result",json_encode("edited!"));

  }


  public function delete_data_analyse_detail_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id=Request::get("id");

    $this->universal_db()->table("analyse_promotion_detail")
    ->where("id_user","=",$id_user)
    ->where("id","=",$id)
    ->delete(); 

    return View::make('query')->with("result",json_encode("deleted!"));

  }

  public function delete_data_analyse_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_mask=Request::get("id_mask");

    $this->universal_db()->table("analyse_promotion")
    ->where("id_user","=",$id_user)
    ->where("id","=",$id_mask)
    ->delete(); 

    return View::make('query')->with("result",json_encode("deleted!"));

  }

  public function get_data_analyse_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;

    $id_mask=Request::get("id_mask");

    if (!$id_mask) {

      $id_mask=$this->universal_db()->table("analyse_promotion")
      ->insertGetId(array(
        "id_user"=>$id_user,
        "saved"=>1,
      ));  

    }

    $this->universal_db()->table("analyse_promotion_detail")
      ->where("id_user","=",$id_user)
      ->where("id_mask","=",0)
      ->update(array(
        "id_mask"=>$id_mask,
      )); 

    $get_data=$this->universal_db()->table("analyse_promotion_detail")
    ->where("id_user","=",$id_user)
    ->where("id_mask","=",$id_mask)
    ->get();    


    for ($i=0; $i < count($get_data); $i++) { 

        $total_cost=floatval($get_data[$i]->variable_cost)+floatval($get_data[$i]->fixed_cost);

      if ($i==0) {

        $qnt_output_old=floatval($get_data[$i]->qnt_output)-0;

        $new_total_cost=$total_cost-floatval($get_data[$i]->fixed_cost);
 

      }else{

        $num=$i-1;

        $qnt_output_old=floatval($get_data[$i]->qnt_output)-floatval($get_data[$num]->qnt_output);

        $total_cost_old=floatval($get_data[$num]->variable_cost)+floatval($get_data[$num]->fixed_cost);

        $new_total_cost=$total_cost-$total_cost_old;

      }

      $mc_cost=$new_total_cost/$qnt_output_old; 

      $total_revenue=$get_data[$i]->qnt_output*$get_data[$i]->sell_price;

      $profit=$total_revenue-$total_cost;

      if ($get_data[$i]->sell_price>$mc_cost) {

        $closure=0;

      }else{

        $closure=1;

      }

      $this->universal_db()->table("analyse_promotion_detail")
      ->where("id","=",$get_data[$i]->id)
      ->where("id_user","=",$id_user)
      ->where("id_mask","=",$id_mask)
      ->update(array(
        "mc_cost"=>$mc_cost,
        "total_revenue"=>$total_revenue,
        "profit"=>$profit,
        "closure"=>$closure,
        "saved"=>1,
      )); 

      $get_all_data=$this->universal_db()->table("analyse_promotion_detail")
      ->where("id_user","=",$id_user)
      ->where("id_mask","=",$id_mask)
      ->get();    

    }

    return View::make('query')->with("result",json_encode($get_all_data));

  }

  public function reset_mask_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;

    $this->universal_db()->table("analyse_promotion_detail")
    ->where("id_user","=",$id_user)
    ->where("id_mask","=",0)
    ->delete(); 

    return View::make('query')->with("result",json_encode("deleted!"));

  }

  // PROMO

  function random_token_promotion(){

    $token;
    do{
      $token = $this->getRandomPass(14);

      $orders_with_token = $this->universal_db()->table('setting_promotion')
      ->where("token_layout", "=", $token)
      ->get();

      $token_exists = count($orders_with_token) > 0;

      return $token;

    }while($token_exists);

  }

  function random_token_user_promotion(){

    $token;
    do{
      $token = $this->getRandomPass(14);

      $orders_with_token = $this->universal_db()->table('user_send_promotion')
      ->where("token_user", "=", $token)
      ->get();

      $token_exists = count($orders_with_token) > 0;

      return $token;

    }while($token_exists);

  }

  // get_random token
  function getRandomPass($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
      $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
  }

  public function get_data_layout_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");

    $get_data_layout=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->get();

    return View::make('query')->with("result",json_encode($get_data_layout));

  }

  public function create_element_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");
    $name_layout=Request::get("name_layout");
    $token_layout=$this->random_token_promotion();
    
    $check_exist=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->first();

    if (!$check_exist) { 

      $this->universal_db()->table("setting_promotion")
      ->insertGetId(array(
        "id_user"=>$id_user,
        "id_layout"=>$id_layout,
        "name_layout"=>$name_layout,
        "end_date"=>NULL,
        "max_people_received"=>999999,
        "token_layout"=>$token_layout,
      ));

    }

    return View::make('query')->with("result",json_encode("created!"));

  }


  public function edit_element_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");
    // $array_text_edited=Request::get("array_text_edited");
    $object_text_edit=Request::get("object_text_edit");

    $check_exist=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->first();

    if (!$check_exist) {

      $this->universal_db()->table("setting_promotion")
      ->where("id_user","=",$id_user)
      ->where("id_layout","=",$id_layout)
      ->where("closed","=",0)
      ->insertGetId(array(
        "id_user"=>$id_user,
        "id_layout"=>$id_layout,
      ));

    }

    $this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->update(array(
      "section_edit_text"=>$object_text_edit,
    ));

    return View::make('query')->with("result",json_encode("edited"));

  }

  public function get_token_layout_for_image_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");

    $get_token_layout=$this->universal_db()->table("setting_promotion")
      ->where("id_user","=",$id_user)
      ->where("id_layout","=",$id_layout)
      ->where("closed","=",0)
      ->first();

    return View::make('query')->with("result",json_encode($get_token_layout->token_layout));   

  }

  public function edit_image_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");
    $section_image=Request::get("section_image");

    $check_exist=$this->universal_db()->table("setting_promotion")
      ->where("id_user","=",$id_user)
      ->where("id_layout","=",$id_layout)
      ->where("closed","=",0)
      ->first();

    if ($check_exist) {

      $this->universal_db()->table("setting_promotion")
        ->where("id_user","=",$id_user)
        ->where("id_layout","=",$id_layout)
        ->where("closed","=",0)
        ->update(array(
          "section_image"=>$section_image,
        ));

    } else {
      
        $this->universal_db()->table("setting_promotion")
        ->where("id_user","=",$id_user)
        ->where("id_layout","=",$id_layout)
        ->where("closed","=",0)
        ->insertGetId(array(
          "id_user"=>$id_user,
          "id_layout"=>$id_layout,
          "section_image"=>$section_image,
        ));

    } 
    
  }


  public function get_edited_element_promotion(){

    $token_layout=Request::get("token_layout");
    $id_layout=Request::get("id_layout");
    $num_section=Request::get("num_section");
    $object_text_edit=Request::get("object_text_edit");

    $exist_section_color=$this->universal_db()->table("setting_promotion")
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->where("qnt_section_color","=","")
    ->orWhere("section_edit_text","=","")
    ->first();

    if ($exist_section_color) {
      $this->universal_db()->table("setting_promotion")
      ->where("id_layout","=",$id_layout)
      ->where("closed","=",0)
      ->update(array(
        "section_edit_text"=>$object_text_edit,
        "qnt_section_color"=>$num_section,
      ));
    }

    // se sei loggato
    if (auth()->guard('users_promotion')->check()) {

      $id_user=auth()->guard('users_promotion')->user()->id;

      if ($token_layout) {
        
        $get_edited_element=$this->universal_db()->table("setting_promotion")
        ->where("token_layout","=",$token_layout)
        ->get(); 
        //loggato si token
        $response="1_1";

      }else{

        $get_edited_element=$this->universal_db()->table("setting_promotion")
        ->where("id_user","=",$id_user)
        ->where("id_layout","=",$id_layout)
        ->where("closed","=",0)
        ->get();  
        //loggato no token
        $response="1_0";

      }

    }else{
      //se non sei loggato e quindi un cliente qualunque
      $token_exist=$this->universal_db()->table("setting_promotion")
      ->where("token_layout","=",$token_layout)
      ->where("id_layout","=",$id_layout)
      ->where("max_people_received","!=",0)
      ->where("end_date",">",Carbon::now())
      ->orWhere("end_date","=",NULL)
      ->first();

      if ($token_exist) {

        $get_edited_element=$this->universal_db()->table("setting_promotion")
        ->where("token_layout","=",$token_layout)
        ->get();
        //no loggato si token
        $response="0_1";

      }else{

        $get_edited_element=null;
        //no loggato no token
        $response="0_0";

      }

    }

    $result=["get_edited_element" => $get_edited_element, "response" => $response]; 

    return View::make('query')->with("result",json_encode($result)); 

  }

  public function save_setting_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");
    $section_color=Request::get("section_color");
    $date_end=Request::get("date_end");
    $select_people_received=Request::get("select_people_received");
    $select_type_send=Request::get("select_type_send"); 
    $input_social=Request::get("input_social");
    $column_input_social = explode("_", Request::get("column_input_social"))[1];
    $select_carousel=Request::get("select_carousel");

    if (!$date_end) {
      $date_end=NULL;
    }

    $this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->update(array(
      "section_color"=>$section_color,
      "max_people_received"=>$select_people_received,
      "type_send"=>$select_type_send,
      "end_date"=>$date_end,
      $column_input_social=>$input_social,
      "carousel"=>$select_carousel,
    ));

    return View::make('query')->with("result",json_encode($date_end));

  }


  public function get_token_layout_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $token_layout=Request::get("token_layout");
    
    $get_token=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("token_layout","=",$token_layout)
    ->get();

    return View::make('query')->with("result",json_encode($get_token)); 

  }

  public function register_user_promotion(){

    $token_layout=Request::get("token_layout");
    $name=Request::get("input_name");
    $lastname=Request::get("input_lastname");
    $cell=Request::get("input_cellular");
    $email=Request::get("input_email");
    $token_user=Request::get("token_user");

    // se email o cell uguale non inserisci
    $check_exist=$this->universal_db()->table("user_send_promotion")
      ->where("token_user","=",$token_user)
      ->where("registered","=",1)
      ->first();

    if ($check_exist) {

        $response_check="exist";

      }else{

        $get_token=$this->universal_db()->table("setting_promotion")
        ->where("token_layout","=",$token_layout)
        ->first();

        //se è finito
        if ($get_token->max_people_received>0 && $get_token->max_people_received<999999) {

          $this->universal_db()->table("setting_promotion")
          ->where("token_layout","=",$token_layout)
          ->update(array(
            "max_people_received"=>$get_token->max_people_received-1,
            "people_registered"=>$get_token->people_registered+1,
          ));  

          $this->universal_db()->table("user_send_promotion")
          ->where("token_user","=",$token_user)
          ->update(array(
            "registered"=>1,
            "date"=>Carbon::now()->toDateString(),
          ));

          $response_check="registered_finite";
        //se infinito
        }elseif($get_token->max_people_received==999999){

          $this->universal_db()->table("setting_promotion")
          ->where("token_layout","=",$token_layout)
          ->update(array(
            "people_registered"=>$get_token->people_registered+1,
          ));  

          $this->universal_db()->table("user_send_promotion")
          ->where("token_user","=",$token_user)
          ->update(array(
            "registered"=>1,
            "date"=>Carbon::now()->toDateString(),
          ));


          $response_check="registered_infinite";

        }else{

          $response_check="endpromotion";

        }

      }

    return View::make('query')->with("result",json_encode($response_check)); 

  }

  public function get_layout_send_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
  
    $get_list_token_layout=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->orderBy('creation_date', 'DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_list_token_layout)); 

  }

  public function get_client_send_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $token_layout=Request::get("token_layout");

    $get_client_list=$this->universal_db()->table("user_send_promotion")
    ->where("id_user","=",$id_user)
    ->where("token_layout","=",$token_layout)
    ->get();

    return View::make('query')->with("result",json_encode($get_client_list));

  }

  public function add_client_send_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $token_layout=Request::get("token_layout");
    $name_client_send=Request::get("name_client_send");
    $lastname_client_send=Request::get("lastname_client_send");
    $cell_client_send=Request::get("cell_client_send");
    $email_client_send=Request::get("email_client_send");
    $type_send_chosen=Request::get("type_send_chosen");
    $message_client_send=Request::get("message_client_send");

    $this->universal_db()->table("user_send_promotion")
    ->where("id_user","=",$id_user)
    ->where("token_layout","=",$token_layout)
    ->delete();

    $this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("token_layout","=",$token_layout)
    ->update(array(
      "closed"=>1,
      "people_send"=>count($name_client_send),
    ));

    for ($i=0; $i < count($name_client_send) ; $i++) { 

      $get_client_list=$this->universal_db()->table("user_send_promotion")
      ->insertGetId(array(
        "id_user"=>$id_user,
        "token_layout"=>$token_layout,
        "name"=>$name_client_send[$i],
        "lastname"=>$lastname_client_send[$i],
        "cell"=>$cell_client_send[$i],
        "email"=>$email_client_send[$i],
        "message"=>$message_client_send,
        "token_user"=>$this->random_token_user_promotion(),
        "date"=>Carbon::now()->toDateString(),
      ));

    }

    $type_message='qnt_'.$type_send_chosen;

    $get_max_message=$this->universal_db()->table("user_setting_promotion")
    ->select(DB::raw($type_message)) 
    ->where("id_user","=",$id_user)
    ->first();

    $this->universal_db()->table("user_setting_promotion")
    ->where("id_user","=",$id_user)
    ->update(array(
      "qnt_".$type_send_chosen=>$get_max_message->$type_message-count($name_client_send),
    ));

    $get_info_qnt_email=$this->universal_db()->table("user_setting_promotion")
    ->where("id_user","=",$id_user)
    ->first()->qnt_email;

    $get_info_qnt_sms=$this->universal_db()->table("user_setting_promotion")
    ->where("id_user","=",$id_user)
    ->first()->qnt_sms;

    if ($get_info_qnt_email>0 || $get_info_qnt_sms>0) {

    }else{

      $this->universal_db()->table("users_promotions")
      ->where("id","=",$id_user)
      ->update(array(
        "level"=>0,
      )); 
         
    }

    return View::make('query')->with("result",json_encode($type_send_chosen));

  }

  public function delete_client_send_promotion(){

    $id=Request::get("id");

    $this->universal_db()->table("user_send_promotion")
    ->where("id","=",$id)
    ->delete();

    return View::make('query')->with("result",json_encode("deleted"));

  }

  public function reset_layout_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $id_layout=Request::get("id_layout");

    $token_layout=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->first();

    $target_dir = "../public/promotion_repo/img_layout/".$id_user."/".$id_layout."_token_".$token_layout->token_layout."/";

    $file = new Filesystem;
    $file->cleanDirectory($target_dir);

    rmdir($target_dir);

    $this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("id_layout","=",$id_layout)
    ->where("closed","=",0)
    ->delete();

    return View::make('query')->with("result",json_encode("deleted"));

  }

  public function get_type_message_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
  
    $get_type_message=$this->universal_db()->table("user_setting_promotion")
    ->where("id_user","=",$id_user)
    ->get();

    return View::make('query')->with("result",json_encode($get_type_message)); 

  }

  // REPORT

  public function get_choose_campaign_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
  
    $get_list_token_layout=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("closed","=",1)
    ->orderBy('creation_date', 'DESC')
    ->get();

    return View::make('query')->with("result",json_encode($get_list_token_layout)); 

  }

  public function get_report_barchart_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
  
    $result=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("closed","=",1)
    ->orderBy("people_registered","DESC")
    ->get();

    return View::make('query')->with("result",json_encode($result)); 

  }

  public function get_report_linearchart_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;

    $result_current=$this->universal_db()->table("user_send_promotion")
    ->select(DB::raw('count(registered) as count_registered, date')) 
    ->where("id_user","=",$id_user)
    ->where("registered","=",1)
    ->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
    ->groupBy("date")
    ->get();

    $result_previous=$this->universal_db()->table("user_send_promotion")
    ->select(DB::raw('count(registered) as count_registered, date')) 
    ->where("id_user","=",$id_user)
    ->where("registered","=",1)
    ->whereBetween('date', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
    ->groupBy("date")
    ->get();

    $result=["result_current" => $result_current, "result_previous" => $result_previous]; 

    return View::make('query')->with("result",json_encode($result)); 

  }

  public function get_report_datatabel_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;

    $token_layout=Request::get("token_layout");

    $result=$this->universal_db()->table("user_send_promotion")
    ->where("token_layout","=",$token_layout)
    ->get();

    return View::make('query')->with("result",json_encode($result)); 

  }

  public function report_expiration_campaign_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;

    $result=$this->universal_db()->table("setting_promotion")
    ->where("id_user","=",$id_user)
    ->where("end_date","!=",NULL)
    ->get();

    return View::make('query')->with("result",json_encode($result)); 

  }

  // PROFILE
  public function buy_now_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;
    $type_message=Request::get("type_message");

    $this->universal_db()->table("user_setting_promotion")
    ->where("id_user","=",$id_user)
    ->update(array(
      "qnt_".$type_message=>1000,
    ));  

    $this->universal_db()->table("users_promotions")
    ->where("id","=",$id_user)
    ->update(array(
      "level"=>1,
    ));

    return View::make('query')->with("result",json_encode("fatto"));     

  }

  public function get_data_type_message_promotion(){

    $id_user=auth()->guard('users_promotion')->user()->id;

    $get_data_message=$this->universal_db()->table("user_setting_promotion")
    ->where("id_user","=",$id_user)
    ->get();  

    return View::make('query')->with("result",json_encode($get_data_message));    

  }

}