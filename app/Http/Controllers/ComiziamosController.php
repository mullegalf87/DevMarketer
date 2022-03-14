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
use App\Users_comiziamo;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Filesystem\Filesystem;
use Mail;
use App;
use Socialite;
use LaraFlash;



class ComiziamosController extends Controller
{



  // accedi alla pagina
  public function go_to_page(){
    $data = [];
    $data["page"] = Request::get('page');
    return view('comiziamo.home')->with("data",json_encode($data));
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
      'nickname' => 'required|max:255|unique:users_comiziamos',
      'password' => 'required|min:6|confirmed'
    ], $messages);

    if ($validator->fails()) {

      return back()->withErrors($validator)->withInput();

    } else {

      $lang=session()->get('locale'); 
      if ($lang=="") {
        $lang="it";
      }

      if ($lang=="it") {
        $level_char="Dormiente";
      }else{
        $level_char="Sleeper";
      }

      $user = Users_comiziamo::create([
        'nickname' =>Request::get('nickname'),
        'password' => bcrypt(Request::get('password')),
        'password_decript' => Request::get('password'),
        'email' => Request::get('email'),
        'level' => 1,
        'level_char' => $level_char,

      ]);

      auth()->guard('users_comiziamo')->login($user);

      return redirect()->to('/comiziamo');

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
      'nickname' => 'required|max:255|exists:users_comiziamos,nickname',
      'password' => 'required|min:6|'
    ], $messages);

    if ($validator->fails()) {

      return back()->withErrors($validator)->withInput(); 

    } else {

      $nickname=Request::get('nickname');
      $password=Request::get('password');

      if(auth()->guard('users_comiziamo')->attempt(['nickname' => $nickname, 'password' => $password])) {

        return redirect()->to('/comiziamo');

      } else{

        return back()->withErrors([
                'password' => 'Incorrect password!'
            ])->withInput(); 
      }

    }
  }

  public function logout_comiziamo(){

    auth()->guard('users_comiziamo')->logout();

    return redirect()->to('/comiziamo');

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
        $user_exist = $this->universal_db()->table('users_comiziamos')
        ->where('email', '=', $user->getEmail())
        ->get();

        //Check if the user exists
        if ($user_exist) {

          return redirect('/co?page=login')->withErrors(['nickname' => trans('nickname esiste')]);

        }else{

          $users = Users_comiziamo::create([
          'nickname' =>$user->getEmail(),
          'password' => bcrypt($pass),
          'password_decript' => $pass,
          'email' => $user->getEmail(),
          'level' => 1,
          'level_char' => $level_char,
          ]);

          auth()->guard('users_comiziamo')->login($users);

          return redirect()->to('/comiziamo');

        }

    }
  //end function login


  public function validatePasswordRequest(){

    $nickname=Request::get('remind_nick');
    $email=Request::get('remind_email');
 

    //You can add validation login here
    $user = $this->universal_db()->table('users_comiziamos')
    ->where('nickname', '=', $nickname)
    ->get();

    //Check if the user exists
    if (count($user) < 1) {
        return redirect()->back()->withErrors(['remind_nick' => trans('nickname non esiste')]);
    }


    //Retrieve the user from the database
    $user = $this->universal_db()->table('users_comiziamos')
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

      return redirect()->to('/comiziamo');  

    }else{

      return redirect()->back()->withErrors(['remind_email' => trans('email non corrisponde')]);

    }


  }

  public function universal_db(){

    Config::set('database.connections.mysql_dynamic.database','comiziamo');
    $universal=DB::connection('mysql_dynamic');

    return $universal;

  }

  public function get_argument(){

    $lang=session()->get('locale'); 

    if ($lang=="") {
      $lang="it";
    }

    $get_argument=$this->universal_db()->table('argument_comiziamo')
    ->where('lang', '=' ,$lang)
    ->get();

    $get_argument_partecipant_user=$this->universal_db()->table('argument_comiziamo')
      ->select(DB::raw('distinct argument_comiziamo.*, argument_partecipant_comiziamo.*'))
      ->leftJoin('argument_partecipant_comiziamo', 'argument_partecipant_comiziamo.id_arg', '=', 'argument_comiziamo.id')
      ->where('lang', '=' ,$lang)
      ->get();

    $result=["get_argument" => $get_argument, "get_argument_partecipant_user" => $get_argument_partecipant_user]; 


    return View::make('query')->with("result",json_encode($result));

  }


  public function reset_time(){

    $split_id=Request::get('split_id');
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_timer_rally=$this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$split_id)
    ->where("timer_start_rally", "LIKE", "%0000-00-00%")
    ->get();
    
    if (count($get_timer_rally) === 0) {

      //resetta il tempo a zero e chiude l'argomento
      $this->universal_db()->table('argument_comiziamo')  
      ->where('id', '=',$split_id)
      ->update(
        array(
         'timer_start_rally'=>"0000-00-00",
       ));

      //non ha funzionato la cancellazione di argomenti senza voto, forse è il leftjoin
      $get_delete=$this->universal_db()->table('argument_comiziamo')
      ->where('id', '=',$split_id)
      ->where('total_vote', '=',0)
      ->get();
      
      if ($get_delete) {

       $get_data=$this->universal_db()->table('argument_partecipant_comiziamo')
        ->where('id_arg', '=',$get_delete[0]->id)
        ->get();

        //rimuovere cartella se nessun partecipante se la cartella contiene split_id
        $file = new Filesystem;

        for ($i=0; $i < count($get_data); $i++) { 

          $target_dir = "../public/comiziamo_repo/rally/".$get_data[$i]->id_user."_".$get_data[$i]->id_arg."_".$get_data[$i]->type."/";

        $file->deleteDirectory($target_dir);

        }

        $this->universal_db()->table('argument_comiziamo')
        ->where('id', '=',$get_delete[0]->id)
        ->where('total_vote', '=',0)
        ->delete();  

        $this->universal_db()->table('argument_partecipant_comiziamo')
        ->where('id_arg', '=',$get_delete[0]->id)
        ->delete(); 

      }

      //ottieni i vincitori di ogni argomento
      $get_id_user_win = DB::select('SELECT * FROM argument_partecipant_comiziamo WHERE vote = (SELECT MAX(vote) FROM argument_partecipant_comiziamo where id_arg='.$split_id.') and id_arg='.$split_id.'');

      $values_get_level_user = array();
      $values_get_level_current= array();
      $values_winner=array();

      //conteggia il numero dei vincitori
      for ($i=0; $i < count($get_id_user_win); $i++) {     

        //se a vincere è il partito metti il nome del partito altrimenti il nome dell'utente
        if ($get_id_user_win[$i]->type_user_party==1) {

          //ottieni tutti i membri del partito
          $get_member_party=$this->universal_db()->table('detail_party_comiziamo')  
          ->where('id_party', '=',$get_id_user_win[$i]->id_party)
          ->get();

          //count membri del partito
          for ($y=0 ; $y < count($get_member_party) ; $y++ ) { 

            //ottieni il livello dei membri del partito
            $get_level_user=$this->universal_db()->table('users_comiziamos')
            ->where('users_comiziamos.id', '=',$get_member_party[$y]->id_user)
            ->get();

            //inserisci i livelli dei membri del partito in un array
            $values_get_level_user[] =$get_level_user; 

          }

          //inserisci in array nome del partito
          $values_winner[]=$get_id_user_win[$i]->name_party;

        }else{

          //ottieni il livello di ogni vincitore
          $get_level_user=$this->universal_db()->table('users_comiziamos')
          ->where('users_comiziamos.id', '=',$get_id_user_win[$i]->id_user)
          ->get();

          //inserisci il livello in un array
          $values_get_level_user[] =$get_level_user; 

          //inserisci in array nickname
          $values_winner[]=$values_get_level_user[$i][0]->nickname;

        }    
        
      }

      //aggiorno i livelli degli utenti vincitori
      for ($i=0; $i < count($values_get_level_user) ; $i++) { 

        if ($values_get_level_user[$i][0]->level<10) {
          $this->universal_db()->table('users_comiziamos')
          ->where('id','=',$values_get_level_user[$i][0]->id)
          ->update(
            array(
             'level'=>$values_get_level_user[$i][0]->level+1,
           ));
        }

        $lang=session()->get('locale'); 

        if ($lang=="") {
          $lang="it";
        }

        $get_level_current=$this->universal_db()->table('users_comiziamos')
        ->select(DB::raw('users_comiziamos.id as id, users_comiziamos.level as level, users_comiziamos.nickname as nickname, level_comiziamo_'.$lang.'.level as level_char')) 
        ->join('level_comiziamo_'.$lang, 'level_comiziamo_'.$lang.'.id_level', '=', 'users_comiziamos.level')  
        ->where('users_comiziamos.id', '=',$values_get_level_user[$i][0]->id)
        ->get();

        $values_get_level_current[]=$get_level_current;
 
      }


      //aggiorno i livelli degli utenti vincitori
      for ($i=0; $i < count($values_get_level_current) ; $i++) { 

          $this->universal_db()->table('users_comiziamos')
          ->where('id','=',$values_get_level_current[$i][0]->id)
          ->update(
            array(
             'level_char'=>$values_get_level_current[$i][0]->level_char,
           ));

      }
      
      //prendi il nome del vincitore e lo split
      $winner = str_replace("[","",json_encode($values_winner));
      $winner = str_replace("]","",$winner);
      $winner = str_replace('"','',$winner);

      //inserisco i vincitori tra gli argomenti e chiudo lo stato dell'argomento
      $this->universal_db()->table('argument_comiziamo')
      ->where('id','=',$split_id)
      ->update(
        array(
         'winner'=>$winner,
         'state'=>1,
       ));

    }

    //ottengo gli argomenti
    $get_argument=$this->universal_db()->table('argument_comiziamo')  
    ->where('id', '=',$split_id)
    ->get();

    //ottengo i partecipanti agli argomenti
    $get_argument_partecipant_user=$this->universal_db()->table('argument_comiziamo')
    ->select(DB::raw('distinct argument_comiziamo.*, argument_partecipant_comiziamo.*'))
    ->leftJoin('argument_partecipant_comiziamo', 'argument_partecipant_comiziamo.id_arg', '=', 'argument_comiziamo.id')
    ->where('argument_comiziamo.id', '=',$split_id)
    ->get();  

    //metto tutto dentro un array
    $result=["get_argument" => $get_argument, "get_argument_partecipant_user" => $get_argument_partecipant_user];   


    return View::make('query')->with("result",json_encode($result));

  }


  public function get_argument_rally_no_user(){

    $res_id=Request::get('res_id');
    // Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_argument_rally=$this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$res_id)
    ->get();

    $result=["get_argument_rally" => $get_argument_rally];   

     return View::make('query')->with("result",json_encode($result));
  }



  public function get_argument_rally(){
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $res_id=Request::get('res_id');
    // Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_argument_rally=$this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$res_id)
    ->get();

    $get_partecipant_vote_rally=$this->universal_db()->table('argument_comiziamo')
      ->join('argument_partecipant_comiziamo', 'argument_partecipant_comiziamo.id_arg', '=', 'argument_comiziamo.id')
      ->where('argument_partecipant_comiziamo.id_arg', '=',$res_id)
      ->where('argument_partecipant_comiziamo.id_user', '=',$id_user)
      ->get();


    $get_user_party=$this->universal_db()->table('users_comiziamos')
      ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.bio as bio, users_comiziamos.quote as quote, users_comiziamos.level as level, users_comiziamos.level_char as level_char, users_comiziamos.img as img, users_comiziamos.follower as follower, party_comiziamo.*'))
      ->leftJoin('party_comiziamo', 'party_comiziamo.creator_party', '=', 'users_comiziamos.id')
      ->where("users_comiziamos.id", "=", $id_user)
      ->get();


      $result=["get_argument_rally" => $get_argument_rally, "get_partecipant_vote_rally" => $get_partecipant_vote_rally, "get_user_party" => $get_user_party];   

    return View::make('query')->with("result",json_encode($result));

  }


  public function file_upload_batch($id_arg, $type){


    $id_user=auth()->guard('users_comiziamo')->user()->id;

    $input = 'kartik-input-705';

    $target_dir = "../public/comiziamo_repo/rally/".$id_user."_".$id_arg."_".$type."/";

    

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

  public function clean_directory(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $id_arg=Request::get('res_id');
    $type_arg=Request::get('type_arg');

    $file = new Filesystem;

    $file->deleteDirectory('../public/comiziamo_repo/rally/'.$id_user."_".$id_arg."_".$type_arg."/");

    $this->universal_db()->table('argument_partecipant_comiziamo')
      ->where('id_arg', '=',$id_arg)
      ->where('id_user', '=',$id_user)
      // ->where('type', '=',$type_arg)
      ->delete();

    return View::make('query')->with("result",json_encode('delete'));

  }

 
  public function delete_type_item(){

    $id_arg=Request::get('res_id');
    $type_arg=Request::get('type_arg');
    $name_file=Request::get('name_file');

    $id_user=auth()->guard('users_comiziamo')->user()->id;

    $target_dir = "../public/comiziamo_repo/rally/".$id_user."_".$id_arg."_".$type_arg."/";

    if( is_dir($target_dir) === false )
    {
        mkdir($target_dir, 0775);
    }

    if (file_exists($target_dir . basename($name_file))) {

    chmod($target_dir.$name_file, 0644);
        unlink($target_dir.$name_file);
        $risp='Deleted old image';
    } 
    else {
        $risp='Image file does not exist';

    }

    return View::make('query')->with("result",json_encode($risp));

  }


  public function send_data_arg(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=Request::get('id_user_party');
    $id_arg=Request::get('res_id');
    $type_arg=Request::get('type_arg');
    $type_user_party=Request::get('type_user');
    $img_user_party=Request::get('img_user_party');
    $name_party=Request::get('name_party');
    $id_party=Request::get('id_party');
    $comment_text_area=Request::get('comment_text_area');

    $id_format=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->where('id_user','=',$id_user)
      ->where('id_arg','=',$id_arg)
      ->get();

      if ($type_arg!=1) {
          $comment_text_area="";
          $path=$id_user."_".$id_arg."_".$type_arg;
        } else{
          $path="";
        }
      if ($id_format) {
        $risp="esiste";

        $this->universal_db()->table('argument_partecipant_comiziamo')
        ->where('id_user','=',$id_user)
        ->where('id_arg','=',$id_arg)
        ->update(
          array(
         'type'=>$type_arg,
         'type_user_party'=>$type_user_party,
         'img_party'=>$img_user_party,
         'name_party'=>$name_party,
         'id_party'=>$id_party,
         'path'=>$path,
         'comment_arg'=>$comment_text_area,

         ));
      }else{
        $risp="non esiste";
        
        $this->universal_db()->table('argument_partecipant_comiziamo')
        ->insertGetId(array( 
         'id_arg'=>$id_arg,
         'id_user'=>$id_user,
         'type'=>$type_arg,
         'type_user_party'=>$type_user_party,
         'img_party'=>$img_user_party,
         'name_party'=>$name_party,
         'id_party'=>$id_party,
         'path'=>$path,
         'comment_arg'=>$comment_text_area,
       ));
      }

  return View::make('query')->with("result",json_encode($risp));

  }

  public function get_level(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $lang=session()->get('locale'); 
    if ($lang=="") {
      $lang="it";
    }
    $id_level=auth()->guard('users_comiziamo')->user()->level;
    $type_arg=Request::get('type_arg');
    $get_info_level=$this->universal_db()->table('level_comiziamo_'.$lang)
      ->where('id_level','<=',$id_level)
      ->where('type','=',$type_arg)
      ->orderBy('id', 'desc')
      ->first();
    return View::make('query')->with("result",json_encode($get_info_level));
  }

  public function add_partecipant(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $id_arg=Request::get('res_id');

    $get_count_partecipant=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->select(DB::raw('count(id) as partecipant'))
      ->where('id_arg','=',$id_arg)
      // ->where('id_user','=',$id_user)
      ->first();

    $this->universal_db()->table('argument_comiziamo')
      ->where('id','=',$id_arg)
      ->update(
        array(
       'partecipant'=>$get_count_partecipant->partecipant,
       ));

    return View::make('query')->with("result",json_encode($get_count_partecipant->partecipant));
  }

  public function get_preview_rally(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $id_arg=Request::get('res_id');
    // $id_user=Request::get('id_user_party');

    $preview_rally=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->where('id_user','=',$id_user)
      ->where('id_arg','=',$id_arg)
      ->get();

    if (count($preview_rally)==0) {

        $result=count($preview_rally); 

      }else{

        $target_dir = "../public/comiziamo_repo/rally/".$preview_rally[0]->path."/";
        $pieces_dir = explode("../public/", $target_dir)[1];

        $file_name=array_slice(scandir($target_dir), 2);

        $result=["directory" => $pieces_dir, "file" => $file_name, "preview" => $preview_rally[0]->type,
        "preview_timestamp" => $preview_rally[0]->date_stamp, "preview_comment" => $preview_rally[0]->comment_arg]; 


      }

  
    return View::make('query')->with("result",json_encode($result));

  }


  public function get_argument_partecipant_user(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    
    $id_profile=Request::get('id_user');

    if ($id_profile=="undefined") {
      $id_user=auth()->guard('users_comiziamo')->user()->id;
    }else{
      $id_user=Request::get('id_user');

    }

    $result=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->join('argument_comiziamo', 'argument_comiziamo.id', '=', 'argument_partecipant_comiziamo.id_arg')
      ->where('argument_partecipant_comiziamo.id_user','=',$id_user)
      ->get();

    return View::make('query')->with("result",json_encode($result));

  }


  public function upload_img_profile_comiziamo(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $file_name=Request::get('file_name');
    $this->universal_db()->table('users_comiziamos')
      ->where('id','=',$id_user)
      ->update(
        array(
       'img'=>$file_name,
       ));

  }

  public function upload_img_party_comiziamo(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $file_name=Request::get('file_name');

    $party_exist=$this->universal_db()->table('party_comiziamo')
      ->where('creator_party','=',$id_user)
      ->first();

    if ($party_exist) {

      $this->universal_db()->table('party_comiziamo')
      ->where('creator_party','=',$id_user)
      ->update(
        array(
       'img_party'=>$file_name,
       ));

    }else{

      $this->universal_db()->table('party_comiziamo')
      ->insertGetId(array( 
        'img_party'=>$file_name,
        'creator_party'=>$id_user,
        ));

    }

  }

  public function get_comment_profile(){
  //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
  
  $id_arg=Request::get('res_id');
  $id_profile=Request::get('id_user');

  if ($id_profile=="undefined") {
    $id_user=auth()->guard('users_comiziamo')->user()->id;
  }else{
    $id_user=Request::get('id_user');
  }

  $get_comment_profile= $this->universal_db()->table('comment_comiziamo')
    ->select(DB::raw('comment_comiziamo.comment, users_comiziamos.nickname as nickname, users_comiziamos.img as img, users_comiziamos.level_char as level_char, users_comiziamos.id as id_user' ))
    ->join('argument_partecipant_comiziamo', 'argument_partecipant_comiziamo.id', '=', 'comment_comiziamo.id_arg_partecipant')
    ->join('users_comiziamos', 'users_comiziamos.id', '=', 'comment_comiziamo.id_user') 
    ->where('comment_comiziamo.id_arg','=', $id_arg)
    ->where('argument_partecipant_comiziamo.id_user','=', $id_user)
    ->get();

  return View::make('query')->with("result",json_encode($get_comment_profile)); 

  }

  public function edit_data_profile(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $nickname=Request::get('nickname');
    $bio=Request::get('bio');
    $quote=Request::get('quote');

    $this->universal_db()->table('users_comiziamos')
      ->where('id','=',$id_user)
      ->update(
        array(
       'nickname'=>$nickname,
       'bio'=>$bio,
       'quote'=>$quote,
       ));  

    return View::make('query')->with("result",json_encode("modificato"));   

  }

  public function edit_data_party(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $name_party=Request::get('name_party');
    $direction_party=Request::get('direction_party');
    $desc_party=Request::get('desc_party');


    $exist_party_with_user=$this->universal_db()->table('party_comiziamo')
      ->where('creator_party','=',$id_user)
      ->first();

    $exist_party_with_name=$this->universal_db()->table('party_comiziamo')
      ->where('name_party','LIKE','%'.$name_party.'%')
      ->first();  

    if ($exist_party_with_user) {
        $result="update";
        $this->universal_db()->table('party_comiziamo')
      ->where('creator_party','=',$id_user)
      ->update(
        array(
       'name_party'=>$name_party,
       'direction_party'=>$direction_party,
       'desc_party'=>$desc_party,
       ));  
      }elseif($exist_party_with_name){
        $result="exist";
      }else{
        $result="create";
        $id_party=$this->universal_db()->table('party_comiziamo')
          ->insertGetId(array( 
        'name_party'=>$name_party,
        'direction_party'=>$direction_party,
        'desc_party'=>$desc_party,
        'creator_party'=>$id_user,
        ));
        
      //alla creazione inserire l'utente all'interno del detail_party_comiziamo e poi fai il count su quanti membri
      $get_followers_party = $this->universal_db()->table('detail_party_comiziamo')
        ->where("id_party", "=", $id_party)
        ->where('id_user','=',$id_user)
        ->first();

      if ($get_followers_party) {

        $response="exist";

        } else {

          $this->universal_db()->table('detail_party_comiziamo')
          ->insertGetId(array( 
            'id_party'=>$id_party,
            'id_user'=>$id_user,
          ));

        $response="create";

        } 

        $get_count_followes_party = $this->universal_db()->table('detail_party_comiziamo')
          ->select(DB::raw('count(id_party) as count_followers_party'))
          ->where("id_party", "=", $id_party)
          ->get();

        $this->universal_db()->table('party_comiziamo')
          ->where('id','=',$id_party)
          ->update(
            array(
           'count_allied'=>$get_count_followes_party[0]->count_followers_party,
           )); 

        $this->universal_db()->table('users_comiziamos')
          ->where('id','=',$id_user)
          ->update(
            array(
           'creation_party'=>1,
           )); 

      }


    
    return View::make('query')->with("result",json_encode($result));   

  }


  public function get_data_party(){
    $id_user=auth()->guard('users_comiziamo')->user()->id;

    $get_data_party=$this->universal_db()->table('party_comiziamo')
      ->where('creator_party','=',$id_user)
      ->get();

    return View::make('query')->with("result",json_encode($get_data_party));    

  }

  public function get_level_legend(){
    $lang=session()->get('locale');
    if ($lang=="") {
      $lang="it";
    }
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_level_legend=$this->universal_db()->table('level_comiziamo_'.$lang)
    ->get();


    return View::make('query')->with("result",json_encode($get_level_legend));   

  }


  public function get_access(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));

    $get_access = DB::select('SELECT * FROM `cookie_comiziamo` WHERE last_access >= CURRENT_DATE - INTERVAL 9 DAY AND last_access < CURRENT_DATE + INTERVAL 1 DAY ORDER BY `cookie_comiziamo`.`last_access` ASC');

    return View::make('query')->with("result",json_encode($get_access));   

  }

  public function get_abuse(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_abuse=$this->universal_db()->table('abuse_comiziamo')
      ->get();

    return View::make('query')->with("result",json_encode($get_abuse));   

  }

  public function get_user(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_user=$this->universal_db()->table('users_comiziamos')
      ->select(DB::raw('users_comiziamos.id as id, users_comiziamos.nickname as nickname, users_comiziamos.created_at as created_at'))
      ->get();

    return View::make('query')->with("result",json_encode($get_user));   

  }


  public function get_list_allies(){
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    // $exist_allies=$this->universal_db()->table('follow_party_comiziamo')
    // ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.img as img, follow_party_comiziamo.id_room as id_room, follow_party_comiziamo.count_message as count_message'))
    // ->join('users_comiziamos', 'users_comiziamos.id', '=', 'follow_party_comiziamo.who_follows')
    // ->where('follow_party_comiziamo.who_is_followed','=',$id_user)
    // ->get();

    // if ($exist_allies) {

    //   $get_list_allies=$this->universal_db()->table('follow_party_comiziamo')
    //   ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.img as img, follow_party_comiziamo.id_room as id_room, follow_party_comiziamo.count_message as count_message'))
    //   ->join('users_comiziamos', 'users_comiziamos.id', '=', 'follow_party_comiziamo.who_follows')
    //   ->where('follow_party_comiziamo.who_is_followed','=',$id_user)
    //   ->where('follow_party_comiziamo.delete_allied','=',0)
    //   ->get();

    // }else{

    //   $get_list_allies=$this->universal_db()->table('follow_party_comiziamo')
    //   ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.img as img, follow_party_comiziamo.id_room as id_room, follow_party_comiziamo.count_message as count_message'))
    //   ->join('users_comiziamos', 'users_comiziamos.id', '=', 'follow_party_comiziamo.who_is_followed')
    //   ->where('follow_party_comiziamo.who_follows','=',$id_user) 
    //   ->get();

    // }

    $get_list_allies=$this->universal_db()->table('follow_party_comiziamo')
      ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.img as img, follow_party_comiziamo.id_room as id_room, follow_party_comiziamo.count_message as count_message, follow_party_comiziamo.delete_allied as delete_allied'))
      ->join('users_comiziamos', 'users_comiziamos.id', '=', 'follow_party_comiziamo.who_follows')
      ->where('follow_party_comiziamo.who_is_followed','=',$id_user)
      // ->where('follow_party_comiziamo.delete_allied','=',0)
      ->get();

    return View::make('query')->with("result",json_encode($get_list_allies));   

  }


  function get_id_room(){

  $id_room;
  do{
    $id_room = $this->getRandomString(14);



    $orders_with_id_room = $this->universal_db()->table('follow_party_comiziamo')
    ->where("id_room", "=", $id_room)
    ->get();

    $id_room_exists = count($orders_with_id_room) > 0;


    return $id_room;

  }while($id_room_exists);


}


  public function send_chat_message(){

    //get id room
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $sender=auth()->guard('users_comiziamo')->user()->id;
    $receiver=Request::get('receiver');
    $id_room=Request::get('id_room');
    $message=Request::get('message');


      $this->universal_db()->table('chat_comiziamo')
        ->insertGetId(array( 
         'id_room'=>$id_room,
         'sender'=>$sender,
         'receiver'=>$receiver,
         'message'=>$message,
         'readen'=>0,

       ));

      $count_message = $this->universal_db()->table('chat_comiziamo')
        ->select(DB::raw('count(id) as count_message'))
        ->where("id_room", "=", $id_room)
        ->where("receiver", "=", $receiver)
        ->where("readen", "=", 0)
        ->first();


       $this->universal_db()->table('follow_party_comiziamo')
       ->where("id_room", "=", $id_room)
       ->where('who_is_followed','=',$receiver)
       ->update(
        array(
         'count_message'=>$count_message->count_message,
       ));  

      return View::make('query')->with("result",json_encode($sender));

  }

  public function send_chat_message_congress(){

    //get id room
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $sender=auth()->guard('users_comiziamo')->user()->id;
    $id_party=Request::get('id_party');
    $message=Request::get('message');

      $get_member_party = $this->universal_db()->table('detail_party_comiziamo')
        ->where("id_party", "=", $id_party)
        ->get();

      for ($i=0; $i <  count($get_member_party); $i++) { 

        if ($get_member_party[$i]->id_user!=$sender) {

          $this->universal_db()->table('chat_congress_comiziamo')
          ->insertGetId(array( 
           'id_room'=>$id_party,
           'sender'=>$sender,
           'receiver'=>$get_member_party[$i]->id_user,
           'message'=>$message,
           'readen'=>0,

         ));

          $count_message = $this->universal_db()->table('chat_congress_comiziamo')
          ->select(DB::raw('count(id) as count_message'))
          ->where("id_room", "=", $id_party)
          ->where("receiver", "=", $get_member_party[$i]->id_user)
          ->where("readen", "=", 0)
          ->first();

          // print_r($count_message->count_message);
           $this->universal_db()->table('detail_party_comiziamo')
           ->where("id_party", "=", $id_party)
           ->where('id_user','=',$get_member_party[$i]->id_user)
           ->update(
            array(
              'count_message'=>$count_message->count_message,
           ));  

        }

      }    

      return View::make('query')->with("result",json_encode($count_message));

  }

  public function get_chat_message(){
    $sender=auth()->guard('users_comiziamo')->user()->id;
    $receiver=Request::get('receiver');
    $id_room=Request::get('id_room');

    
    // $get_chat_message = DB::select('SELECT * FROM chat_comiziamo as ch, users_comiziamos as us where ch.sender=us.id or ch.receiver=us.id and ch.sender='.$sender.' and ch.receiver='.$receiver.' or ch.sender='.$receiver.' and ch.receiver='.$sender.'');

    $get_chat_message = $this->universal_db()->table('chat_comiziamo')
        ->join('users_comiziamos', 'users_comiziamos.id', '=', 'chat_comiziamo.sender')
        ->where("chat_comiziamo.sender", "=", $sender)
        ->where("chat_comiziamo.receiver", "=", $receiver)
        ->orWhere("chat_comiziamo.sender", "=", $receiver)
        ->where("chat_comiziamo.receiver", "=", $sender)
        ->get();


     $this->universal_db()->table('chat_comiziamo')
        ->where("id_room", "=", $id_room)
        ->where("receiver", "=", $sender)
        ->update( 
          array(
         'readen'=>1,
       ));

    $count_message = $this->universal_db()->table('chat_comiziamo')
        ->select(DB::raw('count(id) as count_message'))
        ->where("id_room", "=", $id_room)
        ->where("receiver", "=", $sender)
        ->where("readen", "=", 0)
        ->first();


     $this->universal_db()->table('follow_party_comiziamo')
       ->where("id_room", "=", $id_room)
       ->where('who_is_followed','=',$sender)
       ->update(
        array(
         'count_message'=>$count_message->count_message,
       ));  

    return View::make('query')->with("result",json_encode($get_chat_message));

  }


  public function get_chat_message_congress(){
    $sender=auth()->guard('users_comiziamo')->user()->id;
    $id_party=Request::get('id_party');

    
    // $get_chat_message = DB::select('SELECT DISTINCT ch.sender as sender, ch.message as message, us.img FROM `chat_congress_comiziamo` as ch LEFT JOIN `users_comiziamos` as us ON ch.sender = us.id where ch.id_room='.$id_party.' and ch.sender='.$sender.' or ch.receiver='.$sender.'');

    // $get_chat_message = DB::select('SELECT DISTINCT ch.sender as sender, ch.message as message FROM `chat_congress_comiziamo` as ch, users_comiziamos as us where ch.sender=us.id and ch.id_room=5 and sender=102 or receiver=102');

    //SELECT DISTINCT ch.sender as sender, ch.message as message, us.img FROM `chat_congress_comiziamo` as ch LEFT JOIN `users_comiziamos` as us ON ch.sender = us.id where ch.id_room=5 and ch.sender=102 or ch.receiver=102

    $get_chat_message = $this->universal_db()->table('chat_congress_comiziamo')
        ->select(DB::raw('distinct(chat_congress_comiziamo.sender) as sender, chat_congress_comiziamo.message as message, users_comiziamos.img as img '))
        ->join('users_comiziamos', 'users_comiziamos.id', '=', 'chat_congress_comiziamo.sender')
        ->where("chat_congress_comiziamo.id_room", "=", $id_party)
        // ->where("chat_congress_comiziamo.sender", "=", $sender)
        // ->orWhere("chat_congress_comiziamo.receiver", "=", $sender)
        ->get();


     $this->universal_db()->table('chat_congress_comiziamo')
        ->where("id_room", "=", $id_party)
        ->where("receiver", "=", $sender)
        ->update( 
          array(
         'readen'=>1,
       ));

    $count_message = $this->universal_db()->table('chat_congress_comiziamo')
        ->select(DB::raw('count(id) as count_message'))
        ->where("id_room", "=", $id_party)
        ->where("receiver", "=", $sender)
        ->where("readen", "=", 0)
        ->first();


     $this->universal_db()->table('detail_party_comiziamo')
       ->where("id_party", "=", $id_party)
       ->where('id_user','=',$sender)
       ->update(
        array(
         'count_message'=>0,
       ));  
 

    return View::make('query')->with("result",json_encode($get_chat_message));

  }


  public function get_list_congress(){
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $get_list_congress=$this->universal_db()->table('detail_party_comiziamo')
    ->select(DB::raw('party_comiziamo.*,detail_party_comiziamo.count_message as count_message, detail_party_comiziamo.delete_allied as delete_allied'))
      ->join('party_comiziamo', 'party_comiziamo.id', '=', 'detail_party_comiziamo.id_party')
      ->where('detail_party_comiziamo.id_user','=',$id_user) 
      ->get();

    return View::make('query')->with("result",json_encode($get_list_congress));   

  }

  public function send_add_argument(){  
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $lang=session()->get('locale');
    if ($lang=="") {
      $lang="it";
    } 
    $nickname_user=auth()->guard('users_comiziamo')->user()->nickname;
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $category_argument=Request::get('category_argument');
    // $category_challenge=Request::get('category_challenge');
    $initial_argument=Request::get('initial_argument');
    $title_argument=Request::get('title_argument');
    $description_argument=Request::get('description_argument');
    $date_rally=Request::get('date_rally');
    // $date_vote=Request::get('date_vote');

  $id_arg=$this->universal_db()->table('argument_comiziamo')
  ->insertGetId(array( 
    'lang'=>$lang,
    'category_argument'=>$category_argument,
    // 'category_challenge'=>$category_challenge,
    'initial_argument'=>$initial_argument,
    'title_argument'=>$title_argument,
    'argument'=>$description_argument,
    'created_by'=>$nickname_user,
    'id_user'=>$id_user,
    'timer_start_rally'=>$date_rally,
    'total_vote'=>0,
    // 'timer_start_vote'=>$date_vote,
    ));

  return View::make('query')->with("result",json_encode($id_arg)); 

  }

  public function show_edit_arg(){  
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('id_arg');
    $get_argument_edit=$this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$id_arg)
    ->get();

    return View::make('query')->with("result",json_encode($get_argument_edit));

  }

  public function edit_add_argument(){  
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('id_arg');
    $category_argument=Request::get('category_argument');
    // $category_challenge=Request::get('category_challenge');
    $initial_argument=Request::get('initial_argument');
    $title_argument=Request::get('title_argument');
    $description_argument=Request::get('description_argument');
    $date_rally=Request::get('date_rally');
    // $date_vote=Request::get('date_vote');

    $this->universal_db()->table('argument_comiziamo')
    ->where('id','=',$id_arg)
    ->update(
      array(
       'category_argument'=>$category_argument,
       // 'category_challenge'=>$category_challenge,
       'initial_argument'=>$initial_argument,
       'title_argument'=>$title_argument,
       'argument'=>$description_argument,
       'timer_start_rally'=>$date_rally,
       // 'timer_start_vote'=>$date_vote,
     ));  

    return View::make('query')->with("result",json_encode("modificato"));  

  }


  public function upload_img_argument_comiziamo(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('id_arg');
    $file_name=Request::get('file_name');

      $this->universal_db()->table('argument_comiziamo')
      ->where('id','=',$id_arg)
      ->update(
        array(
       'img_arg'=>$file_name,
       ));

  }

  public function delete_arg(){ 
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('id_arg');
    $img_arg=Request::get('img_arg');
    $this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$id_arg)
    ->delete(); 

    $file = '../public/comiziamo_repo/img_argument/'.$img_arg;

    unlink($file);

  }

  public function get_argument_vote(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $res_id=Request::get('res_id');
    $get_argument_vote=$this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$res_id)
    ->get();

    return View::make('query')->with("result",json_encode($get_argument_vote));

  }


  public function get_partecipant_rally(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('res_id');

    $get_partecipant_rally=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->select(DB::raw('argument_partecipant_comiziamo.*, users_comiziamos.img as img_profile, users_comiziamos.nickname as nickname_profile, users_comiziamos.level_char as level_char_profile, users_comiziamos.id as id_user'))
      ->join('users_comiziamos', 'users_comiziamos.id', '=', 'argument_partecipant_comiziamo.id_user') 
      ->where('id_arg','=',$id_arg)
      ->get();

    return View::make('query')->with("result",json_encode($get_partecipant_rally));
  }


  public function get_preview_vote(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=Request::get('id_user');
    $id_arg=Request::get('res_id');

    $preview_rally=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->where('id_user','=',$id_user)
      ->where('id_arg','=',$id_arg)
      ->get();

    if (count($preview_rally)==0) {

        $result=count($preview_rally); 

      }else{

        $target_dir = "../public/comiziamo_repo/rally/".$preview_rally[0]->path."/";
        $pieces_dir = explode("../public/", $target_dir)[1];

        $file_name=array_slice(scandir($target_dir), 2);

        $result=["directory" => $pieces_dir, "file" => $file_name, "preview" => $preview_rally[0]->type, "preview_timestamp" => $preview_rally[0]->date_stamp, "preview_comment" => $preview_rally[0]->comment_arg]; 


      }

  
    return View::make('query')->with("result",json_encode($result));

  }

  public function send_comment_vote(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('res_id');
    $id_user=Request::get('id_user');
    $comment=Request::get('comment');
    $id_user_comment=auth()->guard('users_comiziamo')->user()->id;

    if ($id_user_comment==$id_user) {

      $result="myself";

    }else{

      $result="otherself";

      //elimina tutti i commenti
      $delete_comment_vote=$this->universal_db()->table('comment_comiziamo')
        ->where('id_user','=',$id_user_comment)
        ->where('id_arg','=',$id_arg)
        ->delete();

      //svuota i voti del singolo argomento
      $this->universal_db()->table('argument_partecipant_comiziamo')
        ->where('id_arg','=',$id_arg)
        ->update(
          array(
         'vote'=>0,
         ));  

      $get_data_arg_partecipant=$this->universal_db()->table('argument_partecipant_comiziamo')
        ->where('id_user','=',$id_user)
        ->where('id_arg','=',$id_arg)
        ->first();

      $this->universal_db()->table('comment_comiziamo')
      ->insertGetId(array( 
      'id_arg_partecipant'=>$get_data_arg_partecipant->id,
      'id_arg'=>$id_arg,
      'id_user'=>$id_user_comment,
      'comment'=>$comment,
      ));

      $id_get_partecipant=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->where('id_arg','=',$id_arg)
      ->get();
      
      $values = array();

      for ($i=0; $i < count($id_get_partecipant); $i++) { 

        $count_vote= $this->universal_db()->table('comment_comiziamo')
        ->select(DB::raw('count(id) as count_vote'))
        ->where('id_arg_partecipant','=', $id_get_partecipant[$i]->id)
        ->get();

        $values[] =$count_vote;   

        $this->universal_db()->table('argument_partecipant_comiziamo')
        ->where('id','=',$id_get_partecipant[$i]->id)
        ->update(
          array(
            'vote'=>$values[$i][0]->count_vote,
          ));

      }

      $get_count_vote=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->select(DB::raw('sum(vote) as count_vote'))
      ->where('id_arg','=',$id_arg)
      ->get();

      $this->universal_db()->table('argument_comiziamo')  
        ->where('id', '=',$id_arg)
        ->update(
          array(
            'total_vote'=>$get_count_vote[0]->count_vote,
          ));
    }

    return View::make('query')->with("result",json_encode($result));  

  }

  public function send_bad_comment_vote(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('res_id');
    $id_user=Request::get('id_user');
    $comment=Request::get('comment');

    $id_user_comment=auth()->guard('users_comiziamo')->user()->id;

    if ($id_user_comment==$id_user) {

      $result="myself";

    }else{

      $this->universal_db()->table('abuse_comiziamo')
      ->insertGetId(array( 
      'id_arg'=>$id_arg,
      'id_user'=>$id_user,
      'comment'=>$comment,
      ));

    }

    return View::make('query')->with("result",json_encode($result));  

  }



  public function get_argument_chart(){

    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $res_id=Request::get('res_id');
    $get_argument_chart=$this->universal_db()->table('argument_comiziamo')
    ->where('id', '=',$res_id)
    ->get();

    return View::make('query')->with("result",json_encode($get_argument_chart));

  }

  public function get_statistics_comiziamo(){  
  //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
  $id_arg=Request::get('res_id');

  $get_chart= $this->universal_db()->table('argument_partecipant_comiziamo')
    ->select(DB::raw('users_comiziamos.nickname as nickname, argument_partecipant_comiziamo.*'))
    ->join('users_comiziamos', 'users_comiziamos.id', '=', 'argument_partecipant_comiziamo.id_user') 
    ->where('id_arg','=', $id_arg)
    ->get();

  return View::make('query')->with("result",json_encode($get_chart)); 

  }

  public function get_comment_chart(){  
  //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
  $id_user=Request::get('id_user');
  $id_arg=Request::get('res_id');

  $get_comment_chart= $this->universal_db()->table('comment_comiziamo')
    ->select(DB::raw('comment_comiziamo.comment, users_comiziamos.nickname as nickname, users_comiziamos.img as img, users_comiziamos.level_char as level_char, users_comiziamos.id as id_user' ))
    ->join('argument_partecipant_comiziamo', 'argument_partecipant_comiziamo.id', '=', 'comment_comiziamo.id_arg_partecipant')
    ->join('users_comiziamos', 'users_comiziamos.id', '=', 'comment_comiziamo.id_user') 
    ->where('comment_comiziamo.id_arg','=', $id_arg)
    ->where('argument_partecipant_comiziamo.id_user','=', $id_user)
    ->get();

  return View::make('query')->with("result",json_encode($get_comment_chart)); 

  }

  public function get_preview_chart(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_user=Request::get('id_user');
    $id_arg=Request::get('res_id');

    $preview_rally=$this->universal_db()->table('argument_partecipant_comiziamo')
      ->where('id_user','=',$id_user)
      ->where('id_arg','=',$id_arg)
      ->get();

    if (count($preview_rally)==0) {

        $result=count($preview_rally); 

      }else{

        $target_dir = "../public/comiziamo_repo/rally/".$preview_rally[0]->path."/";
        $pieces_dir = explode("../public/", $target_dir)[1];

        $file_name=array_slice(scandir($target_dir), 2);

        $result=["directory" => $pieces_dir, "file" => $file_name, "preview" => $preview_rally[0]->type, "preview_timestamp" => $preview_rally[0]->date_stamp, "preview_comment" => $preview_rally[0]->comment_arg]; 
      }

  
    return View::make('query')->with("result",json_encode($result));

  }

  public function get_winner_chart(){   
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $id_arg=Request::get('res_id');

    $get_winner=$this->universal_db()->table('argument_comiziamo')
      ->where('id','=',$id_arg)
      ->first();
  
    return View::make('query')->with("result",json_encode($get_winner->winner));

  }


  public function random_token_comiziamo(){

    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $ip_address=Request::get('ip_address');

    $orders_with_token = $this->universal_db()->table('cookie_comiziamo')
    ->select(DB::raw('max(numb_access) as max_numb_access'))
    ->where("ip_address", "=", $ip_address)
    ->get();

    if ($orders_with_token[0]->max_numb_access!=null) {

      $this->universal_db()->table('cookie_comiziamo')  
      ->where('ip_address', '=',$ip_address)
      ->update(
        array(
         'numb_access'=>$orders_with_token[0]->max_numb_access+1,
       ));
      
    }else{

      $this->universal_db()->table('cookie_comiziamo')
      ->insertGetId(array( 
       'ip_address'=>$ip_address,
       'numb_access'=>1,

     ));

    }
      return View::make('query')->with("result",json_encode($ip_address));


  }

  function getRandomPass($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
      $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
  }

  function getRandomString($length = 8) {
    $characters = '0123456789';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
      $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
  }

  public function check_token_exist(){
    //Config::set('database.connections.mysql_dynamic.database',env('DB_DATABASE', 'comiziamo'));
    $ip_address=Request::get('ip_address');

    $max_numb = $this->universal_db()->table('cookie_comiziamo')
    ->select(DB::raw('max(numb_access) as max_numb_access'))
    ->where("ip_address", "=", $ip_address)
    ->get();

    if ($max_numb[0]->max_numb_access!=null) {

      $this->universal_db()->table('cookie_comiziamo')  
      ->where('ip_address', '=',$ip_address)
      ->update(
        array(
         'numb_access'=>$max_numb[0]->max_numb_access+1,
       ));

    }else{

      $this->universal_db()->table('cookie_comiziamo')
      ->insertGetId(array( 
       'ip_address'=>$ip_address,
       'numb_access'=>1,

     ));

    }

    

    return View::make('query')->with("result",json_encode($max_numb));
  }


  public function follow_comiziamo(){

    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $who_is_followed=Request::get('who_is_followed');

    if ($id_user==$who_is_followed) {
      $result="myself";
    } else {

    $exists_follow=$this->universal_db()->table('follow_party_comiziamo')
    ->where("who_follows", "=", $id_user)
    ->where("who_is_followed", "=", $who_is_followed)
    ->first();

      if ($exists_follow) {

        $result="update";

        $this->universal_db()->table('follow_party_comiziamo')
        ->where("who_follows", "=", $id_user)
        ->where("who_is_followed", "=", $who_is_followed)
        ->update(
          array(
           'who_is_followed'=>$who_is_followed,
           'who_follows'=>$id_user,
           'delete_allied'=>0,

         ));
      }else{

        $result="crea";
        $id_room = $this->get_id_room();


          $get_id_room = DB::select('select id_room from `follow_party_comiziamo` where who_is_followed='.$id_user.' and who_follows='.$who_is_followed.' or who_is_followed='.$who_is_followed.' and who_follows='.$id_user.'');

          if ($get_id_room) {

            $this->universal_db()->table('follow_party_comiziamo')
            ->insertGetId(array( 
             'who_is_followed'=>$who_is_followed,
             'who_follows'=>$id_user,
             'id_room'=>$get_id_room[0]->id_room,
           ));

          } else{

            $this->universal_db()->table('follow_party_comiziamo')
            ->insertGetId(array( 
             'who_is_followed'=>$who_is_followed,
             'who_follows'=>$id_user,
             'id_room'=>$id_room,
           ));

          }

        
      }

      $follower=$this->universal_db()->table('follow_party_comiziamo')
      ->select(DB::raw('count(id) as count_follower'))
      ->where("who_is_followed", "=", $who_is_followed)
      ->where("delete_allied", "=", 0)
      ->first();


      $this->universal_db()->table('users_comiziamos')
        ->where("id", "=", $who_is_followed)
        ->update(
          array(
           'follower'=>$follower->count_follower,
         ));

      // $this->universal_db()->table('chat_comiziamo')
      //       ->insertGetId(array( 
      //        'who_is_followed'=>$who_is_followed,
      //        'who_follows'=>$id_user,
      //        'id_room'=>$id_room,
      //      ));  


    }

    return View::make('query')->with("result",json_encode($result));

  }


  public function read_button_follow(){
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $get_followers=$this->universal_db()->table('follow_party_comiziamo')
    ->where("who_follows", "=", $id_user)
    ->where("delete_allied", "=", 0)
    ->get();

    return View::make('query')->with("result",json_encode($get_followers));

  }


  public function remove_follow(){

    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $who_is_followed=Request::get('who_is_followed');


    // $this->universal_db()->table('follow_party_comiziamo')
    // ->where("who_follows", "=", $id_user)
    // ->where("who_is_followed", "=", $who_is_followed)
    // ->delete();
    $this->universal_db()->table('follow_party_comiziamo')
    ->where("who_follows", "=", $id_user)
    ->where("who_is_followed", "=", $who_is_followed)
    ->update(
          array(
           'delete_allied'=>1,
         ));
    


    $follower=$this->universal_db()->table('follow_party_comiziamo')
      ->select(DB::raw('count(id) as count_follower'))
      ->where("who_is_followed", "=", $who_is_followed)
      ->where("delete_allied", "=", 0)
      ->first();


      $this->universal_db()->table('users_comiziamos')
        ->where("id", "=", $who_is_followed)
        ->update(
          array(
           'follower'=>$follower->count_follower,
         ));

    return View::make('query')->with("result",json_encode($who_is_followed));
  }


  public function follow_party(){

    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $id_party=Request::get('id_party');

    $get_followers_party = $this->universal_db()->table('detail_party_comiziamo')
      ->where("id_party", "=", $id_party)
      ->where('id_user','=',$id_user)
      ->first();

    if ($get_followers_party) {

      $result="exist";

      $this->universal_db()->table('detail_party_comiziamo')
        ->where("id_party", "=", $id_party)
        ->where("id_user", "=", $id_user)
        ->update(
          array(
           'id_party'=>$id_party,
           'id_user'=>$id_user,
           'delete_allied'=>0,
         ));

      } else {

        $this->universal_db()->table('detail_party_comiziamo')
        ->insertGetId(array( 
          'id_party'=>$id_party,
          'id_user'=>$id_user,
        ));

        $this->universal_db()->table('users_comiziamos')
          ->where('id','=',$id_user)
          ->update(
            array(
           'creation_party'=>1,
           )); 

      $get_count_followes_party = $this->universal_db()->table('detail_party_comiziamo')
          ->select(DB::raw('count(id_party) as count_followers_party'))
          ->where("id_party", "=", $id_party)
          ->where("delete_allied", "=", 0)
          ->get();

        $this->universal_db()->table('party_comiziamo')
          ->where('id','=',$id_party)
          ->update(
            array(
           'count_allied'=>$get_count_followes_party[0]->count_followers_party,
           ));    

        $result="create";
      } 

      return View::make('query')->with("result",json_encode($result));

  }



  public function read_button_follow_party(){
    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $id_party=Request::get('id_party');
    $get_followers_party=$this->universal_db()->table('detail_party_comiziamo')
    ->where("id_user", "=", $id_user)
    ->where("id_party", "=", $id_party)
    ->where("delete_allied", "=", 0)
    ->get();

    return View::make('query')->with("result",json_encode($get_followers_party));

  }


  public function remove_follow_party(){

    $id_user=auth()->guard('users_comiziamo')->user()->id;
    $id_party=Request::get('id_party');

    $this->universal_db()->table('detail_party_comiziamo')
    ->where("id_user", "=", $id_user)
    ->where("id_party", "=", $id_party)
    ->update(
          array(
           'delete_allied'=>1,
         ));
    
    $follower=$this->universal_db()->table('detail_party_comiziamo')
      ->select(DB::raw('count(id) as count_follower'))
      ->where("id_party", "=", $id_party)
      ->where("delete_allied", "=", 0)
      ->first();


      $this->universal_db()->table('party_comiziamo')
        ->where("id", "=", $id_party)
        ->update(
          array(
           'count_allied'=>$follower->count_follower,
         ));

    return View::make('query')->with("result",json_encode($id_party));
  }


  public function get_newspaper(){ 

    $lang=session()->get('locale'); 
      if ($lang=="") {
        $lang="it";
      }

    $get_newspaper=$this->universal_db()->table('argument_comiziamo')
      ->where("lang","=",$lang)
      ->where("img_arg","!=","")
      ->orderBy("id","DESC")
      ->get();

      return View::make('query')->with("result",json_encode($get_newspaper));

  }


   public function get_data_user_comiziamo(){

    $id_user=Request::get('id_user');

      $exist_party=$this->universal_db()->table('users_comiziamos')
        ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.bio as bio, users_comiziamos.quote as quote, users_comiziamos.level as level, users_comiziamos.level_char as level_char, users_comiziamos.img as img, users_comiziamos.follower as follower, party_comiziamo.*'))
        ->join('party_comiziamo', 'party_comiziamo.creator_party', '=', 'users_comiziamos.id')
        ->where("users_comiziamos.id", "=", $id_user)
        ->get();

      if ($exist_party) {

        $get_data_user=$this->universal_db()->table('users_comiziamos')
        ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.bio as bio, users_comiziamos.quote as quote, users_comiziamos.level as level, users_comiziamos.level_char as level_char, users_comiziamos.img as img, users_comiziamos.follower as follower, party_comiziamo.*'))
        ->join('party_comiziamo', 'party_comiziamo.creator_party', '=', 'users_comiziamos.id')
        ->where("users_comiziamos.id", "=", $id_user)
        ->get();

        $get_data_user_party=$this->universal_db()->table('detail_party_comiziamo')
        ->join('party_comiziamo', 'party_comiziamo.id', '=', 'detail_party_comiziamo.id_party')
        ->where("detail_party_comiziamo.id_user", "=", $id_user)
        ->where("detail_party_comiziamo.delete_allied", "=", 0)
        ->get();
       

      }else{

        $get_data_user=$this->universal_db()->table('users_comiziamos')
        ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.bio as bio, users_comiziamos.quote as quote, users_comiziamos.level as level, users_comiziamos.level_char as level_char, users_comiziamos.img as img, users_comiziamos.follower as follower'))
        ->where("users_comiziamos.id", "=", $id_user)
        ->get();

        $get_data_user_party=0;
        
      }


    $get_argument_partecipant_user=$this->universal_db()->table('argument_comiziamo')
      ->select(DB::raw('argument_comiziamo.*, argument_partecipant_comiziamo.*'))
      ->join('argument_partecipant_comiziamo', 'argument_partecipant_comiziamo.id_arg', '=', 'argument_comiziamo.id')
      ->where("argument_partecipant_comiziamo.id_user", "=", $id_user)
      ->get();

      $result=["data_user" => $get_data_user, "data_user_party" => $get_data_user_party, "get_argument_partecipant_user" => $get_argument_partecipant_user]; 

      return View::make('query')->with("result",json_encode($result));

   }


   public function get_list_users(){

    $search_user=Request::get('search_user');

    $get_user=$this->universal_db()->table('users_comiziamos')
      ->select(DB::raw('users_comiziamos.id as id_user, users_comiziamos.nickname as nickname, users_comiziamos.bio as bio, users_comiziamos.quote as quote, users_comiziamos.level as level, users_comiziamos.level_char as level_char, users_comiziamos.img as img, users_comiziamos.follower as follower'))
      ->where("users_comiziamos.nickname", "LIKE", "%".$search_user."%")
      ->get();

    // $get_argument_partecipant_user=$this->universal_db()->table('argument_comiziamo')
    //   ->select(DB::raw('argument_comiziamo.*, argument_partecipant.*'))
    //   ->join('argument_partecipant', 'argument_partecipant.id_arg', '=', 'argument_comiziamo.id')
    //   ->where("argument_partecipant.id_user", "=", $id_user)
    //   ->get();  

    //   $result=["get_user" => $get_user, "get_argument_partecipant_user" => $get_argument_partecipant_user]; 

    return View::make('query')->with("result",json_encode($get_user));
   }



}