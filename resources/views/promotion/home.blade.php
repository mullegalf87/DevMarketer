<!DOCTYPE html>
<html lang="en">
<head>
  <title>PromotionLab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <script src="promotion_repo/home/js/jquery.min.js"></script>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>

  <link rel="stylesheet" href="promotion_repo/home/css/animate.css">

  <link rel="stylesheet" href="promotion_repo/home/css/owl.carousel.min.css">
  <link rel="stylesheet" href="promotion_repo/home/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="promotion_repo/home/css/magnific-popup.css">

  <link rel="stylesheet" href="promotion_repo/home/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="promotion_repo/home/css/jquery.timepicker.css">


  <link rel="stylesheet" href="promotion_repo/home/css/flaticon.css">
  <link rel="stylesheet" href="promotion_repo/home/css/style.css">

  <!-- aggiunti da me -->
  <!-- boxicons -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
  <!-- tether -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/e07be0b1c4.js"></script>
  <!-- highcharts -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <!-- upload xls -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.1/xlsx.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/json2html/1.3.0/json2html.min.js"></script>
  <!-- imagecompressor -->
  <script type="text/javascript" src="js/bookmap/image-compressor.js"></script>
  <!-- highcharts -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <!-- highcharts -->
  <!-- formatdate -->
  <script src="https://unpkg.com/@js-temporal/polyfill/dist/index.umd.js"></script>

</head>
<style type="text/css">

  nav .btn-outline-light:hover {
    color: #333;
  }

  [onClick] {
  cursor:pointer;
  }

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

  /*textcut*/
  .text_cut{
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }

  /*color background page*/
  .page{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
  }

</style>
<body>
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="top:0;">
  <div class="container">
    <a class="navbar-brand" onclick="change_vis('home')"><span>Promotion</span>Lab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item"><a onclick="scroll_page_tag('about')" class="nav-link">About</a></li>
        <li class="nav-item"><a onclick="scroll_page_tag('costs')" class="nav-link">Costi sms</a></li>
        <li class="nav-item"><a onclick="scroll_page_tag('contact')" class="nav-link">Contact</a></li> -->
        <li class="nav-item active">
          @if( auth()->guard('users_promotion')->check() )
          <li class="nav-item"><a onclick="change_vis('promo')" class="nav-link">Step</a></li>
          @if(auth()->guard('users_promotion')->user()->level!=0)
          <li class="nav-item"><a onclick="change_vis('report')" class="nav-link">Report</a></li>
          @endif
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">{{ auth()->guard('users_promotion')->user()->nickname }}</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" onclick="change_vis('profile')">Profile</a>
              <a class="dropdown-item" onclick="logout_promotion()">Logout</a>
            </div>
          </li>
          @else
          <a class="nav-link" onclick="change_vis('login')">Login/Register <span class="sr-only">(current)</span></a>
          @endif  
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- home -->
<div id="home" style="display: none;">
  <div class="hero-wrap js-fullheight" style="background-image: url('promotion_repo/home/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate">
          <span class="subheading">Welcome to StudyLab</span>
          <h1 class="mb-4">We Are Online Platform For Make Learn</h1>
          <p class="caps">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          <p class="mb-0">
            @if( auth()->guard('users_promotion')->check() )
            <a class="btn btn-primary" onclick="change_vis('promo')">Accedi agli step</a>
            @if(auth()->guard('users_promotion')->user()->level!=0)
            <a class="btn btn-danger" onclick="change_vis('report')">Report</a>
            @endif
            @endif
            <a class="btn btn-white" onclick="scroll_page_tag('about')">About</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <section id="costs" class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Start Learning Today</span>
          <h2 class="mb-4">Costi software</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(promotion_repo/home/images/work-1.jpg);">
            <span class="price">Software</span>
            </a>
            <div class="text p-4">
              <h3><a href="#">Utilizzo base del software di creazione promozioni</a></h3>
              <p class="advisor">By <span>Prog</span></p>
              <ul class="d-flex justify-content-between">
                <li><span class="flaticon-shower"></span>Software Free</li>
                <li class="price">€0</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(promotion_repo/home/images/work-2.jpg);">
              <span class="price">Software + 1000 email + report</span>
            </a>
            <div class="text p-4">
              <h3><a href="#">Utilizzo del software di creazione promozioni + invio 1000 email + report</a></h3>
              <p class="advisor">By <span>Prog</span></p>
              <ul class="d-flex justify-content-between">
                <li><span class="flaticon-shower"></span>Software Plus</li>
                <li class="price">€50</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(promotion_repo/home/images/work-3.jpg);">
              <span class="price">Software + 1000 sms + report</span>
            </a>
            <div class="text p-4">
              <h3><a href="#">Utilizzo del software di creazione promozioni + invio 1000 sms + report</a></h3>
              <p class="advisor">By <span>Prog</span></p>
              <ul class="d-flex justify-content-between">
                <li><span class="flaticon-shower"></span>Software Pro</li>
                <li class="price">€100</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="ftco-section services-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
          <div class="w-100 mb-4 mb-md-0">
            <span class="subheading">Welcome to StudyLab</span>
            <h2 class="mb-4">We Are StudyLab An Online Learning Center</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="d-flex video-image align-items-center mt-md-4">
              <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(promotion_repo/home/images/about.jpg);">
              <span class="fa fa-play-circle"></span>
              </a>
              <h4 class="ml-4">Learn anything from StudyLab, Watch video</h4>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services">
                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Top Quality Content</h3>
                  <p>A small river named Duden flows by their place and supplies</p>
                </div>
              </div>      
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services">
                <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Highly Skilled Instructor</h3>
                  <p>A small river named Duden flows by their place and supplies</p>
                </div>
              </div>    
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services">
                <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">World Class &amp; Quiz</h3>
                  <p>A small river named Duden flows by their place and supplies</p>
                </div>
              </div>      
            </div>
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
              <div class="services">
                <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
                <div class="media-body">
                  <h3 class="heading mb-3">Get Certified</h3>
                  <p>A small river named Duden flows by their place and supplies</p>
                </div>
              </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="contact" class="ftco-footer ftco-no-pt">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">About</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
              <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Help Desk</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Customer Care</a></li>
              <li><a href="#" class="py-2 d-block">Legal Help</a></li>
              <li><a href="#" class="py-2 d-block">Services</a></li>
              <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
              <li><a href="#" class="py-2 d-block">Call Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Recent Courses</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">Computer Engineering</a></li>
              <li><a href="#" class="py-2 d-block">Web Design</a></li>
              <li><a href="#" class="py-2 d-block">Business Studies</a></li>
              <li><a href="#" class="py-2 d-block">Civil Engineering</a></li>
              <li><a href="#" class="py-2 d-block">Computer Technician</a></li>
              <li><a href="#" class="py-2 d-block">Web Developer</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md pt-5">
          <div class="ftco-footer-widget pt-md-5 mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
  <svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
  </svg>
