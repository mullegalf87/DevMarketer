<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home | Tool salone</title>
  <!-- style -->
  <link rel="stylesheet" href="/test_ticket/css/layout_salone.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- style -->
  <!-- style range stars feedback -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel='stylesheet' href='https://codepen.io/depy/pen/LaXVEK.css'>
  <!-- style range stars feedback -->
</head>
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

  /*tutorial description*/
  /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}




/*form styles*/
#msform {
  width: 100%;
  margin: 50px auto;
  text-align: center;
  position: relative;
}
#msform fieldset {
  background: white;
  border: 0 none;
  border-radius: 3px;
  box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
  padding: 20px 30px;
  box-sizing: border-box;
  width: 80%;
  margin: 0 10%;
  
  /*stacking fieldsets above each other*/
  position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
  display: none;
}
/*inputs*/
#msform input, #msform textarea {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
  box-sizing: border-box;
  font-family: montserrat;
  color: white;
  font-size: 13px;
}
/*buttons*/
#msform .action-button {
  width: 100px;
  background: #27AE60;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 1px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
  box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
  font-size: 15px;
  text-transform: uppercase;
  color: #2C3E50;
  margin-bottom: 10px;
}
.fs-subtitle {
  font-weight: normal;
  font-size: 13px;
  color: #666;
  margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  /*CSS counters to number the steps*/
  counter-reset: step;
}
#progressbar li {
  list-style-type: none;
  color: white;
  text-transform: uppercase;
  font-size: 9px;
  width: 33.33%;
  float: left;
  position: relative;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 20px;
  line-height: 20px;
  display: block;
  font-size: 10px;
  color: #333;
  background: white;
  border-radius: 3px;
  margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
  content: '';
  width: 100%;
  height: 2px;
  background: white;
  position: absolute;
  left: -50%;
  top: 9px;
  z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
  /*connector not needed before the first step*/
  content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
  background: #337ab7;
  color: white;
}



.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}


/*modal carousel*/

.modal-lg {
  max-width: 900px;
}

.carousel-caption{

  position: initial;
    left: auto;
    right: auto;
    padding-bottom: 0px;
    color: black;
}


/*style scegli categoria per cell*/

.navbar-nav {
     margin: 0px; 
}

@media (max-width: 767px){
.navbar-nav .open .dropdown-menu {
    position: sticky;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    -webkit-box-shadow: none;
    box-shadow: none;

}
}


/*style range star feedback*/
/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:2.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}


/*size on order device*/
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {

#table_ticket{

      width: 0px!important;
}

}

/* Small devices (portrait (vertical) tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {


}

/* Medium devices (landscape (horizontal)  tablets, 768px and up) */
@media only screen and (min-width: 768px) {

} 

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {

} 

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
 
  
}


