<!DOCTYPE html>
<html>
<head>
  
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/test_ticket/css/layout_operatore.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
  <!-- stylesheet agenda -->


<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/core@4.4.0/main.min.css">
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.css">
<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.css">

<!-- stylesheet agenda -->
<!-- datepicker -->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
<!-- datepicker -->
  


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

/*style agenda*/
#calendar {
  max-width: 900px;
  margin: 0 auto;
}


#external-events {
  float: left;
  width: 150px;
  padding: 0 10px;
  border: 1px solid #ccc;
  background: #eee;
  text-align: left;
}

#external-events h4 {
  font-size: 16px;
  margin-top: 0;
  padding-top: 1em;
}

#external-events .fc-event {
  margin: 10px 0;
  cursor: pointer;
}

#external-events p {
  margin: 1.5em 0;
  font-size: 11px;
  color: #666;
}

#external-events p input {
  margin: 0;
  vertical-align: middle;
}
/*style agenda*/

/*style datepicker*/
.datepicker > div { display: inherit; }


/*table partecipanti classi*/



 /*#table_lesson  {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

#table_lesson   caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

 #table_lesson  tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

 #table_lesson   th,
 #table_lesson  td {
  padding: .625em;
  text-align: center;
}

  #table_lesson  th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
   #table_lesson  {
    border: 0;
  }

   #table_lesson  caption {
    font-size: 1.3em;
  }
  
   #table_lesson  thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
   #table_lesson  tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
   #table_lesson  td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
   #table_lesson  td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
   #table_lesson  td:last-child {
    border-bottom: 0;
  }
}*/
/*tavola colori crea classi*/



/*whatsapp*/
/*.my-input.v-input .v-input__slot {
  border-radius: 100px;
}
.chat-background {
  background-color: #ECE5DD !important
}
.chat-header {
  background-color: #075E54 !important
}
.chip-chat {
  background-color: #DCF8C6 !important
}
*/

</style>

