<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/test_ticket/css/layout_operatore.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

  <style type="text/css">


.chat-log {
  padding: 40px 0 114px;
  height: auto;
  overflow: auto;
}
.chat-log__item {
  background: #fafafa;
  padding: 10px;
  margin: 0 auto 20px;
  max-width: 80%;
  float: left;
  border-radius: 4px;
  box-shadow: 0 1px 2px rgba(0,0,0,.1);
  clear: both;
}

.chat-log__item.chat-log__item--own {
  float: right;
  background: #DCF8C6;
  text-align: right;
}

.chat-form {
  background: #DDDDDD;
  padding: 40px 0;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.chat-log__author {
  margin: 0 auto .5em;
  font-size: 14px;
  font-weight: bold;
}


.notification {

  color: white;
  text-decoration: none;

  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}


/*login style*/

@import url('https://fonts.googleapis.com/css?family=Montserrat|Quicksand');

*{
    font-family: 'quicksand',Arial, Helvetica, sans-serif;
    box-sizing: border-box;
}

body{
    background:#fff;
}


.form-modal{
    position:relative;
    width:450px;
    height:auto;
    margin-top:4em;
    left:50%;
    transform:translateX(-50%);
    background:#fff;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow:0 3px 20px 0px rgba(0, 0, 0, 0.1)
}

.form-modal button{
    cursor: pointer;
    position: relative;
    text-transform: capitalize;
    font-size:1em;
    z-index: 2;
    outline: none;
    background:#fff;
    transition:0.2s;
}

.form-modal .btn{
    border-radius: 20px;
    border:none;
    font-weight: bold;
    font-size:1.2em;
    padding:0.8em 1em 0.8em 1em!important;
    transition:0.5s;
    border:1px solid #ebebeb;
    margin-bottom:0.5em;
    margin-top:0.5em;
}

.form-modal .login , .form-modal .signup{
    background:#57b846;
    color:#fff;
}

.form-modal .login:hover , .form-modal .signup:hover{
    background:#222;
}

.form-toggle{
    position: relative;
    width:100%;
    height:auto;
}

.form-toggle button{
    width:50%;
    float:left;
    padding:1.5em;
    margin-bottom:1.5em;
    border:none;
    transition: 0.2s;
    font-size:1.1em;
    font-weight: bold;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}

.form-toggle button:nth-child(1){
    border-bottom-right-radius: 20px;
}

.form-toggle button:nth-child(2){
    border-bottom-left-radius: 20px;
}

#login-toggle{
    background:#57b846;
    color:#ffff;
}

.form-modal form{
    position: relative;
    width:90%;
    height:auto;
    left:50%;
    transform:translateX(-50%);  
}

#login-form , #signup-form{
    position:relative;
    width:100%;
    height:auto;
    padding-bottom:1em;
}

#signup-form{
    display: none;
}


#login-form button , #signup-form button{
    width:100%;
    margin-top:0.5em;
    padding:0.6em;
}

.form-modal input{
    position: relative;
    width:100%;
    font-size:1em;
    padding:1.2em 1.7em 1.2em 1.7em;
    margin-top:0.6em;
    margin-bottom:0.6em;
    border-radius: 20px;
    border:none;
    background:#ebebeb;
    outline:none;
    font-weight: bold;
    transition:0.4s;
}

.form-modal input:focus , .form-modal input:active{
    transform:scaleX(1.02);
}

.form-modal input::-webkit-input-placeholder{
    color:#222;
}


.form-modal p{
    font-size:16px;
    font-weight: bold;
}

.form-modal p a{
    color:#57b846;
    text-decoration: none;
    transition:0.2s;
}

.form-modal p a:hover{
    color:#222;
}


.form-modal i {
    position: absolute;
    left:10%;
    top:50%;
    transform:translateX(-10%) translateY(-50%); 
}

.fa-google{
    color:#dd4b39;
}

.fa-linkedin{
    color:#3b5998;
}

.fa-windows{
    color:#0072c6;
}

.-box-sd-effect:hover{
    box-shadow: 0 4px 8px hsla(210,2%,84%,.2);
}

@media only screen and (max-width:500px){
    .form-modal{
        width:100%;
    }
}

@media only screen and (max-width:400px){
    i{
        display: none!important;
    }
}



.sposta_p{

    float: right;
    text-align: right;
    padding-top: 0.25em;
}



.info{
  clear: both;
    float: left;
    padding-top: 0.755em;
}


.btn-default{

     border-color: transparent;

}



</style>

