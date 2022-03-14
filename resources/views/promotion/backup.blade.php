<!DOCTYPE html>
<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://developers.facebook.com/schema/">
<head>
  <title>promotion</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- tag facebook -->
  <meta property="og:title" content="promotion">
  <meta property="og:description" content="promotion è il primo simulatore al mondo di comizi virtuali dove gli utenti dibattono su argomenti di vario genere e si contendono la vittoria...e guai a chi dice che si tratta di un semplice forum!">
   <!-- <meta property="og:description" content="promotion is the first simulator in the world of virtual rallies where users debate on topics of various kinds and compete for victory ... and woe to those who say that it is a simple forum!"> -->
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.promotion.tk/promotion" />
  <meta property="og:image" content="http://www.promotion.tk/uploads/logo/logo_small_icon_only.png">
 <!-- tag twitter -->
  <!-- <meta name="twitter:card" content="summary"> -->
  <!-- <meta name="twitter:image" content="https://i.ibb.co/hZnWTGB/logo-small-icon-only.png"> -->
  <!-- <meta name="twitter:image" content="http://www.promotion.tk/uploads/logo/logo_small_icon_only_twitter.jpeg">
 -->

  <!-- favicon -->
  <link rel="icon" href="uploads/logo/favicon_small.png" type="image/png">
  <!-- jquery 3.5 jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <!-- cookie popup jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  
  <!-- countdown -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js'></script>

  <!-- bootstrap 4.5 bootstrap-->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  
  <!-- datatable bootstrap -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
  <link rel="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->
  <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
  
  <!-- input file bootstrap-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
  
  <!-- boxicons -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
  
  <!-- tether -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  
  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/e07be0b1c4.js"></script>
  
  <!-- highcharts -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <!-- <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->

  <!-- upload xls -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.1/xlsx.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/json2html/1.3.0/json2html.min.js"></script>

  <!-- imagecompressor -->
  <script type="text/javascript" src="js/bookmap/image-compressor.js"></script>
  
</head>

<style type="text/css">

  nav .btn-outline-light:hover {
    color: #333;
  }

  [onClick] {
  cursor:pointer;
  }

  /*h1, h2, h3, h4{
    white-space: nowrap;
  }*/

  /*same height*/
  .flex-container{
    margin: 0 auto;
    display: -webkit-flex; /* Safari */     
    display: flex; /* Standard syntax */
  }
  .flex-container .column{
    padding: 10px;
    -webkit-flex: 1; /* Safari */
    -ms-flex: 1; /* IE 10 */
    flex: 1; /* Standard syntax */
  }

  /*style language*/
  /* -------------- CSS --------------- */

  #lang-switch img {
    width: 25px;
    height: 25px;
    opacity: 0.5;
    transition: all .5s;
    margin: auto 3px;
    margin-left: 0;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  #lang-switch img:hover {
    cursor: pointer;
    opacity: 1;
  }

  .it_lang,
  .en_lang {
    display: none;
    transition: display .5s;
  }

  /* Language */
  .active-lang {
    display: flex !important;
    transition: display .5s;
  }

  .active-flag {
    transition: all .5s;
    opacity: 1 !important;
  }

  /*text_cut*/
  .text_cut{
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }
  /*loading*/
</style>