</head>
<body>
  <div style="width: 100%" class="container theme-showcase" role="main">
    <div style="display: flex; flex-wrap: nowrap;">
      <h4 style="flex-grow: 1">Ciao {{ Auth::user()->name }}</h4> 
      <h6 style="text-align: right;margin-right: 5px;"><button><a onclick="$('#calendar').show();$('#report_chart').hide();">Back</a></button></h6>
      <h6 style="text-align: right;"><button><a href="{{ url('/logouts') }}">Logout</a></button></h6>
    </div>  
    <div id="append_button_agenda" style="display: ;display: flex; flex-wrap: nowrap;">
      <span style="flex: 1 1 0px;margin-right: 5px;" class="btn btn-primary back" onclick="actived_class()">Classi</span>
      <span style="flex: 1 1 0px;margin-right: 5px;" class="btn btn-primary back" onclick="postpone()">Posponi</span>
      <span style="flex: 1 1 0px;margin-right: 5px;" class="btn btn-primary back" onclick="archive()">Archivio</span>
      <span style="flex: 1 1 0px" class="btn btn-primary back" onclick="report()">Report</span>
      <span style="flex: 1 1 0px;display: none" class="btn btn-primary col-md-12 go" onclick="open_agenda_from_ticket()">vai Agenda</span>
    </div>
    
    <div class="page-header" style="padding-bottom: 0px; margin: 0px 0 0px;">
    </div>
    <!-- home_page -->
    <div id="home_page" style="display: none">
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
  </div>
  <!-- chat conversation -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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

  <!-- start calendar -->
  <div class="wrapper" style="display: flex;
    width: 100%; margin-top: 10px;">
    <nav id="left-pane" style="
     display: block; ">
      <div id='external-events' style="display: none">
        <p>
          <strong>Lista config rch fatti</strong>
        </p>
        <div id='appointments_robi'>
        </div>
      </div>
    </nav>
    <div id='calendar' style="visibility:; max-width: none;padding-left: 15px;padding-right: 15px;" >
    </div>
  </div>
  <div style="width: 100%" class="container theme-showcase" role="main">
    <h4>Recapiti assistenza: <a href="https://api.whatsapp.com/send?phone=+393921006516" target="_blank">+393921006516, </a><a href="https://api.whatsapp.com/send?phone=+393921012221" target="_blank">+393921012221, </a><a href="https://api.whatsapp.com/send?phone=+393921012221" target="_blank">+393920993799, </a><a href="tel:+390912738439">0912738439, </a><a href="tel:+393516604070">+393516604070</a></h4>
  </div>

    <!-- Modal agenda-->
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Info appuntamento</h4>
        </div>
        <div class="modal-body">
          <div class="form-group" id="add_report">
            <label for="nota">Nota</label>
            <textarea type="text" class="form-control" id="nota" placeholder="Nota" style="margin-bottom: 15px;"></textarea>
            <select id="subcategory_new_ticket" class="form-control w-100" name="subcategory">
              <optgroup label="Software gestionale">
                <option value="" selected="selected" disabled="">Scegli problema</option>
                <option value="1_Login Credenziali">Login Credenziali</option>
                <option value="1_Malfunzionamento Cassa">Malfunzionamento Cassa</option>
                <option value="1_Problemi con appuntamenti">Problemi con appuntamenti</option>
                <option value="1_Turni collaboratori">Turni collaboratori</option>
                <option value="1_Spese">Spese</option>
                <option value="1_Magazzino">Magazzino</option>
                <option value="1_Marketing/Operazioni pianificate">Marketing/Operazioni pianificate</option>
                <option value="1_Modifica ricevute/promozioni">Modifica ricevute/promozioni</option>
                <option value="1_Rinnovo scadenza software">Rinnovo scadenza software</option> 
                <option value="1_Promozioni,Gift, abbonamenti, pacchetti…">Promozioni,Gift, abbonamenti, pacchetti…</option>
                <option value="1_Malfunzionamento Report">Malfunzionamento Report</option>
                <option value="1_Errore di Corrispettivi">Errore di Corrispettivi</option>
                <option value="1_Altro">Altro</option>
                <option value="1_Informazioni">Informazioni</option>
              </optgroup>
              <optgroup label="Customer App">
                <option value="3_Login Credenziali">Login Credenziali</option>
                <option value="3_Problemi con appuntamenti">Problemi con appuntamenti</option>
                <option value="3_Inserimento logo">Inserimento logo</option>
                <option value="3_Inserimento servizi">Inserimento servizi</option>
                <option value="3_Inserimento prodotti">Inserimento prodotti</option>
                <option value="3_Collegamento stripe">Collegamento stripe</option>
                <option value="3_Promozioni">Promozioni </option>
                <option value="3_Malfunzionamento Chat">Malfunzionamento Chat</option>
                <option value="3_Malfunzionamento Notifiche">Malfunzionamento Notifiche</option>
                <option value="3_Codice cliente">Codice cliente</option>
                <option value="3_Invita amico">Invita amico</option>
                <option value="3_Informazioni">Informazioni</option>
              </optgroup>
              <optgroup label="Stampanti">
                <option value="4_Rch print f Malfunzionamento">Rch print f Malfunzionamento</option>
                <option value="4_Rch print f Collegamento gestionale">Rch print f Collegamento gestionale</option>
                <option value="4_Epson fp81 Malfunzionamento">Epson fp81 Malfunzionamento</option>
                <option value="4_Epson fp81 Collegamento gestionale">Epson fp81 Collegamento gestionale</option>
                <option value="4_Custom Malfunzionamento">Custom Malfunzionamento</option>
                <option value="4_Custom Collegamento gestionale">Custom Collegamento gestionale</option>
                <option value="4_Epson M30 Malfunzionamento">Epson M30 Malfunzionamento</option>
                <option value="4_Epson M30 Collegamento gestionale">Epson M30 Collegamento gestionale</option>
                <option value="4_Epson M30 Gestione fiche">Epson M30 Gestione fiche</option>
                <option value="4_Informazioni">Informazioni </option>
              </optgroup>
              <optgroup label="Scontrino elettronico">
                <option value="5_Login Credenziali">Login Credenziali</option>
                <option value="5_Malfunzionamento">Malfunzionamento</option>
              </optgroup>
              <optgroup label="App trico">
                <option value="6_Login Credenziali">Login Credenziali</option>
                <option value="6_Streaming microcamera">Streaming microcamera</option>
                <option value="6_Microcamera danneggiata">Microcamera danneggiata</option>
                <option value="6_Invio storico">Invio storico</option>
                <option value="6_Marketing">Marketing</option>
                <option value="6_Informazioni">Informazioni</option>
              </optgroup>
            </select>
          </div>

          <div id="add_paste" style="display: none">
            <label for="nota">Copia appuntamento/classe</label>
            <div class="form-group">
              <select id="choose_paste" class="form-control" style="">
                <option value="0">Appuntamento</option>
                <option value="1">Classe</option>
              </select>
            </div>
            <div class="" style="display: flex; flex-wrap: nowrap;">
              <input type="date" class="form-control" name="date_start" id="paste_date_start" style="margin-right: 15px;height: auto;">
              <input type="date" class="form-control" name="date_end" id="paste_date_end" style="margin-right: 15px;height: auto;">
              <select id="paste_day" class="form-control" style="" multiple>
                <option value="Monday">lunedì</option>
                <option value="Tuesday">martedì</option>
                <option value="Wednesday">mercoledì</option>
                <option value="Thursday">giovedì</option>
                <option value="Friday">venerdì</option>
                <option value="Saturday">sabato</option>
                <option value="Sunday">domenica</option>
              </select>
              <!-- <button class="btn btn-primary" onclick="paste_appointment()">Incolla</button> -->
            </div>

          </div>

          <div id="form_class" style="display: none">
            <!-- <div class="form-group">
              <input type="text" class="form-control" id="lesson_title" placeholder="Titolo classe*"/>
            </div> -->

            <div class="form-group">
              <select name="data_start" id="lesson_company" class="form-control">
                <option value="0" disabled="" selected="">Seleziona multinazionale*</option>
                <option value="good">Good</option>
                <option value="zone">Zone</option>
                <option value="alfaparf">Alfaparf</option>
                <option value="indola">Indola</option>
                <option value="skp">Skp</option>
                <option value="brelil">Brelil</option>
                <option value="hairyou">Hairyou</option>
                <option value="Pagest">Pagest good</option>
                <option value="DigitalSpaceSbs">Pagest zone</option>
              </select>
            </div>

            <!-- <div class="form-group">
              <select name="data_start" id="lesson_author" class="form-control">
                <option value="1" disabled="" selected="">Seleziona operatore*</option>
                <option value="darione">Darione</option>
                <option value="dario">Dario</option>
                <option value="sara">Sara</option>
                <option value="mauro">Mauro</option>
                <option value="Roberto_g">Roberto G.</option>
                <option value="roberto_p">Roberto P.</option>
              </select>
            </div> -->

            <!-- <div class="form-group">
              <input type="text" class="form-control" id="lesson_description" placeholder="Descrizione classe*"/>
            </div> -->

            <div class="form-group">
              <input type="date" class="form-control" id="day"/>
            </div>

            <!-- <div class="form-group">
              <select name="data_start" id="color" class="form-control">
                <option value="1" disabled="" selected="">Seleziona colore classe*</option>
                <option value="red">Rosso</option>
                <option value="blue">Blu</option>
                <option value="green">Verde</option>
                <option value="brown">Marrone</option>
                <option value="gray">Grigio</option>
                <option value="violet">Viola</option>
                <option value="orange">Arancione</option>
              </select>
            </div> -->

            <div class="form-group">
              <select name="data_start" id="image" class="form-control">
                <option value="0" disabled="" selected="">Seleziona immagine classe*</option>
                <option value="1">Formazione 1</option>
                <option value="2">Formazione 2</option>
                <option value="3">Formazione 3</option>
                <option value="4">Promozioni</option>
                <option value="5">Customer app</option>
                <option value="6">Marketing</option>
                <option value="7">Report</option>
                <option value="8">Formazione light</option>
              </select>
            </div>

            <div class="form-group">
              <select name="data_start" id="data_start" class="form-control">
                <option value="0" disabled="" selected="">Seleziona orario inizio*</option>
                <option value="9:00">9:00</option>
                <option value="9:30">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
              </select>
            </div>

            <div class="form-group">
              <select name="data_end" id="data_end" class="form-control">
                <option value="0" disabled="" selected="">Seleziona orario fine*</option>
                <option value="9:00">9:00</option>
                <option value="9:30">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
              </select>
            </div>

            <!-- <div class="form-group">
              <input type="text" class="form-control" id="id_classe" placeholder="Id classe*"/>
            </div> -->

          </div>

          <!-- <div class="form-group">
            <label for="report">Report</label>
            <textarea type="text" class="form-control" id="report" placeholder="Report"></textarea>
          </div> -->
        </div>
        <div class="modal-footer" id="modal_event">
        </div>
      </div>
    </div>
  </div>

    <!-- Modal datepicker-->
  <div class="modal fade" id="myModal2" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="position: absolute;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal2_title"></h4>
        </div>
        <div class="modal-body" id="modal2">
          
        </div>
        <div class="modal-footer" id="modal_event2">
        </div>
      </div>
    </div>
  </div>


  <!-- Modal crea lezione-->
  <div class="modal fade" id="myModal3" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Classi attive</h4>
          <button class="btn btn-primary" onclick="filter_close()">Filtra chiusi</button>
          <button class="btn btn-primary" onclick="get_count_partecipanti()">Filtra aperti</button>
        </div>
        <div class="modal-body" id="modal3">
        <table id="table_lesson" class="table table-striped table-bordered table-hover dt-responsive">

          <thead>
            <tr>
              <th>id</th>
              <th>company</th>
              <th>autore</th>
              <th>title</th>
              <th>partecipanti</th>
              <th>data</th>
              <th>comandi</th>
              <th>stato</th>
            </tr>
          </thead>
          <tbody id="append_lesson_partecipant">

          </tbody>
        </table>

        </div>
        <div class="modal-footer" id="modal_event3">
        </div>
      </div>
    </div>
  </div>
  <!-- end calendar -->

    


     <!-- Modal list partecipanti-->
  <div class="modal fade" id="myModal4" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Partecipanti</h4>
        </div>
        <div class="modal-body" id="modal4">
        <table id="table_list_partecipant" class="table table-striped table-bordered table-hover dt-responsive">

          <thead>
            <tr>
              <th>ditta</th>
              <th>recapito</th>
              <th>email</th>
            </tr>
          </thead>
          <tbody id="append_list_partecipant">

          </tbody>
        </table>
          
          
        </div>
        <div class="modal-footer" id="modal_event4">
        </div>
      </div>
    </div>
  </div>
 


 <!-- Modal list partecipanti-->
  <div class="modal fade" id="myModal5" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Appuntamenti</h4>
        </div>
        <div class="modal-body" id="modal5">
          <div class="input-group mb-3" style="display: flex;margin-bottom: 15px;">
            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" id="search_archive">
            <div class="input-group-append">
              <button id="button_search" class="btn btn-outline-secondary" type="button" onclick="get_data_appointments()">Search</button>
            </div>
          </div>
        <table id="table_data_appointments" class="table table-striped table-bordered table-hover dt-responsive" style="table-layout: fixed; width: 100%">


          <thead>
            <tr>
              <th>titolo</th>
              <th>start</th>
              <th>end</th>
              <th>stato</th>
              <th>operatore</th>

            </tr>
          </thead>
          <tbody id="append_data_appointments">

          </tbody>
        </table>
          
          
        </div>
        <div class="modal-footer" id="modal_event5">
        </div>
      </div>
    </div>
  </div>



  <!-- Modal whatsapp-->
  <div class="modal fade" id="myModal6" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Appuntamenti</h4>
        </div>
        <div class="modal-body" id="modal6">

          <iframe id="iframe_Id" src="https://www.w3schools.com/" title="W3Schools Free Online Web Tutorials">
          </iframe>

          <button onclick="ciao()">prova</button>


          <!-- <div id="app">
            <v-app id="inspire">
              <div class="text-xs-center">
                <v-menu
                min-width = 300
                top
                v-model="menu"
                :close-on-click="false"
                :close-on-content-click="false"
                :nudge-top="60"
                offset-x
                >
                <template v-slot:activator="{ on }">
                  <v-fab-transition>
                    <v-btn
                    v-model="fab"
                    v-on="on"
                    color='green darken-1'
                    @click="fab = !fab; menu = false"
                    dark
                    fixed
                    bottom
                    right
                    fab
                    >
                    <v-icon>comment</v-icon>
                    <v-icon>close</v-icon>
                  </v-btn>
                </v-fab-transition>
              </template>
              <v-card>
                <v-list dark class="chat-header">
                  <v-list-tile>
                    <v-list-tile-content>
                      <v-list-tile-title>Contact me</v-list-tile-title>
                    </v-list-tile-content>
                    <v-list-tile-action>
                      <v-btn
                      icon
                      @click="fab = !fab; menu = false"
                      >
                      <v-icon>cancel</v-icon>
                    </v-btn>
                  </v-list-tile-action>
                </v-list-tile>
              </v-list>
              <v-divider></v-divider>
              <v-container class="chat-background">
                <v-layout row wrap >
                  <v-flex class="text-xs-right" xs12 mb-4>
                    <v-chip class="chip-chat ">
                      Hello, how can we help you? <v-icon right>done_all</v-icon>
                    </v-chip>
                  </v-flex>
                  <v-flex xs10>
                    <v-text-field
                    single-line
                    color="teal"
                    class="my-input"
                    v-model="text"
                    outline
                    ></v-text-field>
                  </v-flex>
                  <v-flex xs2>
                    <v-btn
                    large
                    class="teal--text"
                    icon
                    @click="fab = !fab; menu = false"
                    :href="apilink"
                    target="_blank"
                    >
                    <v-icon large>send</v-icon>
                  </v-btn>
                </v-flex>
              </v-layout>  
            </v-container>
          </v-card>  
        </v-menu>   
      </div>
    </v-app>
  </div> -->
          
          
        </div>
        <div class="modal-footer" id="modal_event6">
        </div>
      </div>
    </div>
  </div>
 
    

