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
use App\User;
use DateTime;


class TicketController extends Controller
{

  //Private variable to store the user object.
  private $user;

  //Inject the $user module and store it in our private variable.
  public function __construct(User $user)
  {
      $this->user = $user;
  }

  public function universal_db(){

    Config::set('database.connections.mysql_dynamic.database','ticket_assistenza');
    $universal=DB::connection('mysql_dynamic');

    return $universal;

  }

  //side salon
  public function salon_ticket($token){
    
      $d1=$this->universal_db()->table('token_salon')
      ->where("token","=",$token)
      ->get();
    if(count($d1)){
       $id_salon=$d1[0]->id_s;
       Session::put("id_salon",$id_salon);
       Session::put("token_op",Request::get("v"));
       //$id_salont?v=token_op
    }else{
      return "ciao";
    }   
    return view("ticket.salon");
  }


 

  //dopo aver fatto l'accesso ottengo i ticket del salone
  public function get_ticket_s(){
    $id_salon=Session::get("id_salon");
    
    $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
    ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
    ->where("circuito","=",$id_salon)
    ->orderBy('id', 'DESC')
    ->get();


    return View::make('query')->with("result",json_encode($d));
  }



  //mi permette di aprire un ticket
  public function send_request(){
    $id_salon=Session::get("id_salon");
    
    
    $id_insert=$this->universal_db()->table('archivio_ticket')->insertGetId(array( 
      'ragione_sociale'=>Request::get('ragione_sociale'),
      'circuito'=>$id_salon,
      'circuito_op'=>Request::get('circuito_op'),
      'op_name'=>Request::get('op_name'),
      'recapito_telefonico'=>Request::get('recapito_telefonico'),
      'indirizzo_email'=>Request::get('indirizzo_email'),
      'scegli_categoria'=>Request::get('scegli_categoria'),
      'oggetto'=>Request::get('oggetto'),
      'messaggio'=>Request::get('messaggio'),
      'stato'=>Request::get('stato')
    ));

    return $id_insert;

  }