</head>
<body>
  <div style="width: 100%" class="container theme-showcase" role="main">
    <h4>Benvenuto: {{ Auth::user()->name }}</h4><h6><button><a href="{{ url('/logouts') }}">Logout</a></button></h6>
    <div class="page-header" style="padding-bottom: 0px; margin: 0px 0 0px;">
    </div>
    <div style="height: 36px;">
      <input type="text" placeholder="Search..." name="" id="myInputTextField" style="float: left; height: 100%; width: 50%; border-color: transparent; border-right-color: #ccc" >         
      <select id="multiple-checkboxes" multiple="multiple" style="float: right; height: 100%; width: 50%; ">
        <optgroup label="Filtra stato" id="stato_filtro" >
          <option value="1">Aperto</option>
          <option value="2">In elaborazione</option>
          <option value="3">Chiuso</option>
        </optgroup>
      </select>
    </div>
    <table class="table table-striped table-bordered table-hover dt-responsive" id="table_ticket">
      <thead>
        <tr>
          <th>#</th>
          <th>Data</th>
          <th>Recapiti cliente</th>
          <th>Categoria</th>
          <th>Oggetto</th>
          <th>Stato</th>
          <th>Agente</th>
          <th>Dettagli</th>
          <th>Priorità</th>
          <th>Impostazioni</th>
        </tr>
      </thead>
      <tbody id="tbody_table1">
      </tbody>
    </table>
    <div class="paging"></div>
    <div id="open_menu"></div>
    <div id="massimo_numero"></div>
  </div>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle" style="float: left; width: 50%">Conversazione</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="float: right;">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div style="height: 160px; overflow: auto;" id="scrolling_chat">
            <div class="chat-log" style="padding: 0px 0 0px;">
              <div id="appendi_chat">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Messaggio*:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_button">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- script jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- script datatable-->
  <script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
  <script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>
  <script type="text/javascript">
   


//integrare agenda nelle impostazioni, dal ticket prendersi tutti i dati come event, e appenderli direttamente nell'agenda, quando si clicca sull'ingranaggio si aprirà un altro popup che aprira un modal all'interno del quale verrà mostrata l'agenda e quindi cliccando verrà appesa, portarsi dentro un blade a parte l'agenda, con include

//fare get_ticket_o con query mysql senza eloquent

// chiudere ticket dopo 15 giorni di stato in elaborazione, o chiudiamo solo amministrazione o tutti, parlare con roberto
    
//attiva il set interval


     




//funzioni di partenza
start_function();
function start_function(){
get_name_operator_filter();
}

//qui ottengo subito i ticket con i filtri di partenza
function get_name_operator_filter(){
  $.get('/get_name_operator_filter',{},
    function(data){
      if (data=="") { //se ad accedere è un agente ottiene i filtri 1,2
        $('#multiple-checkboxes option[value=' + 1 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 2 + ']').attr('selected', true);
        ottieni_ticket([1,2]);
        $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
      });
      }else{ //se ad accedere è un amministratore ottiene i filtri 1,2,4
        $("#multiple-checkboxes").append("<optgroup label='Filtra operatore' id='operatore_filtro'>");    
        var res=jQuery.parseJSON(data);
        for (var i = 0; i < res.length; i++) {
          $("#operatore_filtro").append("<option value="+res[i].id +">"+res[i].name+"</option>");
        }
        $("#multiple-checkboxes").append("</optgroup>");
        $('#multiple-checkboxes option[value=' + 1 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 2 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 4 + ']').attr('selected', true);
        ottieni_ticket([1,2],[4]);
        $(document).ready(function() {
          $('#multiple-checkboxes').multiselect({
            includeSelectAllOption: true,
          });
        });
      }
    });
}


    

//passa dal change solo quando viene cambiato il multiselect option per ottenere i ticket
var operatore_filtro=[];
var stato_filtro=[];
$("#multiple-checkboxes").change(function() {
  operatore_filtro=[];
  stato_filtro=[];
  $('#multiple-checkboxes').find("option:selected").each(function(){
    var label = $(this).parent().attr("label");
    id = $(this).parent().attr("id");
    if (id=="stato_filtro") {
      stato_filtro.push($(this).val());
    }else{
      operatore_filtro.push($(this).val());
    }
  });
  ottieni_ticket(stato_filtro, operatore_filtro)
});


//formattazione della data italiana
function pad(num) {
  return ("0"+num).slice(-2);
}

function formatDate(date) {
  var d = new Date(date);
  var month = '' + (d.getMonth() + 1);
  var day = '' + d.getDate();
  var year = d.getFullYear();
  var hours = d.getHours();
  var minutes = d.getMinutes();
  var time = pad(hours) + ":" + pad(minutes);
  if (month.length < 2) 
    month = '0' + month;
  if (day.length < 2) 
    day = '0' + day;
  return day+"-"+month+"-"+year+" "+time;

}
  