</style>
<body onload="checkCookie()">

  <div id="form_ticket" class="container">
    <div class="page-header">
      <h4 class="button_apri_ticket">
      <span class="label label-blue" onclick="torna_ticket()">Torna indietro</span>
    </h4>
    <h2>APRI UN TICKET</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Ragione sociale</label>
          <input type="text" class="form-control" placeholder="Ragione sociale*" id="ragione_sociale" name="Ragione sociale"  required="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="agente">Agente</label><br>
          <select id="agente" class="form-control">
            <option selected="" disabled="">Scegli agente</option> 
            <option value="4" selected="">Amministrazione</option> 
          </select> 
        </div>
      </div>
    </div>
    <div class="row">  
      <div class="col-md-6">
        <div class="form-group">
          <label for="phone">Recapito telefonico</label>
          <input type="tel" class="form-control" name="Recapito telefonico" id="phone" placeholder="Recapito telefonico*"  required="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="email">Indirizzo Email</label>
          <input type="email" class="form-control" name="Indirizzo email" id="email" placeholder="Indirizzo email*"  required="">
        </div>
      </div>
    </div>
    <div class="row">  
      <div class="col-md-6">
        <div class="form-group">
          <label for="scegli_categoria">Scegli categoria</label>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="change_cat">Scegli categoria* <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="trigger right-caret">Panema Cash</a>
                    <ul class="dropdown-menu sub-menu">
                      <li>
                        <a class="trigger right-caret">Impostazioni</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Creare collaboratori','setting', 3, 'collaboratore_1')">Collaboratori</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Creare turni collaboratori','setting',4,'collaboratore_2')">Creare turni collaboratori</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Creare e modificare servizi','setting',1, 'servizi_1')">Servizi</a></li>
                          <li><a href="#" onclick="tutorial_faq('Creare e modificare prodotti','setting',2, 'prodotti_1')">Prodotti</a></li>
                          <li><a href="#" onclick="tutorial_faq('Gestione info cliente','setting',9, 'infocliente_1')">Gestione info cliente</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Ricevute</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Fare ricevute','cash', 1,'ricevute_1')">Fare ricevute</a></li>
                          <li><a href="#" onclick="tutorial_faq('Generare un insoluto','cash',8, 'ricevute_2')">Generare un insoluto</a></li>
                          <li><a href="#" onclick="tutorial_faq('Cambiare metodo di pagamento','receipt',1,'ricevute_3')">Cambiare metodo di pagamento</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Agenda</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Prendere appuntamenti','agenda', 1,'agenda_1')">Prendere appuntamenti</a></li>
                          <li><a href="#" onclick="tutorial_faq('Gestione appuntamenti','agenda', 2,'agenda_2')">Gestione appuntamenti</a></li>
                          <li><a href="#" onclick="tutorial_faq('Visualizza appuntamenti','agenda', 3,'agenda_3')">Visualizza appuntamenti</a></li>
                          <li><a href="#" onclick="tutorial_faq('Creazione note','agenda', 4,'agenda_4')">Creazione note</a></li>
                          <li><a href="#" onclick="tutorial_faq('Creazione pausa e permessi','agenda', 5,'agenda_5')">Creazione pausa e permessi</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Crazione turni operatore','agenda', 6,'agenda_6')">Creazione turni operatore</a></li>
                          <li><a href="#" onclick="tutorial_faq('Creazione e modifica cabina','setting', 5,'agenda_7')">Creazione e modifica cabina</a></li>
                          <li><a href="#" onclick="tutorial_faq('Prendere appuntamenti in cabina','agenda', 7,'agenda_8')">Prendere appuntamenti in cabina</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Magazzino</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Caricare prodotto magazzino','ware', 1,'magazzino_1')">Caricare prodotto magazzino</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Scarico prodotti magazzino','ware', 2 ,'magazzino_2')">Scarico prodotti magazzino</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Rerport valore magazzino','ware', 3,'magazzino_3')">Rerport valore magazzino</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Report</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Spese</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Inserire spese','expense', 1,'spese_1')">Inserire spese</a></li>
                          <li><a href="#" onclick="tutorial_faq('Modificare e pagare una spesa','expense', 2,'spese_2')">Modificare e pagare una spesa</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Marketing</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Creare filtro','marketing', 1, 'marketing_1')">Creare filtro</a></li>
                          <li><a href="#" onclick="tutorial_faq('Invio globale','marketing', 2,'marketing_2')">Invio globale</a></li>
                          <li><a href="#" onclick="tutorial_faq('Operazioni pianificate','marketing', 3, 'marketing_3')">Operazioni pianificate</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Promozioni</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="tutorial_faq('Creare Giftcard','cash', 2, 'gift_1')">Creare Giftcard</a></li>
                          <li><a href="#" onclick="tutorial_faq('Utilizzare Giftcard','cash', 10, 'gift_2' )">Utilizzare Giftcard</a></li>
                          <li><a href="#" onclick="tutorial_faq('Regalare Giftcard','cash', 13, 'gift_3')">Regalare Giftcard</a></li>
                          <li><a href="#" onclick="tutorial_faq('Precaricare Giftcard','promo', 1, 'gift_4')">Precaricare Giftcard</a></li>
                          <li><a href="#" onclick="tutorial_faq('Creare Abbonamento','cash', 3, 'abbonamento_1')">Creare Abbonamento</a></li>
                          <li><a href="#" onclick="tutorial_faq('Utilizzare Abbonamento','cash', 11, 'abbonamento_2')">Utilizzare Abbonamento</a></li>
                          <li><a href="#" onclick="tutorial_faq('Precaricare Abbonamento','promo', 2, 'abbonamento_3')">Precaricare Abbonamento</a></li>
                          <li><a href="#" onclick="tutorial_faq('Creare Pacchetto','cash', 4,'pacchetto_1')">Creare Pacchetto</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Utilizzare Pacchetto','cash', 12,'pacchetto_2')">Utilizzare Pacchetto</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Precaricare Pacchetto','promo', 3,'pacchetto_3')">Precaricare Pacchetto</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Creare prepagata','cash', 7, 'prepagato_1')">Prepagata</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Creare infinity card','cash', 5, 'infinity_1')">Infinity card</a></li>
                          <li><a href="#"  onclick="tutorial_faq('Creare piano accumulo','cash', 6,'accumulo_1')">Piano accumulo</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a class="trigger right-caret">Registratori di cassa/fiche</a>
                    <ul class="dropdown-menu sub-menu">
                      <li>
                        <a class="trigger right-caret">Rch print f</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#" onclick="download_faq('Manuale Rch print f')">Download manuale</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                          <li><a href="#">Collegamento gestionale</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Epson fp81</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Segnala un problema</a></li>
                          <li><a href="#">Collegamento gestionale</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Custom</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Segnala un problema</a></li>
                          <li><a href="#">Collegamento gestionale</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Epson M30</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Gestione fiche</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                          <li><a href="#">Collegamento gestionale</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a class="trigger right-caret">Customer app</a>
                    <ul class="dropdown-menu sub-menu">
                      <li>
                        <a class="trigger right-caret">Lato salone</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Inserire logo</a></li>
                          <li><a href="#">Inserire servizi</a></li>
                          <li><a href="#">Inserire prodotti</a></li>
                          <li><a href="#">Inserire listino</a></li>
                          <li><a href="#">Inserire collaboratori</a></li>
                          <li><a href="#">Gestione agenda</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="trigger right-caret">Lato cliente</a>
                        <ul class="dropdown-menu sub-menu">
                          <li><a href="#">Come e dove scaricare customer app</a></li>
                          <li><a href="#">Come registrarsi</a></li>
                          <li><a href="#">Prendere appuntamento</a></li>
                          <li><a href="#">Controllare promozioni attive</a></li>
                          <li><a href="#">Ordinare prodotti</a></li>
                          <li><a href="#">Richiedi formazione</a></li>
                          <li><a href="#">Segnala un problema</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="oggetto">Oggetto</label>
          <input type="text" class="form-control" name="Oggetto" id="oggetto" placeholder="Oggetto*"  required="">
        </div>
      </div>
    </div>
    <div id="link_faq">
    </div>
    <br>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="scegli_categoria">Messaggio</label>
          <textarea name="Messaggio" id="message" class="form-control" rows="10" placeholder="Messaggio*"  required=""></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <input type="checkbox" name="terms" id="privacy" required> Autorizzo il trattamento dei miei dati personali ai sensi della legge 196/03 sulla privacy*.
        </div>
      </div>
    </div>
    <h4 class="button_apri_ticket">
      <button class="btn btn-primary" id="btn-load" data-loading-text="Please wait..." onclick="invia_richiesta()">Invia</button>
    </h4>
  </div>
  <div class="container theme-showcase" role="main">
    <div class="page-header">
      <h4 class="button_apri_ticket">
        <span class="label label-blue" onclick="apri_ticket()">Apri un ticket</span>
      </h4>
      <h2>ASSISTENZA VIA TICKET</h2>
    </div>
    <table class="table table-striped table-bordered table-hover dt-responsive" id="table_ticket">
      <thead>
        <tr>
          <th>Apri</th>
          <th>Data</th>
          <th>Categoria</th>
          <th>Oggetto</th>
          <th>Stato</th>
          <th>Dettagli</th>
        </tr>
      </thead>
      <tbody id="tbody_table1">
      </tbody>
    </table>
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
          <div style="overflow: auto; height: 160px" id="scrolling_chat">
            <div class="chat-log" style="padding: 0px 0 0px;" >
              <div id="appendi_chat" >
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
  <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" id="tutorial_title_carousel"></h4>
          </div>
          <div class="modal-body">
            <div id="videotutorial_carousel">
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner" role="listbox" id="tutorial_carousel">
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="modal-footer">
            <form class="form-inline">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal feedback-->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Valutazione assistenza</h4>
        </div>
        <div class="modal-body" id="modal2">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="commenta">Commenta</label>
                <textarea name="Commenta" id="feedback_text" class="form-control" rows="5" placeholder="Rilascia commento*" required=""></textarea>
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <label for="stelle" style="display: block;text-align: center;">Stelle</label>
       
                <div class='rating-stars text-center'>
                  <ul id='stars'>
                    <li class='star' title='Poor' data-value='1'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Fair' data-value='2'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Good' data-value='3'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Excellent' data-value='4'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='WOW!!!' data-value='5'>
                      <i class='fa fa-star fa-fw'></i>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer" id="append_button_send">
        </div>
      </div>
    </div>
  </div>



  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js"></script>
  <!-- script jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- script datatable-->
  <script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
  <script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
 
  @include('ticket.tutorial')

  

  <script type="text/javascript">