</div>

<!-- login -->
<div id="login" class="page" style="display: none;">
  <div>
    @include("promotion.login")  
  </div>
</div>

<!-- analyse -->
<div id="analyse" class="page" style="display: none;">
  <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
    @include("promotion.analyse")  
  </div>
</div>

<!-- promo -->
<div id="promo" class="page" style="display: none;">
  <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
    @include("promotion.promo")  
  </div>
</div>

<!-- report -->
<div id="report" class="page" style="display: none;">
  <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
    @include("promotion.report")  
  </div>
</div>

<!-- profile -->
<div id="profile" class="page" style="display: none;">
  <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
    @include("promotion.profile")  
  </div>
</div>


<script src="promotion_repo/home/js/jquery-migrate-3.0.1.min.js"></script>
<script src="promotion_repo/home/js/popper.min.js"></script>
<script src="promotion_repo/home/js/bootstrap.min.js"></script>
<script src="promotion_repo/home/js/jquery.easing.1.3.js"></script>
<script src="promotion_repo/home/js/jquery.waypoints.min.js"></script>
<script src="promotion_repo/home/js/jquery.stellar.min.js"></script>
<script src="promotion_repo/home/js/owl.carousel.min.js"></script>
<script src="promotion_repo/home/js/jquery.magnific-popup.min.js"></script>
<script src="promotion_repo/home/js/jquery.animateNumber.min.js"></script>
<script src="promotion_repo/home/js/bootstrap-datepicker.js"></script>
<script src="promotion_repo/home/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="promotion_repo/home/js/google-map.js"></script>
<script src="promotion_repo/home/js/main.js"></script>

<script type="text/javascript">

  //TABELLE USATE
  //users_promotion
  //setting_promotion
  //user_send_promotion

  //REPORT
  //Problemi il doppio dei clienti con la stessa campagna

  //LAYOUT
  //sistemare width dinamico image edit
  //sistemare altri layout
  //inviare una mail al titolare per ogni cliente registrato indipendentemente dal basic, pro, ecc mettere ajax

  //GENERALI
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
          var height_group_ifram_layout;

          create_element("1_1");

          select_social('facebook');

          $("#progressbar li").removeClass("active");

          $("fieldset").hide();

          $("#account").addClass("active");

          $("#fieldset_1").show().css("opacity","");

          $(".group_tool_layout").ready(function(){

            height_group_ifram_layout=$(".group_tool_layout").height();

            $(".group_iframe_layout").css("height",height_group_ifram_layout+"px");

            var height_navbar=$("#ftco-navbar").outerHeight();

            var height_page=$( window ).height();

            var total_height=height_page-height_navbar+"px";

            $("#promo .card").css("height", total_height);

          });
      break;
      case "report":
        start_function_report();
      break;
      case "report":
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

    $.get("/logout_promotion",{},
      function(){

      window.location.replace("/promotion");

    });

  }

  function scroll_page_tag(id_tag){

    $('html, body').animate({
      scrollTop: $("#"+id_tag).offset().top
    }, 2000);

  }

  function pad(num) {

    return ("0"+num).slice(-2);

  }

  function formatDate(date) {

    var year=date.split("-")[0];
    var month=date.split("-")[1];
    var day=date.split("-")[2];
    var correct_day=day.split(" ")[0];
    var time=day.split(" ")[1];

    return correct_day+"/"+month+"/"+year;

  }

</script>

</body>
</html>