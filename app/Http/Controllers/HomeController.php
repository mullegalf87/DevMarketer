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
        //se sotto non viene commentato per accedere al db devi essere sempre loggato
        // $this->middleware('auth');
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

}