<!-- script jquery sempre prima del bootstrap-->
<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- script datatable-->
<script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>
<!-- script agenda -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/core@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/resource-common@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/resource-daygrid@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/resource-timegrid@4.4.0/main.min.js"></script>
<!-- script agenda -->
<!-- datepicker -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<!-- datepicker -->
<!-- Whatsapp -->
<script src="https://cdn.jsdelivr.net/npm/babel-polyfill/dist/polyfill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@1.5.6/dist/vuetify.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- Whatsapp -->

<!-- highcharts -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!-- highcharts -->

  @include('ticket.agenda')

  @include('ticket.report')
  <script type="text/javascript" >

//modificare resource id sia da codice che da db in modo che non metti creato da, modificato da, nella stessa colonna di colui che agisce
//modal problema partecipanti classi
   
// chiudere ticket dopo 15 giorni di stato in elaborazione, chiudiamo solo amministrazione, parlare con roberto, è semplice da applicare mettere in ottieni ticket il numero di gg se è >15 parte la funzione chiudi ticket, vedere se roberto è d'accordo



    
//funzioni di partenza
start_function();
function start_function(){
get_name_operator_filter();

}

//qui ottengo subito i ticket con i filtri di partenza
function get_name_operator_filter(stato_filtro, operatore_filtro){





  $.get('/get_name_operator_filter',{},
    function(data){

      if (data=="") { //se ad accedere è un agente
        //se i filtri sono vuoti apri di default dei filtri
        if (stato_filtro ==undefined && operatore_filtro==undefined) {
          console.log("agente");
          
        $('#multiple-checkboxes option[value=' + 1 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 2 + ']').attr('selected', true);
          ottieni_ticket([1,2], [],"accesso_agente");

          //se i filtri NON sono vuoti metti i filtri cambiati con il multiselect option
        } else{
          
          ottieni_ticket(stato_filtro, operatore_filtro,"accesso_agente");
        }

      }else{ //se ad accedere è un amministratore
        console.log("amministratore");
        $("#append_button_agenda").show();
        $("#operatore_filtro").empty();
        $("#multiple-checkboxes").append("<optgroup label='Filtra operatore' id='operatore_filtro'>");    
        var res=jQuery.parseJSON(data);
        for (var i = 0; i < res.length; i++) {
          $("#operatore_filtro").append("<option value="+res[i].id +">"+res[i].name+"</option>");
        }
        $("#multiple-checkboxes").append("</optgroup>");

        //se i filtri sono vuoti apri di default dei filtri
        if (stato_filtro ==undefined && operatore_filtro==undefined) {

         
        $('#multiple-checkboxes option[value=' + 1 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 2 + ']').attr('selected', true);
        $('#multiple-checkboxes option[value=' + 4 + ']').attr('selected', true);
        ottieni_ticket([1,2],[4],"accesso_amministratore");

        //se i filtri NON sono vuoti metti i filtri cambiati con il multiselect option
        }else{
      
          ottieni_ticket(stato_filtro, operatore_filtro, "accesso_amministratore");

        }

      }

      $(document).ready(function() {
          $('#multiple-checkboxes').multiselect({
            includeSelectAllOption: true,
          });
        });

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
  get_name_operator_filter(stato_filtro, operatore_filtro);
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
function ottieni_ticket(stato_filtro, operatore_filtro, tipo_accesso){



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
      var button_report;
      var orario_ticket;
      var tipo_bottone;
      var triage;
      var oTable;
      var button_agenda;
      var messaggio;

      for (var i = 0; i < res.ticket_salon.length; i++) {
       var id=i+1;
       if (res.ticket_salon[i].stato==1) {
        aperto="Aperto"
        stato=aperto;
        data_apertura="<small class='text-muted'>"+formatDate(res.ticket_salon[i].data)+"</small>";
        data_stato=data_apertura;
        button_closure="<button class='test btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'><i class='glyphicon glyphicon-cog'></i></button>";
        button_report="";
      } else if (res.ticket_salon[i].stato==2){
        elaborazione="Elaborazione"
        stato=elaborazione;
        data_elaborazione="<small class='text-muted'>"+formatDate(res.ticket_salon[i].data_elaborazione)+"</small>";
        data_stato=data_elaborazione;
        button_closure="<button class='test btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown'><i class='glyphicon glyphicon-cog'></i></button>";
        button_report="";
      } else if (res.ticket_salon[i].stato==3){
        chiuso="Chiuso"
        stato=chiuso;
        data_chiusura="<small class='text-muted'>"+formatDate(res.ticket_salon[i].data_elaborazione)+"</small>";
        data_stato=data_chiusura;
        tipo_bottone="success";
        triage="Completato";
        button_closure="<button class='test btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' disabled><i class='glyphicon glyphicon-cog'></i></button>";
        messaggio_report=res.ticket_salon[i].report_closure.replace(/'/g, "");
       messaggio_report=messaggio_report.replace(/"/g, "");

        button_report="<a href='#' onclick='open_report_ticket(\""+messaggio_report+"\")'>Report</a>";
        
      } 

      orario_ticket=res.ticket_salon[i].ore_mancanti;
      
      if (orario_ticket<='24:00:00' && res.ticket_salon[i].stato!=3) {
        tipo_bottone="info";
        triage="bassa";
      } else if(orario_ticket>='24:00:01' && orario_ticket<='48:00:00' && res.ticket_salon[i].stato!=3){
        tipo_bottone="warning";
        triage="media";
      } else if(orario_ticket>='48:00:01' && res.ticket_salon[i].stato!=3){
        tipo_bottone="danger";
        triage="alta";
      }

 

   
      if (tipo_accesso=="accesso_amministratore") {

        button_agenda="<li onclick='open_agenda_from_ticket(\""+res.ticket_salon[i].id+"\")'><a href='#'><i class='glyphicon glyphicon-calendar'></i> Prendi appuntamento</a></li>";


      } else{
        button_agenda="";

      }


      messaggio=res.ticket_salon[i].messaggio.replace(/'/g, "");
       messaggio=messaggio.replace(/"/g, "");

 


      $("#tbody_table1").append("<tr><td><a><b>"+id+"</b></a><br></td><td>"+res.ticket_salon[i].ore_mancanti+" fa<br><small class='text-muted'>"+formatDate(res.ticket_salon[i].data)+"</small></td><td><small class='text-muted'>Email: "+res.ticket_salon[i].indirizzo_email+"</small><br><small class='text-muted'>Recapito: "+res.ticket_salon[i].recapito_telefonico+"</small></td><td>"+res.ticket_salon[i].scegli_categoria+"</td><td>"+res.ticket_salon[i].oggetto+"<br><small class='text-muted'>"+res.ticket_salon[i].messaggio+"</small></td><td>"+stato+"<br>"+data_stato+"<br>"+button_report+"</td><td>"+res.ticket_salon[i].op_name+"</td><td><div class='notification'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter' onclick='mostra_chat_ottieni_ticket(\""+res.ticket_salon[i].id+"\",\""+messaggio+"\",\""+stato+"\")'><i class='glyphicon glyphicon-search'></i></button><span class='badge notify_"+res.ticket_salon[i].id+"'>"+res.ticket_salon[i].count_sent_message_salon+"</span></div></td><td><h4><span class='label label-"+tipo_bottone+"'>"+triage+"</span></h4></td><td><div class='btn-group pull-right' >"+button_closure+"<ul class='dropdown-menu' role='menu'>"+button_agenda+"<li onclick='chiudi_ticket(\""+res.ticket_salon[i].id+"\")'><a href='#'><i class='glyphicon glyphicon-remove-circle'></i> Chiudi ticket</a></li></ul></div></td></tr>");
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
        get_name_operator_filter();
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
function chiudi_ticket(id_ticket, close_ticket_agenda){


   
  


  //chiusura ticket tramite bottone pannello
  if (close_ticket_agenda==undefined) {


    if (confirm("Are you sure?")) {

      $.get('/edit_request', {id_ticket:id_ticket, stato:3}, 
        function(data){
          get_name_operator_filter();
       }); 

    }
    return false;

    //chiusura ticket tramite agenda
  }else{

     if ($("#report").val()=="") {
      alert("Inserisci report!");

    }else{

      if (confirm("Are you sure?")) {
          back_home_page();
        $.get('/edit_request', {id_ticket:id_ticket, stato:3, report:$("#report").val()}, 
          function(data){

         
           get_name_operator_filter();
           delete_event_agenda(id_ticket,1);
           
         }); 
      }
      return false;

    }
    

  }

}

// function chiudi_ticket_amministratore(id_ticket, stato, circuito_op){



// let d = new Date(data_inizio); // creates a Date Object using the clients current time

// let [hours,minutes,seconds] = orario_ticket.split(':'); // using ES6 destructuring

// d.setHours(+hours); // set the hours, using implicit type coercion
// d.setMinutes(minutes); // you can pass Number or String, it doesn't really matter
// d.setSeconds(seconds);


// console.log(d.toString());

// $.get('/edit_request_administrator', {id_ticket:id_ticket, stato:stato, circuito_op:circuito_op}, 
//         function(data){

//           console.log(data);
          
//        }); 

// }

function open_report_ticket(report){



    if (report=="") {

      alert("Vedi chat");
    } else{

      alert(report);
    }
      
      

}



// new Vue({
//   el: '#app',
//   data: () => ({
//     fab: false,
//     fav: true,
//     menu: false,
//     message: false,
//     hints: true,
//     phone: '+393921006516',
//     text: "",
//     apilink: ""
//   }),
//   watch: {
//     text(val) {
//       this.apilink = 'http://';
//       this.apilink += this.isMobile() ? 'api' : 'web';
//       this.apilink += '.whatsapp.com/send?phone=' + this.phone + '&text=' + encodeURI(this.text);
//     }
//   },
//   created: function () {
//     this.apilink = 'http://';
//     this.apilink += this.isMobile() ? 'api' : 'web';
//     this.apilink += '.whatsapp.com/send?phone=' + this.phone + '&text=' + encodeURI("Hello!");
//   },
//   methods: {
//     isMobile() {
//       var check = false;
//       (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
//       return check;
//     }
//   }
// });


function ciao(){

document.getElementById("iframe_Id").contentWindow.document.getElementById("sidebarCollapse").addEventListener("click", false);
}




// function sendMessage (message) {





//   window.InputEvent = window.Event || window.InputEvent;

//   var event = new InputEvent('input', {
//     bubbles: true
//   });

//   var textbox = document.querySelector('div._2S1VP');

//   textbox.textContent = message;
//   textbox.dispatchEvent(event);

//   document.querySelector("button._35EW6").click();
// }


function paste_appointment(start_time, end_time, rendering, resource_id){

  var choose_paste=$("#choose_paste").val();

  var day_select=[];
  day_select=$("#paste_day").val();
  var startDate=$("#paste_date_start").val();
  var endDate=$("#paste_date_end").val();
  var note=$("#nota").val();

  start_time=start_time.split("T")[1].split(".000")[0];
  end_time=end_time.split("T")[1].split(".000")[0];

  var from = new Date(startDate);
  var to = new Date(endDate);
  var DAYS = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  var dateArray = [];
  var d = from;
  while (d <= to) {
    var month = '' + (d.getMonth() + 1);
    var day = '' + d.getDate();
    var year = d.getFullYear();
    var full_date=year+"-"+month+"-"+day;
    dateArray.push({"name_days":DAYS[d.getDay()],"date":full_date,"start_time":full_date+" "+start_time, "end_time":full_date+" "+end_time, "nota":note, "rendering":rendering,"resource_id":resource_id});
    d = new Date(d.getTime() + (24 * 60 * 60 * 1000));
  }

  var filter_date = dateArray.filter(v => day_select.includes(v.name_days));
  
  $.get("paste_appointment_ticket",{filter_date:filter_date, choose_paste:choose_paste},
    function(data){

      console.log(data);
      $('#myModal').modal('hide');

    });

}



  </script>

</body>
</html>