  //mi permette di inviare il messaggio di cortesia sulla chat automaticamente al salone quando apre il ticket
  public function send_chat_ticket_salon_from_request(){

    
    $d1=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->insertGetId(array( 
      'id_ticket'=>Request::get('id_ticket'),
      'who'=>Request::get('who'),
      'messaggio'=>Request::get('messaggio'),
      'operatore'=>Request::get('operatore'),
    ));

    $this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'count_sent_message_operator'=>1,
       'count_sent_message_salon'=>1,
     ));

  }


  //mi permette di inviare un messaggio tramite chat
  public function send_chat_ticket_salon(){
    
    $d1=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->insertGetId(array( 
      'id_ticket'=>Request::get('id_ticket'),
      'who'=>Request::get('who'),
      'messaggio'=>Request::get('messaggio'),
      'operatore'=>Request::get('operatore'),
    ));


    //ottengo il count dei messaggi inviati dal salone
    $count_sent_message_salon=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->select(DB::raw('count(*) as count_messaggi'))
    ->where('id_ticket', '=',Request::get('id_ticket'))
    ->where('is_read', '=',0)
    ->where('who', '=',0) 
    ->get();

    
    $d=new DateTime("now");
    $d->modify("+120 minutes");

    //aggiorno la data del timestamp di elaborazione ogni volta che si invia un messaggio e anche il count dei messaggi che l'operatore dovrà leggere
    $this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'data_elaborazione'=>$d->format("Y-m-d H:i:s"),
       'count_sent_message_salon'=>$count_sent_message_salon[0]->count_messaggi,
     ));


  }

  //mi permette di leggere i messaggi della chat
  public function show_chat_ticket_salon(){
    $id_ticket=Request::get('id_ticket');
    
    $d1=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->where("id_ticket","=",$id_ticket)
    ->orderBy('data', 'ASC')
    ->get();


    //ottengo il count dei messaggi inviati dal salone e poi dovranno essere letti dall'operatore
    $count_sent_message_operator=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->select(DB::raw('count(*) as count_messaggi'))
    ->where('id_ticket', '=',Request::get('id_ticket'))
    ->where('is_read', '=',0)
    ->where('who', '=',1) 
    ->get();


    //salvo il count dei messaggi nella tabella aggiornato alla lettura dei messaggio della chat
    $this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'count_sent_message_operator'=>$count_sent_message_operator[0]->count_messaggi,
     ));



    $d=["ticket_salon" => $d1]; 
    return View::make('query')->with("result",json_encode($d));
  }


  //permette di rendere letto un messaggio
  public function read_message_salon(){
    
    $this->universal_db()->table('archivio_ticket_dettaglio')
    ->where('id_ticket', '=',Request::get('id_ticket'))
    ->where('who', '=',1)
    ->update(
      array(
       'is_read'=>Request::get('is_read'),
     ));
  }


  //mi permette di leggere il numero delle immagini presente in una cartella in modo tale da inserire dinamicamente le guide in scegli categoria
  public function read_number_image(){
    $name_folder = Request::get('name_folder');
    $directory = 'test_ticket/img/'.$name_folder.'/';
    $filecount = 0; 
    $files2 = glob( $directory ."*" ); 
    if( $files2 ) { 
      $filecount = count($files2); 
    } 
    return View::make('query')->with("result",json_encode($filecount));
  }



  //ottieni nome dell'agente all'apertura del ticket lato salone
  public function read_name_agent(){
    $id_op=Session::get('token_op');
    $users = $this->user->where('assign_token', $id_op)->get();
    $d=["read_name_agent" => $users];
    return View::make('query')->with("result",json_encode($d));
  }






  //side operator


  //mi porta al login dell'operatore
  public function login_operator(){
    return view("ticket.login_operator");
  }

  
  //mi permette di fare il logout 
  public function logouts(Request $request) {
    Auth::logout();
    return redirect('/login_operator');
  }


  //mi permette di accedere al sito in  modo sicuro
  public function operator_ticket(){
    
    if (Auth::user()) {

      $id_operator=Auth::user()->id;
      $type_operator=Auth::user()->type;
      Session::put("id_operator",$id_operator);
      Session::put("type_operator",$type_operator);

      // return view("ticket.operator"); originale
      return view("ticket.copia_operator");

    }else{

      return view("ticket.login_operator");

    }
   
  }


  //mi permette di ottenere la lista degli agenti se l'operatore è un amministratore = type=0
  public function get_name_operator_filter(){
    $type_operator=Session::get("type_operator");
    if ($type_operator==0) {
    $list_users=$this->user->get();
    return View::make('query')->with("result",json_encode($list_users));
    }else{

    }
    
  }

  //mi permette di ottenere i ticket dei saloni in modo mirato con i filtri
  public function get_ticket_o(){
    $stato_filtro=Request::get("stato_filtro");
    $operatore_filtro=Request::get("operatore_filtro");



    $id_operator=Session::get("id_operator");
    $type_operator=Session::get("type_operator");

    
    if ($type_operator==0) { //se è zero sono gli operatori prog che possono vedere tutti i ticket e messaggi
      if ($stato_filtro==null) { 

        $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
        ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
        ->whereIn("circuito_op",$operatore_filtro)
        ->orderBy('data', 'ASC')
        ->get();
      } else if ($operatore_filtro==null){ 

        $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
        ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
        ->whereIn("stato",$stato_filtro)
        ->orderBy('data', 'ASC')
        ->get();
      } else if ($operatore_filtro!=null && $stato_filtro!=null){ 
      
        $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
        ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
        ->whereIn("stato",$stato_filtro)
        ->whereIn("circuito_op",$operatore_filtro)
        ->orderBy('data', 'ASC')
        ->get();
        
      } else{

        $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
        ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
        ->whereIn("stato",[0])
        ->whereIn("circuito_op",[0])
        ->orderBy('data', 'ASC')
        ->get();
      }
    }else{  //se è 1 sono gli agenti e possono vedere solo i loro ticket con l'id_operator e i loro messaggi
      if ($stato_filtro!=null) { 
   
        $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
        ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
        ->whereIn("stato",$stato_filtro)
        ->where("circuito_op","=",$id_operator)
        ->orderBy('data', 'ASC')
        ->get();
      } else{
        
        $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
        ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
        ->whereIn("stato",[0])
        ->where("circuito_op","=",$id_operator)
        ->orderBy('data', 'ASC')
        ->get();


      }
    }

    return View::make('query')->with("result",json_encode($d));
  }



  // mi permette di inviare un messaggio tramite chat
  public function send_chat_ticket_operator(){
    $id_operator=Session::get("id_operator");
    
    $d1=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->insertGetId(array( 
      'id_ticket'=>Request::get('id_ticket'),
      'who'=>Request::get('who'),
      'messaggio'=>Request::get('messaggio'),
      'operatore'=>$id_operator,
    ));

    //ottengo il count dei messsaggi inviato dall'operatore e che dvoranno essere letti dal salone
    $count_sent_message_operator=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->select(DB::raw('count(*) as count_messaggi'))
    ->where('id_ticket', '=',Request::get('id_ticket'))
    ->where('is_read', '=',0)
    ->where('who', '=',1) 
    ->get();

    $d=new DateTime("now");
    $d->modify("+120 minutes");

    //aggiorno la data del time stamp quando invio i messaggi e anche il count dei messaggi inviati che dovranno essere letti dall salone
    $this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'data_elaborazione'=>$d->format("Y-m-d H:i:s"),
       'count_sent_message_operator'=>$count_sent_message_operator[0]->count_messaggi,
     ));

    //mi permette di risalire allo stato del ticket
    $d2=$this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->get();

    
    $result=["stato_ticket" => $d2]; 

    return View::make('query')->with("result",json_encode($result));
  }



   //mi permette di leggere i messaggi della chat
  public function show_chat_ticket_operator(){
    $id_ticket=Request::get('id_ticket');
    
    $d1=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->where("id_ticket","=",$id_ticket)
    ->orderBy('data', 'ASC')
    ->get();



    //ottengo il count dei messaggi inviati dal salone e poi dovranno essere letti dall'operatore
    $count_sent_message_salon=$this->universal_db()->table('archivio_ticket_dettaglio')
    ->select(DB::raw('count(*) as count_messaggi'))
    ->where('id_ticket', '=',Request::get('id_ticket'))
    ->where('is_read', '=',0)
    ->where('who', '=',0) 
    ->get();


    //aggiorno il count dei messaggi dopo averli letti
    $this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'count_sent_message_salon'=>$count_sent_message_salon[0]->count_messaggi,
     ));

    $d=["ticket_salon" => $d1]; 

    return View::make('query')->with("result",json_encode($d));
  }

  

  //mi permette di rendere letto un messaggio
  public function read_message_operator(){
    
    $this->universal_db()->table('archivio_ticket_dettaglio')
    ->where('id_ticket', '=',Request::get('id_ticket'))
    ->where('who', '=',0)
    ->update(
      array(
       'is_read'=>Request::get('is_read'),
     ));


    return "ciao";
      
}

 

  //mi permette di modificare lo stato del ticket, per chiudere il ticket
  public function edit_request(){

    $report=Request::get('report');
    
    if ($report==null) {

 

     $d1=$this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'stato'=>Request::get('stato'),
     ));

    }else{


      $d1=$this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id_ticket'))
    ->update(
      array(
       'stato'=>Request::get('stato'),
       'report_closure'=>Request::get('report'),
     ));

    }

 

    return View::make('query')->with("result",json_encode($d1));

  }

  // public function edit_request_administrator(){

  //   $id_ticket=Request::get('id_ticket');
  //   $stato=Request::get('stato');
  //   $circuito_op=Request::get('circuito_op');
  //   $today= date('Y-m-d H:i:s');

    

  //   
  //   $d1=$this->universal_db()->table('archivio_ticket')
  //   ->where('id', '=',$id_ticket)
  //   ->where('circuito_op', '=',$circuito_op)
  //   ->update(
  //     array(
  //      'stato'=>$stato,
  //      'data_elaborazione'=>$today,
  //    ));


  //     return View::make('query')->with("result",json_encode($today));
  // }


  //mi permette di ottenere i nomi degli operatori per la chat in modo sicuro
   public function get_name_operator(){
    $id_operatori=Request::get('id_operatori');
    $length = count($id_operatori);
    $values = array();
    for ($i = 0; $i < $length; $i++) {
      $users_table= $this->user->where('id', $id_operatori[$i])->get();
      $arrayName = array('operatore' => $users_table[0]);
      $values[] =$users_table[0];    
    }
    return View::make('query')->with("result",json_encode($values));
  }


  ///////parte agenda//////


  //ottengo gli id_ticket da associare all'evento nell'agenda
  public function ticket_agenda(){

    
    $d1=$this->universal_db()->table('archivio_ticket')
    ->where('id', '=',Request::get('id'))
    ->get();
    return View::make('query')->with("result",json_encode($d1));
  }

  //inserisco gli appuntamenti provenienti dai ticket
  public function insert_ticket_agenda(){
    
    //controllo per id
    $d1=$this->universal_db()->table('agenda')
    ->where('id_external','=', Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->first();

    //controllo per data e per resources id
    $date_start=Request::get('start');
    $date_end=Request::get('end');
    $resourceId=Request::get('resourceId');
    $d2=$this->universal_db()->table('agenda')
    ->where('end','>', $date_start)
    ->where('start','<', $date_end)
    ->where('resourceId','=', $resourceId)
    ->where('obsolete','=', 0)
    ->first();


    
    if ($d1) {
      //se l'id_ticket è contenuto nella tabella agenda, significa che l'appuntamento è stato già preso
      $id_insert=0;
    
      
    } else if($d2){
      //se la data appuntamento esiste, significa che devi spostarlo
      $id_insert=1;

    }else{
      //se l'id_ticket NON è contenuto nella tabella agenda, significa che l'appuntamento deve essere preso
      $this->universal_db()->table('agenda')->insertGetId(array( 
      'id_external'=>Request::get('id'),
      'title'=>Request::get('title'),
      'resourceId'=>Request::get('resourceId'),
      'start'=>Request::get('start'),
      'end'=>Request::get('end'),
      'rendering'=>Request::get('rendering')
    ));
      $id_insert=2;
    }

    return $id_insert;
  }


  //modifico l'appuntamento dell'agenda a seconda della provenienza group id per drop e resize
  public function edit_ticket_agenda_drop(){
    


    $date_start=Request::get('start');
    $date_end=Request::get('end');
    $resourceId=Request::get('resourceId');
    $title=Request::get('title');

    $d2=$this->universal_db()->table('agenda')
    ->whereNotIn('id_external',[ Request::get('id')])
    ->where('end','>', $date_start)
    ->where('resourceId','=',$resourceId)
    ->where('start','<', $date_end)
    ->where('obsolete','=', 0)
    ->first();
   

    if ($d2!=null) {

       $id_insert=1;

    }else{

      $this->universal_db()->table('agenda')
    ->where('id_external', '=',Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->update(
      array(
      'title'=>$title,
      'resourceId'=>Request::get('resourceId'),
      'start'=>Request::get('start'),
      'end'=>Request::get('end'),
     ));

    $id_insert=2;

    }

    return $id_insert;

  }

  //modifico l'appuntamento dell'agenda a seconda della provenienza group id per drop e resize
  public function edit_ticket_agenda_resize(){
    


    $date_start=Request::get('start');
     // $date_start_add=Carbon::Parse($date_start)->addMinutes(15);
    $date_end=Request::get('end');
      // $date_end_add=Carbon::Parse($date_end)->subMinutes(15);
    $resourceId=Request::get('resourceId');

 

    $d2=$this->universal_db()->table('agenda')
    ->whereNotIn('id_external',[ Request::get('id')])
    ->where('resourceId','=',$resourceId)
    ->where('end','>', $date_start)
    ->where('start','<', $date_end)
    ->where('obsolete','=', 0)
    ->first();




    if ($d2!=null) {

       $id_insert=1;

    }else{

      $this->universal_db()->table('agenda')
    ->where('id_external', '=',Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->update(
      array(
      'resourceId'=>Request::get('resourceId'),
      'start'=>Request::get('start'),
      'end'=>Request::get('end'),
     ));

    $id_insert=2;

    }

    return $id_insert;

  }

  //ottieni tutti gli appuntamenti da mostrare in agenda
  public function get_ticket_agenda(){
    
    $d1=$this->universal_db()->table('agenda')
    ->where('obsolete','=', 0)
    ->get();
    return View::make('query')->with("result",json_encode($d1));
  }  

  //modifica il contenuto dell'agenda title, a seconda del rendering
  public function edit_event_agenda(){
    
    $rendering=Request::get('rendering');
    $select_problem=Request::get('select_problem');

    if ($rendering==1) { //se il gruppo è id_ticket_global

      $this->universal_db()->table('agenda')
    ->where('id_external', '=',Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->update(
      array(
      'title'=>Request::get('title'),
      'select_problem'=>Request::get('select_problem'),
     ));
     
    } else if($rendering==2){ //se il gruppo è id_robi_global

      $this->universal_db()->table('agenda')
    ->where('id_external', '=',Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->update(
      array(
      'title'=>Request::get('title'),
      'select_problem'=>Request::get('select_problem'),
     ));


    } else if($rendering==3){ //se il gruppo è id_app_global

      $this->universal_db()->table('agenda')
    ->where('id_external', '=',Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->update(
      array(
      'title'=>Request::get('title'),
      'select_problem'=>Request::get('select_problem'),
     ));

    }

    
    return "modificato";
  }  

  //elimina l'evento dall'agenda da qualunque provenienza secondo rendering
  // public function delete_event_agenda(){
  //   
  //   $d1=$this->universal_db()->table('agenda')
  //   ->where('id_external', '=',Request::get('id'))
  //   ->where('rendering','=', Request::get('rendering'))
  //   ->delete();
    
  //    return "cancellato";
  // }  



  public function delete_event_agenda(){
    
    $d1=$this->universal_db()->table('agenda')
    ->where('id_external', '=',Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->update(
      array(
       'obsolete'=>1,
      

     ));
    
     return "cancellato";
  }  


  


//ottengo lista appuntamenti inviati da roberto
  public function get_appointments_robi(){
      $d1=DB::table('Agenda_robi')
      ->get();
      return View::make('query')->with("result",json_encode($d1));


  }

//inserisco solo gli appuntamenti inviati da roberto
  public function insert_robi_agenda(){
    
    //controllo per id
    $d1=$this->universal_db()->table('agenda')
    ->where('id_external','=', Request::get('id'))
    ->where('rendering','=', Request::get('rendering'))
    ->where('obsolete','=', 0)
    ->first();

    //controllo per data e per resources id
    $date_start=Request::get('start');
    $date_end=Request::get('end');
    $resourceId=Request::get('resourceId');

    $d2=$this->universal_db()->table('agenda')
    ->where('end','>', $date_start)
    ->where('start','<', $date_end)
    ->where('resourceId','=', $resourceId)
    ->where('obsolete','=', 0)
    ->first();

    
    if ($d1) {
      //se l'id_ticket è contenuto nella tabella agenda, significa che l'appuntamento è stato già preso
      $id_insert=0;
    
    } else if($d2){
      //se la data appuntamento esiste, significa che devi spostarlo
      $id_insert=1;
    }else{
      //se l'id_ticket NON è contenuto nella tabella agenda, significa che l'appuntamento deve essere preso
      $this->universal_db()->table('agenda')->insertGetId(array( 
      'id_external'=>Request::get('id'),
      'title'=>Request::get('title'),
      'resourceId'=>Request::get('resourceId'),
      'start'=>Request::get('start'),
      'end'=>Request::get('end'),
      'rendering'=>Request::get('rendering')
    ));

       $d1=DB::table('Agenda_robi')
      ->where('id','=',Request::get('id'))
      ->delete();
      $id_insert=2;

    }
    
    return $id_insert;
  }

 //ottengo l'id che devo assegnare ad ogni appuntamento creato e indipendete da ticket e robi
 public function get_app_agenda(){
  //in questo modo in caso di due invii simultaneii duplica l'appuntamento
  
  //   $d1=$this->universal_db()->table('agenda')->where('rendering','=', Request::get('rendering'))->select(DB::raw('id_external'))->max('id_external');
  // $d= $d1 + 1;
  // return View::make('query')->with("result",json_encode($d));



 $d= $this->universal_db()->table('detail_agenda')->insertGetId(array( 
      'rendering'=>Request::get('rendering'),
    ));


  return View::make('query')->with("result",json_encode($d));

}

//inserisco gli appuntamenti indipendenti da robi e ticket
public function insert_app_agenda(){
    

    //controllo per data e per resources id
    $date_start=Request::get('start');
    $date_end=Request::get('end');
    $resourceId=Request::get('resourceId');
    $select_problem=Request::get('select_problem');
    $id_insert;

    $d2=$this->universal_db()->table('agenda')
    ->where('end','>', $date_start)
    ->where('start','<', $date_end)
    ->where('resourceId','=', $resourceId)
    ->where('obsolete','=', 0)
    ->first();

    if ($d2) {
      $id_insert=1;
    }else{

      $this->universal_db()->table('agenda')->insertGetId(array( 
      'id_external'=>Request::get('id'),
      'title'=>Request::get('title'),
      'resourceId'=>Request::get('resourceId'),
      'start'=>Request::get('start'),
      'end'=>Request::get('end'),
      'rendering'=>Request::get('rendering'),
      'select_problem'=>$select_problem,
    ));

     $id_insert=2;


    }
    //fare la stessa cosa degli altri per inserire i dati

    return $id_insert;
  }


  public function postpone_agenda(){
    $today=date("Y-m-d");
    $postpone_day=Request::get('giorni');
    
    $d2=$this->universal_db()->table('agenda')
    ->where('start','LIKE', '%'.$today.'%')
    ->where('end','LIKE', '%'.$today.'%')
    ->where('obsolete','=', 0)
    ->update(
      array(
       'start'=>DB::raw('DATE_ADD(start, INTERVAL '.$postpone_day.' DAY)'),
       'end'=>DB::raw('DATE_ADD(end, INTERVAL '.$postpone_day.' DAY)'),

     ));

    return View::make('query')->with("result",json_encode("salvato"));
  }











//test copia_salon per accedere senaz token



  public function copia_salon_ticket(){ 

   

    return view("ticket.copia_salon");
  }




  //ottieni il cookie da assegnare al salone
  public function get_cookie_random(){

      $token;
      do{
        $token = $this->getRandomString(14);



        $orders_with_token = DB::table('dati_rch')
        ->where("num_user", "=", $token)
        ->get();

        $token_exists = count($orders_with_token) > 0;


        return View::make('query')->with("result",json_encode($token));

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



    public function copia_send_request(){
    
    $cookie=Request::get('cookie');


    
    

    $check_cookie=$this->universal_db()->table('token_salon')
    ->select(DB::raw('id_s'))
    ->where('cookie','=', $cookie)
    ->first();

   

    if ($check_cookie) {
    
    $id_salon=$check_cookie->id_s;
    

  

    } else{
      //se non esiste prendi l'ultimo id e aggiungi +1

      $d1=$this->universal_db()->table('token_salon')->select(DB::raw('id_s'))->max('id_s');
      $d= $d1 + 1;

      $this->universal_db()->table('token_salon')->insertGetId(array( 
      'id_s'=>$d,
      'cookie'=>$cookie
      ));

      $id_salon=$d;
   

    }

    $id_insert=$this->universal_db()->table('archivio_ticket')->insertGetId(array( 
      'ragione_sociale'=>Request::get('ragione_sociale'),
      'circuito'=>$id_salon,
      'circuito_op'=>Request::get('circuito_op'),
      'op_name'=>Request::get('op_name'),
      'recapito_telefonico'=>Request::get('recapito_telefonico'),
      'indirizzo_email'=>Request::get('indirizzo_email'),
      'scegli_categoria'=>Request::get('scegli_categoria'),
      'oggetto'=>Request::get('oggetto'),
      'messaggio'=>Request::get('messaggio'),
      'stato'=>Request::get('stato')
    ));


    return $id_insert;

  }


  public function copia_get_ticket_s(){
    $cookie=Request::get('cookie');



    
    $d1=$this->universal_db()->table('token_salon')
    ->where("cookie","=",$cookie)
    ->get();
    
    if ($d1) {

      $id_salon=$d1[0]->id_s;

      $d["ticket_salon"]=$this->universal_db()->table('archivio_ticket')
      ->select(DB::raw('TIMEDIFF(now(), data) as ore_mancanti, archivio_ticket.*'))
      ->where("circuito","=",$id_salon)
      ->orderBy('id', 'DESC')
      ->get();

    } else{

      $d["ticket_salon"]="vuoto";



    }
    
    return View::make('query')->with("result",json_encode($d));
  }

  public function get_value_form_ticket(){


    $cookie=Request::get('cookie');

    
    $d1=$this->universal_db()->table('token_salon')
    ->where("cookie","=",$cookie)
    ->get();

    $id_salon=$d1[0]->id_s;



    $d=$this->universal_db()->table('archivio_ticket')
    ->where("circuito","=",$id_salon)
    ->get();



    return View::make('query')->with("result",json_encode($d));
  }

  public function send_feed_ticket(){

    $id_ticket=Request::get('id_ticket');
    $commento=Request::get('commento');
    $onStar=Request::get('onStar');

    
    $this->universal_db()->table('archivio_ticket')
      ->where("id","=",$id_ticket)
      ->update(
      array(
       'feedback_user'=>$commento,
       'stars_feedback'=>$onStar,
     ));

  }

  public function get_data_appointments(){

    $search_value=Request::get('search_value');
    
    $d1=$this->universal_db()->table('agenda')
    ->where("title","LIKE","%".$search_value."%")
    ->get();
    return View::make('query')->with("result",json_encode($d1));



  }

  public function get_report_agenda(){

    
    $get_report=$this->universal_db()->table('agenda')
    ->select(DB::raw('count(*) as count_problem, select_problem'))
    ->where("select_problem","!=","")
    ->groupBy("select_problem")
    ->get();
    return View::make('query')->with("result",json_encode($get_report));

  }


  public function paste_appointment_ticket(){
    
    $choose_paste=Request::get("choose_paste");

    $filter_date=Request::get("filter_date");

    for ($i=0; $i < count($filter_date) ; $i++) { 

      $id_external[$i]=$this->universal_db()->table("detail_agenda")
      ->insertGetId(array(
        "rendering"=>$filter_date[$i]["rendering"],
      ));

      $this->universal_db()->table("agenda")
      ->insertGetId(array(
        "id_external"=>$id_external[$i],
        "resourceId"=>$filter_date[$i]["resource_id"],
        "title"=>$filter_date[$i]["nota"],
        "start"=>$filter_date[$i]["start_time"],
        "end"=>$filter_date[$i]["end_time"],
        "rendering"=>$filter_date[$i]["rendering"],
      ));

      if ($choose_paste=="1") {

        $title = $this->string_between_two_string($filter_date[$i]["nota"], 'title:', '; ');
        $day = explode(" ",$filter_date[$i]["start_time"])[0];
        $image = $this->string_between_two_string($filter_date[$i]["nota"], 'image:', '; ');
        $start = $this->string_between_two_string($filter_date[$i]["nota"], 'start:', '; ');
        $end = $this->string_between_two_string($filter_date[$i]["nota"], 'end:', '; ');
        $company = $this->string_between_two_string($filter_date[$i]["nota"], 'company:', '; ');

      
        $this->universal_db()->table("calendar_class")
        ->insertGetId(array(
          "title"=>$title,
          "day"=>$day,
          "image"=>$image,
          "start"=>$start,
          "end"=>$end,
          "company"=>$company,
        ));
      
      }

    }

    return View::make('query')->with("result",json_encode("added!"));

  }

  function string_between_two_string($str, $starting_word, $ending_word)
{
    $subtring_start = strpos($str, $starting_word);
    //Adding the starting index of the starting word to
    //its length would give its ending index
    $subtring_start += strlen($starting_word); 
    //Length of our required sub string
    $size = strpos($str, $ending_word, $subtring_start) - $subtring_start; 
    // Return the substring from the index substring_start of length size
    return substr($str, $subtring_start, $size); 
}


}