<body onload="checkCookie()">

  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black;">
    <a class="navbar-brand" onclick="change_vis('home')" style="color: white">
      <!-- insert logo -->
      Home
    </a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active display_lang" style="margin: auto;">
          <div id="lang-switch" style="display: flex;flex-wrap: nowrap;">
            <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/Italy-Flag.png" class="it">
            <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/United-Kingdom-flag.png" class="en">
          </div>
        </li>
        @if( auth()->guard('users_promotion')->check() )
        <!-- <li class="nav-item active">
          <a class="nav-link" onclick="change_vis('promo')">Promozioni <span class="sr-only">(current)</span></a>
        </li> -->
        @endif 
        <li class="nav-item active">
          @if( auth()->guard('users_promotion')->check() )
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">@lang('promotion/lang.welcome') {{ auth()->guard('users_promotion')->user()->nickname }}</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" onclick="change_vis('profile')">@lang('promotion/lang.profile')</a>
              <a class="dropdown-item" onclick="logout_promotion()">Logout</a>
            </div>
          </li>
          @else
          <a class="nav-link" onclick="change_vis('login')">Login/Facebook <span class="sr-only">(current)</span></a>
          @endif  
        </li>
      </ul>
    </div>
  </nav>
  <!-- home -->
  <div id="home" class="page" style="display: none;padding-top: 3.5rem;">
    <div class="jumbotron">
      <div class="container">

        <div style="display:flex">
          <div class="" style="padding: 0;margin: 10px 0px;position: relative">
            <!-- <img alt="Avatar 1" src="/uploads/logo/logo_small.png" style="height: 50px;" /> -->
          </div>
        </div>
        <p class="lead">Titolo piattaforma</p><!-- #LANG -->
        <hr class="my-4">
        <p>Sottotitolo piattaforma</p><!-- #LANG -->
        @if( auth()->guard('users_promotion')->check() )
        <p class="lead">
          <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('promo')">Accedi agli step</a><!-- #LANG -->
        </p>
        @endif 
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 flex-container">
          <div class="col mb-3 card column">
            <div class="card-body">
              <h4><i class='bx bx-directions mr-2'></i> Introduzione alla piattaforma</h4><!-- #LANG -->
              <p>La piattaforma mira ad aiutare l'esercente nella fase di acquisizione e consolidamento dei clienti, al fine di massimizzare i profitti.(accedi al video pubblicitario)</p><!-- #LANG -->
              <p class="lead">
                <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('argument')"> Accedi</a><!-- #LANG -->
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 flex-container">
          <div class="col mb-3 card column">
            <div class="card-body">
              <h4><i class='bx bx-line-chart mr-2'></i>Analizza i dati aziendali e KPI</h4><!-- #LANG -->
              <p>Analizzando i costi e benefici derivanti dalle scelte aziendali si possono rilevare punti di forza e debolezza.(qui creare tabella interattive inserendo dati di costi, qnt lavoratori e prezzo di vendita dei servizi e mostrare grafici statisti, chiusura lungo periodo e massimizzazione profitto) SEMPRE PER STEP</p><!-- #LANG -->
              <p class="lead">
                <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('analyse')"> Accedi</a><!-- #LANG -->
              </p>
            </div>
          </div> 
        </div>
        <div class="col-md-6 flex-container">
          <div class="col mb-3 card column">
            <div class="card-body">
              <h4><i class='bx bxs-pencil mr-2'></i>Crea le promozioni</h4><!-- #LANG -->
              <p>Le debolezze aziendali si combattono attraverso strumenti strategici di incentivazione orientati ai clienti.(qui scegli il layout da personalizzare e inserisci scadenza promo, tetto massimo persone che si possono registrare per la promozione,può anche non mettere limiti, e i link di riferimento dei social resi visibili nel layout, e scelta se pagare sms o email per l'invio del link generato. Andare nel carrello e far pagare customizzazione promo e/o modalità invio)</p><!-- #LANG -->
              <p class="lead">
                <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('promo')"> Accedi</a><!-- #LANG -->
              </p>
            </div>
          </div>
        </div>  
        <div class="col-md-6 flex-container">
          <div class="col mb-3 card column">
            <div class="card-body">
              <h4><i class='bx bxs-megaphone mr-2'></i>Pubblicizza le promozioni create</h4><!-- #LANG -->
              <p>Le strategie aziendali vanno valorizzate attraverso campagne pubblicitarie. (qui se hanno acquistato sms o email, far l'upload della lista broadcast xls e bottoni per l'invio oppure inseriscono nomi e cognomi e cellulari a mano, diversamente vedranno solo il link generato e potranno incollarlo loro a mano a chi vogliono)</p><!-- #LANG -->
              <p class="lead">
                <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('argument')"> Accedi</a><!-- #LANG -->
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 flex-container">
          <div class="col mb-3 card column">
            <div class="card-body">
              <h4><i class='bx bx-sitemap mr-2'></i>Condividi le tue idee</h4><!-- #LANG -->
              <p>Il driver più importante per lo sviluppo aziendale è la comunicazione e lo scambio di informazioni con i propri concorrenti. (creazione forum e accesso dopo aver pagato lo step 2 o gratis?)</p><!-- #LANG -->
              <p class="lead">
                <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('argument')"> Accedi</a><!-- #LANG -->
              </p>
            </div>
          </div>
        </div>  
        <div class="col-md-6 flex-container">  
          <div class="col mb-3 card column">
            <div class="card-body">
              <h4><i class='bx bxs-trophy mr-2'></i>Massimizza i profitti</h4><!-- #LANG -->
              <p>Consolida, acquisisci, innova e vinci!(qui potremmo creaer una tabella interattiva facendo inserire i profitti generati grazie alle promo e i driver)</p><!-- #LANG -->
              <p class="lead">
                <a class="btn btn-secondary btn-lg" target="_blank" role="button" onclick="change_vis('argument')"> Accedi</a><!-- #LANG -->
              </p>
            </div>
          </div>
        </div>
      </div>  
      <hr>
      <footer>
        <p>&copy; promotion. <a onclick="change_vis('contact')" style="color:blue; text-decoration: underline;"> @lang('promotion/lang.contact')</a> Copyright 2021</p>
      </footer>
    </div>
  </div>

  <!-- login -->
  <div id="login" class="page" style="display: none; padding-top: 3.5rem;">
    <div>
      @include("promotion.login")  
    </div>
  </div>

  <!-- analyse -->
  <div id="analyse" class="page" style="display: none;">
    <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0; background-color: #fff;">
      @include("promotion.analyse")  
    </div>
  </div>

  <!-- promo -->
  <div id="promo" class="page" style="display: none;">
    <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0; background-color: #fff;">
      @include("promotion.promo")  
    </div>
  </div>

<script type="text/javascript">
  //PARTE LAYOUT
  //forse togliere il carrello, se lo si trova nel layout bene se no pazienza, quindi togliere tutto ciò che ha a che fare con il carosello
  //sistemare la grafica della home, sfruttare il layout delle classi
  //vedere di riuscire a mettere layout esterni con css a seguito
  //quando modifichi ogni cosa mettere un loading
  //sistemare il terzo step con la lista clienti immediata, non prende il token_layout perchè non vede subito la strina in layout_preview
  //ripulire anche i colori delle section, metterlo una sola volta e stabilire la categoria in qqualche modo 
  //mettere reset tabella clienti da inviare
  //PARTE ANALISI economia
  //sistemare il check form
  //step1=mettere responsive nella tabella
  //step1=mettere la lista delle maschere salvate, che si possono consultare o eliminare ma questo da fare dopo
  //PROFILO
  //nel ppriflo cliente mettere tutti gli archivi del layout e delle analisi, e dei clienti registrati e riportare anche statistiche a seguito, se ogni promozione inviata ha attecchito con quella lista di clienti e in che misura %
  //sistemare lingue
  //sistemare logo generale panemalab

  start_function_home();
  function start_function_home(){
    check_device_home();
  }

  // window.oncontextmenu = function () {
  //   return false;
  // };

  // document.addEventListener("keydown", function(event){
  //   var key = event.key || event.keyCode;

  //   if (key == 123) {
  //     return false;
  //   } else if ((event.ctrlKey && event.shiftKey && key == 73) || (event.ctrlKey && event.shiftKey && key == 74)) {
  //     return false;
  //   }
  // }, false);

  var url = "{{ route('PmLangChange') }}";

  $(document).ready(function(){
  
  // By default
  var lang="{{ session()->get('locale')}}";
  if (lang=="") {
    lang="it";
  }
 
  $('.'+lang+'_lang').addClass("active-lang");
  $('#lang-switch .'+lang).addClass("active-flag");
  
  // Function switch
  $(function() {
    // French button
    $("#lang-switch .it").click(function() {
      // Enable French
      $('.it_lang').addClass("active-lang"); 
      
      // Disable English
      $('.en_lang').removeClass("active-lang") 
      
      // Active or remove the opacity on the flags.
      $('#lang-switch .it').addClass("active-flag");
      $('#lang-switch .en').removeClass("active-flag");

      window.location.href = url + "?lang=it";
    });
    
    // English button
    $("#lang-switch .en").click(function() {
      
      // Enable English
      $('.en_lang').addClass("active-lang");
      
      // Disable French
      $('.it_lang').removeClass("active-lang")
      
      // Active or remove the opacity on the flags.
      $('#lang-switch .en').addClass("active-flag");
      $('#lang-switch .it').removeClass("active-flag");

      window.location.href = url + "?lang=en";

    });
  });
});

  //document.cookie = "username=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";

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

    var user=getCookie("username");

    $.getJSON("https://api.ipify.org/?format=json", function(e) {

      var ip_address=e.ip;

      if (user != "") {

        if (ip_address!="130.25.137.140") {

          $.get("/check_token_exist_promotion",{ip_address:ip_address},
          function(data){

            var res=jQuery.parseJSON(data);

          });

        }

      } else {

        if (ip_address!="130.25.137.140") {

          $.get("/random_token_promotion",{ip_address:ip_address},
            function(data){

              var res=jQuery.parseJSON(data);

              user = res;

              if (user != "" && user != null) {
               setCookie("username", user, 30);
             }

           });

        }

      }

    });
  }


  var myhistory = [];
  var data = {!! $data !!};
  page_to_go = data["page"];
  change_vis(page_to_go);
  

  function change_vis(page, history){

    var res_id=page.split("_")[1];

    page=page.split("_")[0];
        
    var old_page=window.location.href.split("=")[1];

    if (old_page.indexOf('layout') == 0) {
      
      $("#layout").hide();

    }else{
      
      $("#"+old_page).hide();

    }

    if(history != 0){
      var id_user_profile="@if( auth()->guard('users_promotion')->check() ){{ auth()->guard('users_promotion')->user()->id}}@endif";

      if (old_page=="user_"+id_user_profile) {

      }else{

        myhistory.push(old_page);

      }
  
    }

    old_page=page;

    $("#"+page).show();

    button_back(page, res_id);

    case_page(page, res_id);

  }


  function button_back(page_name, res_id){
    history.pushState(null, null, history.pushState(null, null, window.location.href.substr(0, window.location.href.indexOf(page_name))));

    if (page_name=="layout") {

      history.pushState(null, null, window.history.replaceState(null, null, "/pm?page="+page_name+"_"+res_id));

    } else{

      history.pushState(null, null, window.history.replaceState(null, null, "/pm?page="+page_name));

    }

    window.onpopstate = function () {

      if (myhistory.length==1) {

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
          history.go(1);
        };
        return "http://comiziamo.tk/promotion";
        
      } else {
       change_vis(myhistory.pop(), 0); 
     }

   };
  }  


  function case_page(page_name, res_id){

    switch(page_name) {
      case "home":
      break;
      case "login":
      break;
      case "promo":
      start_function_promo();
      break;
      case "analyse":
      start_function_analyse();
      break;
      default:
    }
    
    $("html, body").animate({ scrollTop: 0 }, "slow");

    if($(".navbar-collapse").hasClass("show")==true){
    $(".navbar-toggler").click();
    }
    

  }

  function check_device_home(){

  if(window.matchMedia("(max-width: 767px)").matches){

      var css_lang = [{'display': 'block', 'padding': '0.5rem 0rem',  'margin': '0'}];
      //cell
      $("#form_search").css("padding-top","10px");
      $(".display_lang").css(css_lang[0]);

    } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet
      
    } else{
      //desktop
     
    }

  }

  function logout_promotion(){

    $.get("/logout_promotion",{},function(){

      window.location.replace("/promotion");

    });

  }