//funzione principale per ottenere i ticket con i filtri divisi per stato e operatore
function ottieni_ticket(stato_filtro, operatore_filtro){ 
  $("#table_ticket").DataTable().destroy();
  $("#tbody_table1").empty();
  $.get('/get_ticket_o', {stato_filtro:stato_filtro, operatore_filtro:operatore_filtro},
    function(data){
      var res=jQuery.parseJSON(data);
      var aperto;
      var elaborazione;
      var chiuso;
      var stato;
      var data_apertura;
      var data_elaborazione;
      var data_chiusura;
      var data_stato;
      var button_closure;
      var orario_ticket;
      var tipo_bottone;
      var triage;
      var oTable;
      for (var i = 0; i < res.ticket_salon.length; i++) {
       var id=i+1;
       if (res.ticket_salon[i].stato==1) {
        aperto="Aperto"
        stato=aperto;
        data_apertura="<small class='text-muted'>"+formatDate(res.ticket_salon[i].data)+"</small>";
        data_stato=data_apertura;
        button_closure="<button class='test btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'><i class='glyphicon glyphicon-cog'></i></button>";
      } else if (res.ticket_salon[i].stato==2){
        elaborazione="Elaborazione"
        stato=elaborazione;
        data_elaborazione="<small class='text-muted'>"+formatDate(res.ticket_salon[i].data_elaborazione)+"</small>";
        data_stato=data_elaborazione;
        button_closure="<button class='test btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'><i class='glyphicon glyphicon-cog'></i></button>";
      } else if (res.ticket_salon[i].stato==3){
        chiuso="Chiuso"
        stato=chiuso;
        data_chiusura="<small class='text-muted'>"+formatDate(res.ticket_salon[i].data_elaborazione)+"</small>";
        data_stato=data_chiusura;
        tipo_bottone="success";
        triage="Completato";
        $(".test").addClass("prova");
        button_closure="<button class='test btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' disabled><i class='glyphicon glyphicon-cog'></i></button>";
      } 
      orario_ticket=res.ticket_salon[i].ore_mancanti;
      if (orario_ticket<='24:00:00') {
        tipo_bottone="info";
        triage="bassa";
      } else if(orario_ticket>='24:00:01' && orario_ticket<='48:00:00'){
        tipo_bottone="warning";
        triage="media";
      } else if(orario_ticket>='48:00:01'){
        tipo_bottone="danger";
        triage="alta";
      } 
      $("#tbody_table1").append("<tr><td><a><b>"+id+"</b></a><br></td><td>"+res.ticket_salon[i].ore_mancanti+" fa<br><small class='text-muted'>"+formatDate(res.ticket_salon[i].data)+"</small></td><td><small class='text-muted'>Email: "+res.ticket_salon[i].indirizzo_email+"</small><br><small class='text-muted'>Recapito: "+res.ticket_salon[i].recapito_telefonico+"</small></td><td>"+res.ticket_salon[i].scegli_categoria+"</td><td>"+res.ticket_salon[i].oggetto+"<br><small class='text-muted'>"+res.ticket_salon[i].messaggio+"</small></td><td>"+stato+"<br>"+data_stato+"</td><td>"+res.ticket_salon[i].op_name+"</td><td><div class='notification'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter' onclick='mostra_chat_ottieni_ticket(\""+res.ticket_salon[i].id+"\",\""+res.ticket_salon[i].messaggio+"\",\""+stato+"\")'><i class='glyphicon glyphicon-search'></i></button><span class='badge notify_"+res.ticket_salon[i].id+"'>"+res.ticket_salon[i].count_sent_message_salon+"</span></div></td><td><h4><span class='label label-"+tipo_bottone+"'>"+triage+"</span></h4></td><td><div class='btn-group pull-right' >"+button_closure+"<ul class='dropdown-menu' role='menu'><li onclick='chiudi_ticket(\""+res.ticket_salon[i].id+"\")'><a href='#'><i class='glyphicon glyphicon-remove-circle'></i> Chiudi ticket</a></li></ul></div></td></tr>");
    }
    $('#table_ticket').DataTable({
      "sDom": 'rt<"info"i><"sposta_p"p>',
      "paging": true,
      "destroy": true
    });
    oTable = $('#table_ticket').DataTable();    
    $('#myInputTextField').keyup(function(){
     oTable.search( $(this).val() ).draw();
   })
  });
}

 

//mostra solo la chat quando viene cliccato il bottone lente di ingrandimento
function mostra_chat_ottieni_ticket(id_ticket, messaggio_apertura, stato){
  $(".notify_"+id_ticket).empty();
  $(".notify_"+id_ticket).append("0");
  $("#send_button").remove();
  $.get('/read_message_operator', {id_ticket:id_ticket, is_read:1}, 
    function(data){
      content_mostra_chat(id_ticket, messaggio_apertura);
    });
  $("#close_button").after("<button type='button' data-loading-text='Please wait...'  id='send_button' class='btn btn-primary' onclick='invia_mess_chat(\""+id_ticket+"\",\""+messaggio_apertura+"\")'>Invia</button>");
  if (stato=="Chiuso") {
    document.getElementById("send_button").disabled = true;
  } 
}  