//da cell il primo ticket lasciarlo aperto toggle
//quando sta per chiudere far partire alert: ricordati di salvare la pagina tra i preferiti per controllare lo stato del ticket.

//5)cambiare url basic laravel e metterne uno cliccabile per whatsapp, oppure mettere un dominio anche di altervista o blogspot se non vuole comprarlo.
//6)attivare l'autoresponder con il nunovo link





var array_categoria=[];
var user;




//permette di ottenere il cookie da passare quando viene aperto un ticket
 //document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
 user=getCookie("username");
  if (user != "") {
    
  
      
      start_function();

    
    
  } else {
     $.get("/get_cookie_random",{},
     function(assigned_cookie){
      
      user = assigned_cookie;
      start_function();
     
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }

     })   

     
  }
}


//funzioni di partenza
function start_function(){
  ottieni_ticket();
  // read_name_agent();
}


//permettono di effettuare il multiselect-scegli categoria quandi apri il ticket
$(function(){
  $(".dropdown-menu > li > a.trigger").on("click",function(e){
    var current=$(this).next();
    var grandparent=$(this).parent().parent();
    if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
      $(this).toggleClass('right-caret left-caret');
    grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
    grandparent.find(".sub-menu:visible").not(current).hide();
    var categoria = $(this).text();
    array_categoria.push(categoria);
    current.toggle();
    e.stopPropagation();
  });
  $(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
    var sottocategoria = $(this).text();
    array_categoria.push(sottocategoria);
    var root=$(this).closest('.dropdown');
    root.find('.left-caret').toggleClass('right-caret left-caret');
    root.find('.sub-menu:visible').hide();
    $("#change_cat").replaceWith("<a id='change_cat'>Scegli categoria* <span class='caret'></span></a>");
    document.getElementById("change_cat").innerHTML+=" "+
    "<a href='#' onclick='removeRow(this)'>"+sottocategoria+" x </a>";
    $(".dropdown").removeClass('open');
  });
  // start_function();
});