</script>

</body>
</html>


<style type="text/css">
  body {
    font-family: "Lato", sans-serif;
  }

  .main-head{
    height: 150px;
    background: #FFF;

  }

  .sidenav {
    height: 100%;
    background-color: #e9ecef;
    overflow-x: hidden;
    /*padding-top: 20px;*/
  }


  .main {
    height: 100%;
    /*padding: 0px 10px;*/
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
  }

  @media screen and (max-width: 450px) {
    .login-form{
      margin-top: 10%;
      margin-bottom: 10%;
    }

    .register-form{
      margin-top: 10%;
      margin-bottom: 10%;
    }
  }

  @media screen and (min-width: 768px){
    .main{
      margin-left: 40%; 
    }

    .sidenav{
      width: 40%;
      position: fixed;
      z-index: 1;
      top: 56px;
      left: 0;
    }

    .login-form{
      margin-top: 80%;
      margin-bottom: 10%;
    }

    .register-form{
      margin-top: 20%;
      margin-bottom: 10%;
    }
  }


  .login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #000;
  }

  .login-main-text h2{
    font-weight: 300;
  }

  .btn-black{
    background-color: #000 !important;
    color: #fff;
  }


</style>


<div class="sidenav">
  <div class="login-main-text">
    <h2>@lang('promotion/lang.register')<br> Login</h2>
    <p><a style="color:blue; text-decoration: underline;" onclick="change_vis_login('login-form')">Login</a> - <a style="color:blue; text-decoration: underline;" onclick="change_vis_login('register-form')">@lang('promotion/lang.register').</a> @lang('promotion/lang.title_login_1') <a style="color:blue; text-decoration: underline;" onclick="change_vis_login('form_remind')">@lang('promotion/lang.title_login_2').</a></p>
  </div>
