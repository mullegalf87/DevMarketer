<?php

namespace App\Modeltest;

use DB;
use View;
use Schema;
use Request;
use Config;
use Session;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{   
    public function universal_db2(){
        Config::set('database.connections.mysql_dynamic.database','laravel');
        $universal=DB::connection('mysql_dynamic');
        return $universal;
    }

    public function universal_db1(){
        Config::set('database.connections.mysql_dynamic.database','test');
        $universal=DB::connection('mysql');
        return $universal;
    }

    public function get_user() {
        $data=$this->universal_db2()->table('users_tests')
		->get();

		$data=json_encode($data);
		return $data;
    }
    
    public function get_product() {
        $data=$this->universal_db2()->table('product')
		->get();

		$data=json_encode($data);
		return $data;
    }

    public function get_cart() {
        $data=$this->universal_db2()->table('cart')
		->get();

		$data=json_encode($data);
		return $data;
    }

    public function join_user_product_cart() {
        $data=$this->universal_db2()->table('cart as ca')
        ->select('ut.name','ut.lastname','pr.name as prod','pr.qnt','pr.price','ca.sold')
        ->join('users_tests as ut', 'ut.id', '=', 'ca.id_user')
        ->join('product as pr', 'pr.id', '=', 'ca.id_prod')
        ->get();

		$data=json_encode($data);
		return $data;
    }
}