//permette di rimuovere la categoria scelta quando apri il ticket
function removeRow (input) {
  $("#link_faq").empty();
  var someStr=input.childNodes[0];
  var str=jQuery(someStr).text().replace(/[',x]+/g, '');
  var valueToRemove = str.replace(/\s*$/,'');

  array_categoria = array_categoria.filter(item => item !== valueToRemove);
  input.childNodes[0].remove();
  array_categoria=[];
  $("#change_cat").replaceWith("<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' id='change_cat'>Scegli categoria* <span class='caret'></span></a>");
}

//è la funzione di apertura del form del ticket
function apri_ticket(){

  user=user.replace(/['"]+/g, '');

 
  $.get("get_value_form_ticket", {cookie:user},
    function(data){

      var res=jQuery.parseJSON(data);



      if (res.length==0) {

     
      } else{

         $("#ragione_sociale").val(res[0].ragione_sociale);
        $("#phone").val(res[0].recapito_telefonico);
        $("#email").val(res[0].indirizzo_email);

      }
       

      

    });

  $("#form_ticket").show();
  $(".theme-showcase").hide();
}

//legge i nomi degli agenti associati all'id_salon visibili quando apri il ticket nel select option
function read_name_agent(){
  $.get('/read_name_agent',{},
    function (data){
      var res=jQuery.parseJSON(data);
      for (var i = 0; i < res.read_name_agent.length; i++) {
        $('#agente').append('<option value='+res.read_name_agent[i].id+' selected="selected">'+res.read_name_agent[i].name+'</option>');
      }
    });
}

//funzione che torna indietro nella home
function torna_ticket(){
  $("#form_ticket").hide();
  $(".theme-showcase").show();
  ottieni_ticket();
}

//funzione che invia la richiesta del ticket
function invia_richiesta(){
  if ($("input").val()=="" || array_categoria.length==0 || $("textarea").val()=="" || $("#privacy").is(":not(:checked)")) {
    alert("*Campi obbligatori")
  } else{
    $("#btn-load").empty();
    $("#btn-load").append('Loading...');
    user=user.replace(/['"]+/g, '');
    
    $.get('/copia_send_request', {ragione_sociale:$("#ragione_sociale").val(), 
      circuito_op:$("#agente").val(), op_name:$("#agente").find("option:selected").text(),recapito_telefonico:$("#phone").val(), 
      indirizzo_email:$("#email").val(), scegli_categoria:array_categoria.toString(),
      oggetto:$("#oggetto").val(), messaggio:$("#message").val(), stato:"1", cookie:user},
      function(data_res_ticket){

     

       $("#btn-load").empty();
       $("#btn-load").append('Invia');
       var message="Grazie per averci contattato, la ricontatteremo il prima possibile."
       invia_mess_chat_request(data_res_ticket, message, $("#agente").val());
       array_categoria=[];
       $("#change_cat").text("Scegli categoria*");
       $("#change_cat").append("<span class='caret'></span>")
       $("#oggetto").val("");
       $("#message").val("");
       $("#change_cat").replaceWith("<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' id='change_cat'>Scegli categoria* <span class='caret'></span></a>");
       $("#link_faq").empty();
     });
  }
}

//quando apri il ticket il salone riceve nella chat un messaggio di cortesia
function invia_mess_chat_request(id_ticket, message, operatore){
  $.get('/send_chat_ticket_salon_from_request', {id_ticket:id_ticket, who:1, messaggio:message, operatore:operatore}, 
    function(data){
      torna_ticket();
    });
}


//funzioni di formattazione della data,  non funziona con safari, colmato la lacuna con la libreria moment
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




//funzione principale per ottenere i ticket
function ottieni_ticket(){

  var qnt_messaggi=[];
  $("#table_ticket").DataTable().destroy();
  $("#tbody_table1").empty();
  user=user.replace(/['"]+/g, '');
  $.get('/copia_get_ticket_s', {cookie:user},
    function(data){

      var res=jQuery.parseJSON(data);
      

      if (res.ticket_salon!="vuoto") {
      var aperto;
      var elaborazione;
      var chiuso;
      var stato;
      var data_apertura;
      var data_elaborazione;
      var data_chiusura;
      var button_feed;
      var data_stato;
      var messaggio;
      for (var i = 0; i < res.ticket_salon.length; i++) {
       var id=i+1;
       if (res.ticket_salon[i].stato==1) {
        aperto="Aperto";
        stato=aperto;
        data_apertura="<small class='text-muted'>"+moment(res.ticket_salon[i].data).format('DD/MM/YYYY  hh:mm:ss')+"</small>";
        data_stato=data_apertura;
        qnt_messaggi.push(0);
        button_feed="";
      } else if (res.ticket_salon[i].stato==2){
        elaborazione="In elaborazione"
        stato=elaborazione;
        data_elaborazione="<small class='text-muted'>"+moment(res.ticket_salon[i].data_elaborazione).format('DD/MM/YYYY hh:mm:ss')+"</small>";
        data_stato=data_elaborazione;
        button_feed="";
      } else if (res.ticket_salon[i].stato==3){
        chiuso="Chiuso"
        stato=chiuso;
        data_chiusura="<small class='text-muted'>"+moment(res.ticket_salon[i].data_elaborazione).format('DD/MM/YYYY hh:mm:ss')+"</small>";
        data_stato=data_chiusura;

        if (res.ticket_salon[i].feedback_user=="" && res.ticket_salon[i].stars_feedback=="") {
          button_feed="<a href='#' data-toggle='modal' data-target='#myModal2' onclick='open_feed_ticket(\""+res.ticket_salon[i].id+"\")' id='disabled_button_feed'>Rilascia valutazione assistenza</a>";
          
        }else{

            button_feed="";

        }

        
      }

       messaggio=res.ticket_salon[i].messaggio.replace(/'/g, "");
       messaggio=messaggio.replace(/"/g, "");

     
      $("#tbody_table1").append("<tr><td><a><b>"+id+"</b></a><br></td><td>"+moment(res.ticket_salon[i].data).format('DD/MM/YYYY hh:mm:ss')+"</td><td>"+res.ticket_salon[i].scegli_categoria+"</td><td>"+res.ticket_salon[i].oggetto+"<br><small class='text-muted'>"+messaggio+"</small></td><td>"+stato+"<br>"+data_stato+"<br>"+button_feed+"</td><td><div class='notification'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter' onclick='mostra_chat_ottieni_ticket(\""+res.ticket_salon[i].id+"\",\""+messaggio+"\",\""+stato+"\")'><i class='glyphicon glyphicon-search'></i></button><span class='badge notify_"+res.ticket_salon[i].id+"'>"+res.ticket_salon[i].count_sent_message_operator+"</span></div></td></tr>");


    }
  }else{


  } 

    $('#table_ticket').DataTable({
      "dom": '<"top"p>rt<"bottom"i>',
      "paging": true,
      "destroy": true
      

    });


 
    $('.sorting_1 a b').click();

 




  });
}



//mostra solo la chat quando viene cliccato il bottone lente di ingrandimento
function mostra_chat_ottieni_ticket(id_ticket, messaggio_apertura, stato){
  $(".notify_"+id_ticket).empty();
  $(".notify_"+id_ticket).append("0");
  $("#appendi_chat").empty();
  $("#send_button").remove();
  $.get('/read_message_salon', {id_ticket:id_ticket, is_read:1}, 
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
    $.get('/send_chat_ticket_salon', {id_ticket:id_ticket, who:0, messaggio:$("#message-text").val(),operatore:0},
      function (data){
        
        $("#send_button").empty();
        $("#send_button").append('Invia');
        content_mostra_chat(id_ticket, messaggio_apertura);
        $("#message-text").val("");
      });
  }
}

//è la funzione principale che permette al mostra_Chat_ottieni_ticket e invia messaggi di vedere i messaggi della chat
function content_mostra_chat(id_ticket, messaggio_apertura){
  $("#appendi_chat").empty();
  $("#appendi_chat").append("<div class='chat-log__item'><h3 class='chat-log__author'>Salone <small></small></h3><div class='chat-log__message'>"+messaggio_apertura+"</div></div>");
  $.get('/show_chat_ticket_salon', {id_ticket:id_ticket},
    function(data){
      var res=jQuery.parseJSON(data);
      for (var i = 0; i < res.ticket_salon.length; i++) {
        if (res.ticket_salon[i].who==0) {
          $("#appendi_chat").append("<div class='chat-log__item'><h3 class='chat-log__author'>Salone <small>"+formatDate(res.ticket_salon[i].data)+"</small></h3><div class='chat-log__message'>"+res.ticket_salon[i].messaggio+"</div></div>");
        } else if (res.ticket_salon[i].who==1){
          $("#appendi_chat").append("<div class='chat-log__item chat-log__item--own'><h3 class='chat-log__author'>Operatore <small>"+formatDate(res.ticket_salon[i].data)+"</small></h3><div class='chat-log__message'>"+res.ticket_salon[i].messaggio+"</div></div>");
        }
      }
      $('#scrolling_chat').stop().animate({
        scrollTop: $('#scrolling_chat')[0].scrollHeight
      }, 0);
    });
}

function open_feed_ticket(id_ticket){
$("#append_button_send").empty();

$("#append_button_send").append("<form class='form-inline'><button type='button' class='btn btn-primary'  onclick='send_feed_ticket(\""+id_ticket+"\")' >Invia</button></form>");

$('#stars li').on('click', function(){
    $("#append_button_send").empty();
   
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
      
      
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }

    $("#append_button_send").append("<form class='form-inline'><button type='button' class='btn btn-primary'  onclick='send_feed_ticket(\""+id_ticket+"\",\""+onStar+"\")' >Invia</button></form>");


  });
 
 

  

}

function send_feed_ticket(id_ticket, onStar){

  var commento=$("#feedback_text").val();

  if (commento=="" || onStar==undefined) {

    alert("campi obbligatori")

  } else{

    alert("Grazie, per qualunque problema non esitate a contattarci! Ricorda di mettere questa pagina web tra i preferiti per tenere sotto controllo lo stato dei tuoi ticket!");

     $.get("/send_feed_ticket",{id_ticket:id_ticket, commento:commento, onStar:onStar},
    function(data){

      
      $("#disabled_button_feed").replaceWith("");
      $("#myModal2 .close").click();


    })

   


  }
 
  
}


  



  </script>



</body>
</html>