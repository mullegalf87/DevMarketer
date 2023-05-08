<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Models\Dnd\Element;
use App\Models\Dnd\Game;
use App\Models\Dnd\GameDetail;
use Illuminate\Support\Facades\Validator;
use App\Users_dnd;
use Auth;
use Session;

class DndController extends Controller
{

  public function go_to_page(){
    return view('dnd.index');
  }

  public function register_user_dnd(){
    $messages = [
      "email.required" => "Email is required",
      "email.exists" => "Email exists",
      "password.required" => "Passowrd is required",
      "password.min" => "Password almost min 6 character"
    ];
    $validator = Validator::make(Request::all(), [
      'email' => 'required|max:255|unique:users_dnds',
      'password' => 'required|min:6|confirmed',
    ], $messages);
    if ($validator->fails()) {
      return back()->withErrors($validator)->withInput(); 
    } else {
      $user = Users_dnd::create([
        'name' =>Request::get('name'),
        'lastname' =>Request::get('lastname'),
        'username' =>Request::get('username'),
        'email' =>Request::get('email'),
        'password' => bcrypt(Request::get('password')),
        'pwd_decrypt' => Request::get('password'),
      ]);
    }
    Auth::guard('users_dnd')->login($user);
    return redirect()->to('/dnd');
  }

  protected function login_dnd(){
    $messages = [
      "email.required" => "Email is required",
      "email.exists" => "Email exists",
      "password.required" => "Passowrd is required",
      "password.min" => "Password almost min 6 character"
    ];
    $validator = Validator::make(Request::all(), [
      'email' => 'required|max:255|exists:users_dnds,email',
      'password' => 'required|min:6|'
    ], $messages);
    if ($validator->fails()) {
      return back()->withErrors($validator)->withInput(); 
    } else {
      $email=Request::get('email');
      $password=Request::get('password');
      if(Auth::guard('users_dnd')->attempt(['email' => $email, 'password' => $password]))  {
        return redirect()->to('/dnd');
      } else{
        return back()->withErrors([
          'password' => 'Incorrect password!'
        ])->withInput(); 
      }
    }
  }

  public function logout_dnd(){
    Auth::guard('users_dnd')->logout();
    return redirect()->to('/dnd');
  }

  public function save_dnd() {
    $class=Request::get("nameclass");
    $method="insertGetId";
    $data=Request::get("data");
    $id_user=Auth::guard('users_dnd')->id();
    $data[0]["id_user"]=$id_user;
    $class_name = "App\\Models\\Dnd\\" . $class;
    $class_instance = new $class_name;
    $id=$class_instance->$method($data[0]);
    return $id;
  }

  public function load_game_dnd(){
    $id_user=Auth::guard('users_dnd')->id();
    $data = Game::where("id_user","=",$id_user)->get();
    return view('dnd.menu.menu_user.loadgame')->with("data", json_encode($data));
  }

  public function get_element_dnd(){
    $namecategory=Request::get("namecategory");
    $category=Request::get("category");
    $data = Element::where("category","=",$category)->get();
    return view('dnd.menu.menu_general.'.$namecategory)->with("data", json_encode($data));
  }

  public function delete_element_dnd(){
    $id=Request::get("idelement");
    $data=Element::find($id);
    $category=$data->category;
    $media=$data->media;
    $directory = './dnd_repo/'.$category.'/'.$media;
    unlink($directory);
    Element::where("id","=",$id)->delete();
    return "deleted";
  }

  public function save_game_detail_dnd(){
    $obj_element=Request::get("obj_element");
    GameDetail::where("id_game","=",$obj_element[0]["id_game"])->delete();
    if ($obj_element) {
      foreach ($obj_element as $key => $value) {
        GameDetail::insertGetId($value);
      }
    }
    return "saved!";
  }

  public function delete_game_dnd(){
    $id_game=Request::get("id_game");
    Game::where("id","=",$id_game)->delete();
    GameDetail::where("id_game","=",$id_game)->delete();
    return "deleted!";
  }

  public function get_game_dnd(){
    $id_game=Request::get("id_game");
    $element = GameDetail::with('elements')->where('id_game', $id_game)->get();
    $object = [];
    foreach($element as $element_detail) {
      $object[]=array(
        "id_element"=>$element_detail->elements->id,
        "category"=>$element_detail->elements->category,
        "media"=>$element_detail->elements->media,
        "body_width"=>$element_detail->body_width,
        "body_height"=>$element_detail->body_height,
        "width"=>$element_detail->width,
        "height"=>$element_detail->height,
        "css_top"=>$element_detail->css_top,
        "css_left"=>$element_detail->css_left,
        "whereappend"=>$element_detail->elements->whereappend
      );
    }
    return $object;
  }

}