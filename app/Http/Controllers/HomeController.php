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
use LaraFlash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      LaraFlash::add()->content('Hello World')->priority(6)->type('Info');
      LaraFlash::snackbar('Click to continue')->priority(3);
      LaraFlash::success("Yay it worked!");
      LaraFlash::danger('Oops Something went wrong!');
        return view('home');
    }

    public function add_prod_test(){
        
        $name_prod=Request::get("name_prod");
        $price_prod=Request::get("price_prod");
        
        DB::table("product_test")
        ->insertGetId(array(
            "name_prod"=>$name_prod,
            "price_prod"=>$price_prod,
        ));
        
        return "added!";
    }

    public function get_prod_test(){
    
        $get_prod=DB::table("product_test")
        ->get();

        return $get_prod;
    }

    public function update_prod_test(){

        $id_prod=Request::get("id");
        $name_prod=Request::get("name_prod");
        $price_prod=Request::get("price_prod");
    
        $get_prod=DB::table("product_test")
        ->where("id","=",$id_prod)
        ->update(array(
            "name_prod"=>$name_prod,
            "price_prod"=>$price_prod,
        ));

        return "updated!";
    }

    public function delete_prod_test(){

        $id_prod=Request::get("id");

        $get_prod=DB::table("product_test")
        ->where("id","=",$id_prod)
        ->delete();

        return "deleted!";
    }

}