</div>
<div class="main">

  <div id="login-form" class="col-md-6 col-sm-12">
    <div class="login-form">
      <form method="POST" action="{{ url('/login_promotion') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
          <label>Nickname</label>
          <input type="text" class="form-control" name="nickname" placeholder="Nickname*" value="{{ old('nickname') }}">
          @if ($errors->has('nickname'))
          <span class="help-block">
            <strong>{{ $errors->first('nickname') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <button type="submit" class="btn btn-black">Login</button>
      </form>
        
    </div>
  </div>

  <div id="register-form" class="col-md-6 col-sm-12" style="display: none;">
    <div class="login-form">
      <form method="POST" action="{{ url('/register_promotion') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
          <label>Nickname</label>
          <input type="text" class="form-control" name="nickname" placeholder="Nickname" value="{{ old('nickname') }}">
          @if ($errors->has('nickname'))
          <span class="error">
            <strong>{{ $errors->first('nickname') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label>Email</label>
          <input type="text" class="form-control" name="email" placeholder="Email" required="">
          @if ($errors->has('email'))
          <span class="error">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password min(6)">
          @if ($errors->has('password'))
          <span class="error">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label>@lang('promotion/lang.confirmation') Password</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
          @if ($errors->has('password_confirmation'))
          <span class="error">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
          @endif
        </div>
        <button type="submit" class="btn btn-secondary">@lang('promotion/lang.register')</button>
      </form>
    </div>
  </div>

  <div id="form_remind" class="col-md-6 col-sm-12" style="display: none;">
    <div class="login-form">
      <form method="POST" action="{{ url('/reset_password_without_token_promotion') }}">
        {{ csrf_field() }}
      <div class="form-group{{ $errors->has('remind_nick') ? ' has-error' : '' }}">
        <label>@lang('promotion/lang.insert') Nickname</label>
        <input  type="text" class="form-control" placeholder="@lang('promotion/lang.insert') Nickname*" name="remind_nick" required="" value="{{ $email or old('remind_nick') }}">
        @if ($errors->has('remind_nick'))
        <span class="help-block">
          <strong>{{ $errors->first('remind_nick') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('remind_email') ? ' has-error' : '' }}">
        <label>@lang('promotion/lang.insert') Email</label>
        <input  type="email"  class="form-control" placeholder="@lang('promotion/lang.insert') Email*" name="remind_email" required="" value="{{ $email or old('remind_email') }}"> 
        @if ($errors->has('remind_email'))
        <span class="help-block">
          <strong>{{ $errors->first('remind_email') }}</strong>
        </span>
        @endif
      </div>
      <label>@lang('promotion/lang.receive_pass')</label><br>
      <button class="btn btn-outline-secondary" type="submit">@lang('promotion/lang.request')</button>
    </form>
    </div>
  </div>


</div>

<script type="text/javascript">

  var old_page="login-form";

  function change_vis_login(new_page){

    $("#"+old_page).hide();

    old_page=new_page;

    $("#"+new_page).show();

  }

</script>

<style>

  #promo .wizard .nav-tabs {
    position: relative;
    margin-bottom: 0;
    border-bottom-color: transparent;
    text-align: center;
  }

  #promo .wizard > div.wizard-inner {
    position: relative;
    text-align: center;
  }

  #promo .connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 100%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 35px;
    z-index: 1;
  }

  #promo .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
  }

  #promo span.round-tab {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 16px;
    color: #0e214b;
    font-weight: 500;
    border: 1px solid #ddd;
  }

  #promo span.round-tab i{
    color:#555555;
  }

  #promo .wizard li.active span.round-tab {
    background: #0db02b;
    color: #fff;
    border-color: #0db02b;
  }

  #promo .wizard li.active span.round-tab i{
    color: #5bc0de;
  }

  #promo .wizard .nav-tabs > li.active > a i{
    color: #0db02b;
  }

  #promo .wizard .nav-tabs > li {
    /*width: 25%;*/
    display: flex;
    flex-wrap: nowrap;
  }

  #promo .wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: red;
    transition: 0.1s ease-in-out;
  }

  #promo .wizard .nav-tabs > li a {
    width: 30px;
    height: 30px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    background-color: transparent;
    position: relative;
    top: 0;
  }

  #promo .wizard .nav-tabs > li a i{
    position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
  }

  #promo .wizard .nav-tabs > li a:hover {
    background: transparent;
  }

  #promo .wizard .tab-pane {
    position: relative;
    padding-top: 20px;

  }

  #promo .wizard h3 {
    margin-top: 0;
  }

  #promo .next-step{
    background-color: #0db02b;
  }

  #promo .step-head{
    font-size: 20px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
  }

  #promo .term-check{
    font-size: 14px;
    font-weight: 400;
  }

  #promo .custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 40px;
    margin-bottom: 0;
  }

  #promo .custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 40px;
    margin: 0;
    opacity: 0;
  }

  #promo .custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: 40px;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 2;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
  }

  #promo .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 38px;
    padding: .375rem .75rem;
    line-height: 2;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
  }

  #promo .footer-link{
    margin-top: 30px;
  }

  #promo .list-content{
    margin-bottom: 10px;
  }

  #promo .list-content a{
    padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
  }

  #promo .list-content a[aria-expanded="true"] i{
    transform: rotate(180deg);
  }

  #promo .list-content a i{
    text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
  }

  #promo .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
  }

  #promo .list-box{
    padding: 10px;
  }

  #promo .signup-logo-header .logo_area{
    width: 200px;
  }

  #promo .signup-logo-header .nav > li{
    padding: 0;
  }

  #promo .signup-logo-header .header-flex{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #promo .list-inline li{
    display: inline-block;
  }

  #promo .pull-right{
    float: right;
  }

  @media (max-width: 767px){

    #promo .sign-content h3{
      font-size: 40px;
    }

    #promo .wizard .nav-tabs > li a i{
      display: none;
    }

    #promo .signup-logo-header .navbar-toggle{
      margin: 0;
      margin-top: 8px;
    }

    #promo .signup-logo-header .logo_area{
      margin-top: 0;
    }

    #promo .signup-logo-header .header-flex{
      display: block;
    }

  }

  #promo .banner h1, .banner h3, .banner h6 {
  margin: 0;
  /*text-shadow: 2px 2px 6px #000;*/
  text-align: center;
  }

  #promo .banner {
  color: black;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
  }

  #promo .dropdown-menu-social{min-width:2.8rem; padding:2px;}

  #promo .social-facebook { background-color: #3b5898; color: #fff; }

  #promo .social-facebook:hover { background-color: #385186; color: #fff; -webkit-transition: all .3s ease; -o-transition: all .3s ease; transition: all .3s ease; }

  #promo .social-instagram { background-color: #7a2276; color: #fff; }

  #promo .social-instagram:hover { background-color: #8b2a86; color: #fff; }

  #promo .social-pinterest { background-color: #c8232c; color: #fff; }

  #promo .social-pinterest:hover { background-color: #ba1f27; color: #fff; }