//invia il messaggio nella chat
function invia_mess_chat(id_ticket, messaggio_apertura){
  if ($("#message-text").val()=="") {
    alert("campo obbligatorio*");
  }else{
    $("#send_button").empty();
    $("#send_button").append('Loading...');
    $.get('/send_chat_ticket_operator', {id_ticket:id_ticket, who:1, messaggio:$("#message-text").val()},
      function(data){
        var res=jQuery.parseJSON(data);
        //se è aperto lo stato del ticket lo cambia in 2=elaborazione e mostra l'ultimo messaggio inviato in chat e rimette i filtri di partenza ottenendo i ticket
        if (res.stato_ticket[0].stato==1) {  
          $.get('/edit_request', {id_ticket:id_ticket, stato:2}, 
            function(data){
        $("#send_button").empty();
        $("#send_button").append('Invia');
        content_mostra_chat(id_ticket, messaggio_apertura);
        $('#multiple-checkboxes option[value=' + 1 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 2 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 4 + ']').attr('selected', true);
        ottieni_ticket([1,2],[4]);
            });
        //se è in elaborazione o chiuso lo stato del ticket  mostra l'ultimo messaggio inviato in chat
        } else {
        $("#send_button").empty();
        $("#send_button").append('Invia');
        content_mostra_chat(id_ticket, messaggio_apertura);
        }
      });
  }
}



//è la funzione principale che permette al mostra_Chat_ottieni_ticket e invia messaggi di vedere i messaggi della chat
function content_mostra_chat(id_ticket, messaggio_apertura){
  $("#appendi_chat").empty();
  $("#appendi_chat").append("<div class='chat-log__item'><h3 class='chat-log__author'>Salone <small></small></h3><div class='chat-log__message'>"+messaggio_apertura+"</div></div>");
  $.get('/show_chat_ticket_operator', {id_ticket:id_ticket},
    function(data){
      var res=jQuery.parseJSON(data);
      var id_operatori=[];
      var id_autore=[];
      var data_ticket=[];
      for (var i = 0; i < res.ticket_salon.length; i++) {
        //mi legge tutti i messaggi della chat del salone
        if (res.ticket_salon[i].who==0) {
          $("#appendi_chat").append("<div class='chat-log__item'><h3 class='chat-log__author'>Salone <small>"+formatDate(res.ticket_salon[i].data)+"</small></h3><div class='chat-log__message'>"+res.ticket_salon[i].messaggio+"</div></div>");
        } else if (res.ticket_salon[i].who==1){
          //mi legge tutti i messaggi della chat del operatore
          var id_author=i+1;
          $("#appendi_chat").append("<div class='chat-log__item chat-log__item--own'><h3 class='chat-log__author' id='id_author_"+id_author+"'></h3><div class='chat-log__message'>"+res.ticket_salon[i].messaggio+"</div></div>");
          id_operatori.push(res.ticket_salon[i].operatore);
          id_autore.push(id_author);
          data_ticket.push(formatDate(res.ticket_salon[i].data));
        }
      }
      append_name_operator(id_operatori, id_autore, data_ticket);
    });
}


// mi permette di appende i nomi dei solo operatori nella chat dei messaggi
function append_name_operator(id_operatori, id_autore, data_ticket){
  $.get('/get_name_operator',{id_operatori:id_operatori},
    function (data){
      var res=jQuery.parseJSON(data);
      for (var i = 0; i < res.length; i++) {
        $("#id_author_"+id_autore[i]).append(res[i].name+": <small>"+data_ticket[i]+"</small>");
      }
      $('#scrolling_chat').stop().animate({
        scrollTop: $('#scrolling_chat')[0].scrollHeight
      }, 0);
      $("#message-text").val("");
    });
}


//chiude il ticket e aggiorna lo stato e ottieni ticket quando cambia lo stato per aggiornare i ticket con i filtri
function chiudi_ticket(id_ticket){
  $.get('/edit_request', {id_ticket:id_ticket, stato:3}, 
    function(data){
      $('#multiple-checkboxes option[value=' + 1 + ']').attr('selected', true);
      $('#multiple-checkboxes option[value=' + 2 + ']').attr('selected', true);
      $('#multiple-checkboxes option[value=' + 4 + ']').attr('selected', true);
      ottieni_ticket([1,2],[4]);
    });    
}

  </script>

</body>
</html>