</style>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-12">
      <div class="wizard">
        <div class="wizard-inner">
          <div class="connecting-line"></div>
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active class_step1" style="flex-grow: 1">
              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span></a>
            </li>
            <li role="presentation" class="disabled class_step2" style="flex-grow: 1">
              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span></a>
            </li>
            <li role="presentation" class="disabled class_step3" style="flex-grow: 1">
              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span></a>
            </li>
          </ul>
        </div>
        <div role="form" class="login-box">
          <div class="tab-content" id="main_form">
            <div class="tab-pane active" role="tabpanel" id="step1">
              <ul class="list-inline pull-right">
                <li><button type="button" class="btn btn-danger" onclick="reset_layout()"><i class="fas fa-trash-alt"></i></button></li>
                <li><button type="button" class="btn next-step"><i class="fas fa-arrow-right"></i></button></li>
              </ul>
              <div class="mb-3">
                <button class="btn" disabled="">
                  Crea promozioni
                </button>
              </div>
              <div class="row">
                <div class="col-md-6 group_tool_layout" style="height: fit-content;">
                  <div class="form-group">
                    <label>Layout</label> 
                    <select class="form-control section_edit_layout" id="select_layout">
                      <option value="" disabled="">Scegli layout</option>
                      <optgroup label="Hair layout">
                        <option value="1_1">1</option>
                        <option value="1_2">2</option>
                      </optgroup> 
                      <optgroup label="Restaurant layout"> 
                        <option value="2_1">1</option>
                        <option value="2_2">2</option>
                      </optgroup> 
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Colore sezioni</label> 
                    <select class="form-control section_edit_layout" id="select_colour">
                      <option value="" disabled="">Scegli colore</option>
                      <optgroup label="Sezione 1">
                        <option value="1#007bff">blue</option>
                        <option value="1#6610f2">indigo</option>
                        <option value="1#6f42c1">purple</option>
                        <option value="1#e83e8c">pink</option>
                        <option value="1#dc3545">red</option>
                        <option value="1#fd7e14">orange</option>
                        <option value="1#ffc107">yellow</option>
                        <option value="1#28a745">green</option>
                        <option value="1#20c997">teal</option>
                        <option value="1#17a2b8">cyan</option>
                        <option value="1#fff">white</option>
                        <option value="1#6c757d">gray</option>
                        <option value="1#343a40">gray-dark</option>
                        <option value="1#007bff">primary</option>
                        <option value="1#6c757d">secondary</option>
                        <option value="1#28a745">success</option>
                        <option value="1#ffc107">warning</option>
                        <option value="1#dc3545">danger</option>
                        <option value="1#f8f9fa">light</option>
                        <option value="1#343a40">dark</option>
                      </optgroup> 
                      <optgroup label="Sezione 2"> 
                        <option value="2#007bff">blue</option>
                        <option value="2#6610f2">indigo</option>
                        <option value="2#6f42c1">purple</option>
                        <option value="2#e83e8c">pink</option>
                        <option value="2#dc3545">red</option>
                        <option value="2#fd7e14">orange</option>
                        <option value="2#ffc107">yellow</option>
                        <option value="2#28a745">green</option>
                        <option value="2#20c997">teal</option>
                        <option value="2#17a2b8">cyan</option>
                        <option value="2#fff">white</option>
                        <option value="2#6c757d">gray</option>
                        <option value="2#343a40">gray-dark</option>
                        <option value="2#007bff">primary</option>
                        <option value="2#6c757d">secondary</option>
                        <option value="2#28a745">success</option>
                        <option value="2#ffc107">warning</option>
                        <option value="2#dc3545">danger</option>
                        <option value="2#f8f9fa">light</option>
                        <option value="2#343a40">dark</option>
                      </optgroup>
                      <optgroup label="Sezione 3"> 
                        <option value="3#007bff">blue</option>
                        <option value="3#6610f2">indigo</option>
                        <option value="3#6f42c1">purple</option>
                        <option value="3#e83e8c">pink</option>
                        <option value="3#dc3545">red</option>
                        <option value="3#fd7e14">orange</option>
                        <option value="3#ffc107">yellow</option>
                        <option value="3#28a745">green</option>
                        <option value="3#20c997">teal</option>
                        <option value="3#17a2b8">cyan</option>
                        <option value="3#fff">white</option>
                        <option value="3#6c757d">gray</option>
                        <option value="3#343a40">gray-dark</option>
                        <option value="3#007bff">primary</option>
                        <option value="3#6c757d">secondary</option>
                        <option value="3#28a745">success</option>
                        <option value="3#ffc107">warning</option>
                        <option value="3#dc3545">danger</option>
                        <option value="3#f8f9fa">light</option>
                        <option value="3#343a40">dark</option>
                      </optgroup> 
                      <optgroup label="Sezione 4"> 
                        <option value="4#007bff">blue</option>
                        <option value="4#6610f2">indigo</option>
                        <option value="4#6f42c1">purple</option>
                        <option value="4#e83e8c">pink</option>
                        <option value="4#dc3545">red</option>
                        <option value="4#fd7e14">orange</option>
                        <option value="4#ffc107">yellow</option>
                        <option value="4#28a745">green</option>
                        <option value="4#20c997">teal</option>
                        <option value="4#17a2b8">cyan</option>
                        <option value="4#fff">white</option>
                        <option value="4#6c757d">gray</option>
                        <option value="4#343a40">gray-dark</option>
                        <option value="4#007bff">primary</option>
                        <option value="4#6c757d">secondary</option>
                        <option value="4#28a745">success</option>
                        <option value="4#ffc107">warning</option>
                        <option value="4#dc3545">danger</option>
                        <option value="4#f8f9fa">light</option>
                        <option value="4#343a40">dark</option>
                      </optgroup> 
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Carosello</label> 
                    <select class="form-control section_edit_layout" id="select_carousel">
                      <option value="" selected="" disabled>Vuoi carosello?</option>
                      <option value="0">No</option>
                      <option value="1">Sì</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Fine promozione</label> 
                    <input class="form-control section_edit_layout" type="date" id="end_promotion" name="name" placeholder=""> 
                  </div>
                  <div class="form-group">
                    <label>Max persone raggiungibili</label> 
                    <select class="form-control section_edit_layout" id="select_people_received">
                      <option value="999999" selected="">Nessun limite</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Social</label> 
                    <div class="btn-group d-flex">
                      <button type="button" class="btn btn-outline-primary"><i class="fa fa-share-alt"></i></button>
                      <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-social">
                        <a class="dropdown-item social-facebook mb-1 rounded"><i class="fab fa-facebook-f"></i></a>
                        <input class="form-control social mb-1 section_edit_layout" type="text" name="facebook" placeholder="Facebook" id="input_facebook">
                        <a class="dropdown-item social-pinterest mb-1 rounded"><i class="fab fa-pinterest"></i></a>
                        <input class="form-control social mb-1 section_edit_layout" type="text" name="pinterest" placeholder="Pinterest" id="input_pinterest">
                        <a class="dropdown-item social-instagram mb-1 rounded"><i class="fab fa-instagram"></i></a>
                        <input class="form-control social mb-1 section_edit_layout" type="text" name="instagram" placeholder="Instagram" id="input_instagram">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-3 pr-3 group_iframe_layout">
                  <iframe frameBorder="0" id="iframe_layout" class="w-100" src=""></iframe>
                </div>
              </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="step2">
              <div class="d-flex mb-3" style="flex-wrap: nowrap;">
                <button class="btn mr-auto" disabled="" style="white-space: nowrap;">
                  Anteprima promozione
                </button>
                <button type="button" class="btn btn-secondary prev-step mr-2"><i class="fas fa-arrow-left"></i></button>
                <button type="button" class="btn next-step"><i class="fas fa-arrow-right"></i></button>
              </div>
              <div id="card_preview_layout" class="card col-md-12 p-0">
                <h5 class="card-header">
                  <select class="form-control" id="layout_send_chosen">
                    <option value="" selected="" disabled>Scegli layout</option>
                  </select>
                </h5>
                <div id="card_body_height" class="card-body p-0">
                  <iframe frameBorder="0" id="iframe_layout_preview" class="w-100" src=""></iframe>
                </div>
              </div>
            </div>
            <div class="tab-pane" role="tabpanel" id="step3">
              <ul class="list-inline pull-right">
                <li><button type="button" class="btn btn-secondary prev-step"><i class="fas fa-arrow-left"></i></button></li>
                <li><button type="button" class="btn btn-success" onclick="send_all_client()">Invia</button></li>
              </ul>
              <div class="mb-3">
                <button class="btn" disabled="">
                  Modalità di invio
                </button>
              </div>
              <div class="row mb-3">
                <div class="col-md-12 text-center">
                  <label>Copia e incolla il tuo link sui social!</label> 
                  <p id="url_layout_preview" class="text_cut m-0 p-0" data-toggle="tooltip" title="Copiato!" onclick="copy_text('#url_layout_preview')" style="text-decoration: underline;color: blue"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Scegli modalità invio *</label> 
                    <select class="form-control" id="type_send_chosen">
                      <option value="" selected="" disabled>Tipo invio</option>
                      <option value="0">Email</option>
                      <option value="1">Sms</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Upload lista clienti <a href="http://176.107.131.30/promotion_repo/download_example_file/listclient.xlsx"><i class="fa fa-download"></i></a></label> 
                    <div class="custom-file mr-3">
                      <input type="file" name="file" class="custom-file-input" id="file-btn">
                      <label class="custom-file-label" for="file-btn">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Nome *</label> 
                    <input class="form-control" type="text" id="name_client_send" name="name" placeholder="Nome cliente">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Cognome *</label> 
                    <input class="form-control" type="text" id="lastname_client_send" name="name" placeholder="Cognome cliente">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Cellulare *</label> 
                    <input class="form-control" type="text" id="cell_client_send" name="name" placeholder="Cellulare cliente">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Email *</label> 
                    <input class="form-control" type="mail" id="email_client_send" name="name" placeholder="Email cliente">
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-secondary" onclick="add_client()">Add</button>
              <div class="table-responsive">
                <table class="table mt-3">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Cognome</th>
                      <th>Cellulare</th>
                      <th>Email</th>
                      <th>Comandi</th>
                    </tr>
                  </thead>
                  <tbody id="append_client_send">

                  </tbody>
                </table>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function start_function_promo(){

    var height_navbar=$("#ftco-navbar").outerHeight()+"px";

    $(".container_page").css("height", "calc(100% - "+height_navbar+")");

    create_element("1_1");

    $('.wizard .nav-tabs li.active').removeClass('active').addClass("disabled");

    $('.class_step1').addClass("active").children().click();
   
  }


  $(".section_edit_layout").change(function(data){

    var id_select=$(this)[0].id;
    id_layout=$("#select_layout").val();

    switch(id_select){
      case "select_layout":
        create_element(id_layout);
      break;
      case "select_colour":
        var cat_color=$(this).val().split("#")[0];
        var num_color=$(this).val().split("#")[1];
        save_setting_promotion(cat_color, num_color);
      break;
      default:
        save_setting_promotion();
    }

    $("#iframe_layout").attr("src","http://176.107.131.30/layout_"+id_layout);

  });

  function create_element(id_layout){

    $.get("create_element_promotion",{id_layout:id_layout},
      function(data){

        console.log(data);

        get_data_layout(id_layout);

      });

  }

  function get_data_layout(id_layout){

    $.get("get_data_layout_promotion",{id_layout:id_layout},
      function(data){

        var res=jQuery.parseJSON(data);

        $("#select_carousel").val(res[0].carousel);
        $("#end_promotion").val(res[0].end_date);
        $("#select_people_received").val(res[0].max_people_received);
        $("#input_facebook").val(res[0].facebook);
        $("#input_pinterest").val(res[0].pinterest);
        $("#input_instagram").val(res[0].instagram);

        $("#iframe_layout").attr("src","http://176.107.131.30/layout_"+id_layout);

        set_height_iframe();

      });

  }

  function set_height_iframe(){

    var height_iframe_layout=$(".group_tool_layout").height()-15;

    $("#iframe_layout").css("height", height_iframe_layout+"px");

    $("#card_preview_layout").css("height", height_iframe_layout+"px");

  }

  // funzione per andare avanti e indietro tra gli step
  $(document).ready(function () {

    $('.nav-tabs > li a[title]').tooltip();

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

      var target = $(e.target);

      var id_layout=$("#select_layout").val();

      get_layout_send(id_layout);

      if (target[0].innerText==2) {

        var height_iframe_layout_preview=$("#card_body_height").height();

        $("#iframe_layout_preview").css("height", height_iframe_layout_preview+"px");

        $("#iframe_layout_preview" ).attr("src","");

      }else if(target[0].innerText==3){
        //aspetta che compaia la stringa
        $("#url_layout_preview").bind("DOMSubtreeModified", function() {
          if ($("#url_layout_preview").text()!="") {
            get_list_client_send();
          }
        });

      }

      if (target.parent().hasClass('disabled')) {
        return false;
      }

    });


    $(".next-step").click(function (e) {

      var active = $('.wizard .nav-tabs li.active');

      active.next().removeClass('disabled');

      nextTab(active);

    });

    $(".prev-step").click(function (e) {

      var active = $('.wizard .nav-tabs li.active');

      prevTab(active);

    });

  });

  function nextTab(elem) {

    $(elem).next().find('a[data-toggle="tab"]').click();

  }

  function prevTab(elem) {

    $(elem).prev().find('a[data-toggle="tab"]').click();

  }

  $('.nav-tabs').on('click', 'li', function() {

    $('.nav-tabs li.active').removeClass('active');

    $(this).addClass('active');

  });

  // funzione di inserimento data fine
  var tomorrow=new Date();

  tomorrow.setDate(tomorrow.getDate()+1);

  var dt = tomorrow.getFullYear() + '-' + ("0" + (tomorrow.getMonth() + 1)).slice(-2) + '-' + ("0" + tomorrow.getDate()).slice(-2);

  $('#end_promotion').attr('min' , dt);

  $('#end_promotion').change(function(){

    var post_year_date=$('#end_promotion').val().split("-")[0];
    var post_month_date=$('#end_promotion').val().split("-")[1];
    var post_day_date=("0" + $('#end_promotion').val().split("-")[2]).slice(-2);
    var complete_date=post_year_date+"-"+post_month_date+"-"+post_day_date;

    var day_after_tomorrow = new Date(complete_date);

    day_after_tomorrow.setDate(day_after_tomorrow.getDate()+1);

    var dat = day_after_tomorrow.getFullYear() + '-' + ("0" + (day_after_tomorrow.getMonth() + 1)).slice(-2) + '-' + ("0" + day_after_tomorrow.getDate()).slice(-2);

  });

  function save_setting_promotion(cat_color, num_color){

    var id_layout=$("#iframe_layout").attr("src").split("layout_")[1];
    var url_layout=$("#iframe_layout").attr("src");
    var date_end=$("#end_promotion").val();
    var select_people_received=$("#select_people_received").val();
    var select_type_send=$("#select_type_send").val();
    var input_facebook=$("#input_facebook").val();
    var input_pinterest=$("#input_pinterest").val();
    var input_instagram=$("#input_instagram").val();
    var select_carousel=$("#select_carousel").val();

    $.get("save_setting_promotion",{id_layout:id_layout, cat_color:cat_color, num_color:num_color, select_people_received:select_people_received, select_type_send:select_type_send, date_end:date_end, input_facebook:input_facebook, input_pinterest:input_pinterest, input_instagram:input_instagram, select_carousel:select_carousel},
      function(data){

        console.log(data);

      });

  }

  function copy_text(element) {

    var temp = $("<input>");

    $("body").append(temp);

    temp.val($(element).text()).select();

    document.execCommand("copy");

    temp.remove();

    $(document).ready(function() {

      $('[data-toggle="tooltip"]').tooltip();

      setTimeout(function(data){

        $('[data-toggle="tooltip"]').tooltip("hide");

      },5000);

    });

  }

  function get_layout_send(id_layout){

    console.log(id_layout)

    $("#layout_send_chosen").empty();

    $.get("get_layout_send_promotion",{},
      function(data){

        var res=jQuery.parseJSON(data);
        var selected="";

        for (var i = 0; i < res.length; i++) {

          if (res[i].id_layout==id_layout) {

            selected="selected";

          }else{

            selected="";

          }

          $("#layout_send_chosen").append('<option value="'+res[i].id_layout+'#'+res[i].token_layout+'" '+selected+'>'+res[i].token_layout+'</option>');

        } 

        get_token_layout_promotion($("#layout_send_chosen").val().split("#")[1]);
        
      });

  }

  function get_token_layout_promotion(token_layout){

    $.get("get_token_layout_promotion",{token_layout:token_layout},
      function(data){

        var res=jQuery.parseJSON(data);

        var url_generator='http://176.107.131.30/layout_'+res[0].id_layout+'?layout='+res[0].token_layout+"#";

        $("#url_layout_preview").attr("href",url_generator).text(url_generator);

        $("#iframe_layout_preview").attr("src",url_generator);

      });

  }

  $("#layout_send_chosen").change(function(data){

    var token_layout=$(this).val().split("#")[1];

    console.log(token_layout)

    get_token_layout_promotion(token_layout);

  });


  function get_list_client_send(){

    $("#append_client_send").empty();

    // var token_layout=$("#url_layout_preview").text().split("?layout=")[1];

    //se non compare il link non posso estrapolare il teso che mi serv

    var token_layout = $("#url_layout_preview").text().substring(
    $("#url_layout_preview").text().indexOf("=") + 1, 
    $("#url_layout_preview").text().lastIndexOf("#")
    );

    console.log(token_layout)

    $.get("get_client_send_promotion",{token_layout:token_layout},
      function(data){

        var res=jQuery.parseJSON(data);
        var num;

        console.log(res)

        for (var i = 0; i < res.length; i++) {

          num=i+1;

          $("#append_client_send").append(
            '<tr id="tr_'+num+'">'+
            '<td id="td_name_'+num+'">'+res[i].name+'</td>'+
            '<td id="td_lastname_'+num+'">'+res[i].lastname+'</td>'+
            '<td id="td_cell_'+num+'">'+res[i].cell+'</td>'+
            '<td id="td_email_'+num+'">'+res[i].email+'</td>'+
            '<td><button class="btn btn-danger" onclick="delete_tr_client_send('+num+','+res[i].id+')">Delete</button></td>'+
            '</tr>');

        }

      });

  }

  var num=0;
  function add_client(){

    var name_client_send=$("#name_client_send").val();
    var lastname_client_send=$("#lastname_client_send").val();
    var cell_client_send=$("#cell_client_send").val();
    var email_client_send=$("#email_client_send").val();

    num=$("#append_client_send").find("tr").length+1;

    $("#append_client_send").append(
      '<tr id="tr_'+num+'">'+
      '<td id="td_name_'+num+'">'+name_client_send+'</td>'+
      '<td id="td_lastname_'+num+'">'+lastname_client_send+'</td>'+
      '<td id="td_cell_'+num+'">'+cell_client_send+'</td>'+
      '<td id="td_email_'+num+'">'+email_client_send+'</td>'+
      '<td><button class="btn btn-danger" onclick="delete_tr_client_send('+num+')">Delete</button></td>'+
      '</tr>');
  }


  function send_all_client(){

    // var token_layout=$("#url_layout_preview").text().split("?layout=")[1];

    var token_layout = $("#url_layout_preview").text().substring(
    $("#url_layout_preview").text().indexOf("=") + 1, 
    $("#url_layout_preview").text().lastIndexOf("#")
    );

    var name_client_send=[];
    var lastname_client_send=[];
    var cell_client_send=[];
    var email_client_send=[];

    $("#append_client_send").find("tr").each(function(index){

      var num=$(this)[0].id.split("_")[1];

      name_client_send.push($("#td_name_"+num).text());
      lastname_client_send.push($("#td_lastname_"+num).text());
      cell_client_send.push($("#td_cell_"+num).text());
      email_client_send.push($("#td_email_"+num).text());


    });

    $.get("add_client_send_promotion",{token_layout:token_layout, name_client_send:name_client_send, lastname_client_send:lastname_client_send, cell_client_send:cell_client_send, email_client_send:email_client_send},
      function(data){

        get_list_client_send();

      });

  }

  function delete_tr_client_send(num, id){

    $("#tr_"+num).remove();

    console.log(id)

    if (id!=undefined) {

      delete_client_send(id);

    }

  }

  function delete_client_send(id){

    $.get("delete_client_send_promotion",{id:id},
      function(data){

        console.log(data);

      });

  }

  $("#file-btn").change(function(event){

    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = readSuccess;

    function readSuccess(evt) {                      
          var fileContent = evt.target.result;     
          var workbook = XLSX.read(fileContent, { type: 'binary' }); 

          workbook.SheetNames.forEach(sheetname => {

        const data = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetname]);
        
        for (var i = 0; i < data.length; i++) {

          var num=$("#append_client_send").find("tr").length+1;

          $("#append_client_send").append(
            '<tr id="tr_'+num+'">'+
            '<td id="td_name_'+num+'">'+data[i].Nome+'</td>'+
            '<td id="td_lastname_'+num+'">'+data[i].Cognome+'</td>'+
            '<td id="td_cell_'+num+'">'+data[i].Cellulare+'</td>'+
            '<td id="td_email_'+num+'">'+data[i].Email+'</td>'+
            '<td><button class="btn btn-danger" onclick="delete_tr_client_send('+num+')">Delete</button></td>'+
            '</tr>');
        }

      });   


      };

      reader.readAsBinaryString(file);

  });

  function reset_layout(){

    var id_layout=$("#select_layout").val();

    $.get("reset_layout_promotion",{id_layout:id_layout},
      function(data){

        console.log(data);

        start_function_promo();

        $("#select_layout").val("1_1");

      });

  }


</script>