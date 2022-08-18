<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-title" content="CodePen">
<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
<title>BookMap</title>

<!-- tag facebook -->
<meta property="og:title" content="Bookmap">
<meta property="og:description" content="Compra e vendi o scambia senza costi nelle tue vicinanze!">
<!-- <meta property="og:description" content="Buy and sell or exchange without expenses near you!"> -->
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.comiziamo.tk/bookmap" />
<meta property="og:image" content="https://www.comiziamo.tk/bookmap_repo/logo_2.png?refresh=<?php echo rand(1,999); ?>">

<link rel="icon" href="bookmap_repo/logo_2.png?refresh=<?php echo rand(1,999); ?>" type="">
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- popper -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<!-- bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- datatable -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
<!-- imagecompressor -->
<script type="text/javascript" src="js/image-compressor.js"></script>
<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&callback=initialize&key=AIzaSyDPMzEErbMtImAPDLz1xPda-n7Ztcb299s" defer></script>
<!-- overlapping google maps -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier/1.0.3/oms.min.js"></script>
<!-- boxicon -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
<!-- socket -->
<!-- <script src="bookmap_repo/js/RTCMultiConnection.min.js"></script>
<script src="bookmap_repo/js/socket.io.js"></script> -->
<!-- paypal -->
<script src="https://www.paypal.com/sdk/js?client-id=AZP3eAX40cGq8Hq9H-fUJTYsKrdVBCjGSTxtQW3Q7pnlKXAWZgts2_4YrFQ31Db25afrI2CcgwpLlBwO&currency=EUR"></script>
<!-- input file bootstrap-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
<!-- cookie popup -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<!-- growl notify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>
<!-- add to home screen for cell -->
<link rel="stylesheet" type="text/css" href="css/addtohomescreen.css">
<script src="js/addtohomescreen.js"></script>


<style>


body{
overflow: hidden;
}

.btn .bx {
  vertical-align: inherit;
  margin-top: -3px;
  font-size: 1.15rem;
}

.form-control {
  height: calc(2.5rem + 2px);
  /*padding: 0.5rem 1.5rem;*/
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.form-control-chatSend {
    display: block;
    width: 100%;
    
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn {
  font-size: 1rem;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
}

.bx.icon-single {
  font-size: 1.5rem;
}

.form-inline .form-control {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.form-inline .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) {
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .form-inline .form-control {
    width: 210px;
  }
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
  .form-inline .form-control {
    width: 440px;
  }
}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
  .form-inline .form-control {
    width: 600px;
  }
}

.sub-menu.navbar-light .navbar-nav .active > .nav-link,
.sub-menu.navbar-light .navbar-nav .nav-link.active,
.sub-menu.navbar-light .navbar-nav .nav-link.show,
.sub-menu.navbar-light .navbar-nav .show > .nav-link {
  border-bottom: 3px solid #007bff;
  color: #007bff;
}

.navbar .navbar-toggler {
  border: none;
}

.navbar-light .navbar-toggler:focus {
  outline: none;
}

.navbar {
  padding: 1rem;
}

.main-menu {
  position: relative;
  z-index: 3;
}

.sub-menu {
  position: relative;
  z-index: 2;
  padding: 0 1rem;
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .sub-menu {
    padding: 0 1rem;
  }

  .sub-menu.navbar-expand-md .navbar-nav .nav-link {
    padding: 1rem 1.5rem;
  }
}

.navbar.bg-light {
  background: #fff !important;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
}

.user-dropdown .nav-link {
  padding: 0.15rem 0;
}

#sidebar {
  background: #fff;
  height: 100%;
  left: -100%;
  top: 0;
  bottom: 0;
  overflow: auto;
  position: fixed;
  transition: 0.4s ease-in-out;
  width: 84%;
  z-index: 5001;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
  padding: 1.25rem 1rem 1rem;
}

#sidebar.active {
  left: 0;
}

#sidebar .sidebar-header {
  background: #fff;
  border-bottom: 1px solid #e4e4e4;
  padding-bottom: 1.5rem;
}

#sidebar ul.components {
  padding: 20px 0;
  border-bottom: 1px solid #e4e4e4;
  margin-bottom: 40px;
}

#sidebar ul p {
  color: #fff;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px 16px;
  font-size: 1.1em;
  display: block;
  color: #000;
}

#sidebar ul li a:hover {
  color: #7386d5;
  background: #fff;
}

#sidebar ul li.active > a,
#sidebar a[aria-expanded="true"] {
  color: #007bff;
  background: #e6f2ff;
  border-radius: 6px;
}

a[data-toggle="collapse"] {
  position: relative;
}

#sidebar .links .dropdown-toggle::after {
  display: block;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
}



.overlay {
  background: rgba(0, 0, 0, 0.7);
  height: 100vh;
  left: 0;
  position: fixed;
  top: 0;
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  z-index: -1;
  width: 100%;
  opacity: 0;
}

.overlay.visible {
  opacity: 1;
  z-index: 5000;
}

/* .mobiHeader .menuActive~.overlay {
    opacity: 1;
    width: 100%;
} */

ul.social-icons {
  list-style-type: none;
  padding-left: 0;
  margin-bottom: 0;
}

ul.social-icons li {
  display: inline-block;
  margin-right: 0px;
  margin-bottom: 0;
}

#sidebar ul.social-icons li a {
  font-size: 24px;
}

.utility-nav {
  background: #e4e4e4;
  padding: 0.5rem 1rem;
}

.utility-nav p {
  margin-bottom: 0;
}

.search-bar {
  position: relative;
  z-index: 2;
  background-color: white;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.1);
}

.search-bar .form-control {
  width: calc(100% - 45px);
}

.avatar {
  border-radius: 50%;
  width: 4.5rem;
  height: 4.5rem;
  margin-right: 8px;
}

.avatar.avatar-xs {
  width: 2.25rem;
  height: 2.25rem;
}

.user-dropdown .dropdown-menu {
  left: auto;
  right: 0;
}

.d-md-block {
  display: none !important;
}

/*style scroll table*/   
.bootstrap4_scroll_table .bootstrap-table.bootstrap4{
  max-height: 100%;
  display: flex;
  flex-direction: column;
  overflow-y: hidden;
}

.bootstrap4_scroll_table .fixed-table-container.fixed-height{
  flex: 1;
  min-height: 0;
  display: flex;
  flex-direction: column;
  padding-bottom: 10px !important;
  border: 0 !important;
}

.bootstrap4_scroll_table .fixed-table-header{
  flex-shrink: 0;
  display: flex;
}

.bootstrap4_scroll_table .fixed-table-header table{
  flex: 1;
}

.bootstrap4_scroll_table .fixed-table-body{
  border: 0;
  flex: 1;
}

.bootstrap4_scroll_table td, .bootstrap4_scroll_table th, .bootstrap4_scroll_table td div, .bootstrap4_scroll_table th div{
  white-space: normal !important; /* Only needed when it's set differntly somewhere else */
  word-wrap: break-word !important;
  vertical-align: middle !important;
}

.pac-container:after {
  /* Disclaimer: not needed to show 'powered by Google' if also a Google Map is shown */
  background-image: none !important;
  height: 0px;  
}

.pac-container, .pac-item{
    z-index: 2147483647 !important;
 }

.gmnoprint{
  display: none!important;
}

.gm-control-active{
  display: none!important;
}

.form-check {
    padding-left: 0!important;
}

.checkbox_cat{

  margin-right: 10px
}

.checkbox_km{

  margin-right: 10px
}

.checkbox_price{

  margin-right: 10px
}

.btn-circle {
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  padding: 0;
  border-radius: 50%;
}

/*license*/
.subscription-container {
  display: flex;
  align-items: center;
  flex-flow: row wrap;
  justify-content: space-around;
  width: 100%;
  max-width: 560px;
}

.subscription__title,
.subscription__main-feature,
.subscription__price {
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
  margin-top: 0;
  margin-bottom: 0;
  color: #85A9C1;
}

.subscription__main-feature {
  font-size: 19px;
}

.subscription__price {
  text-transform: lowercase;
}

.subscription__button {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 170px;
  margin: 5px 0;
  padding: 20px 0;
  border-radius: 5px;
  border: solid 3px white;
  background: white;
  box-shadow: 0px 0px 20px -10px rgba(0, 0, 0, 0.4);
  transition: transform .5s;
  cursor: pointer;
}
.subscription__button:before {
  content: "";
  display: block;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  margin: 10px;
  border: solid 3px #CDD1D5;
  transform: translateY(-30%);
}

input[type="radio"] {
  display: none;
}
input[type="radio"]:checked + label:before {
  background: #6E8CA0;
  font-size: 50px;
}
input[type="radio"]:checked + label {
  border: solid 3px #6E8CA0;
  background: white;
  transform: translateY(-10%);
  transition: transform .5s;
}
input[type="radio"]:checked + label .subscription__title,
input[type="radio"]:checked + label .subscription__main-feature,
input[type="radio"]:checked + label .subscription__price {
  color: #6E8CA0;
}

/* Signature */
.signature {
  color: #85A9C1;
  font-family: Roboto, sans-serif;
  padding-top: 25px;
}

.signature__name {
  transition: .5s;
  color: #6E8CA0;
  text-decoration: none;
}
.signature__name:hover {
  color: #1E6583;
  text-decoration: underline;
  transition: .5s;
}

.svg-icon {
  width: 1em;
  height: 1em;
  animation: pulse-animation .5s alternate infinite;
  fill: #BA2632;
}

@keyframes pulse-animation {
  to {
    transform: scale(1.2);
  }
}


/*loading*/
/*.lds-hourglass {
  display: inline-block;
  position: absolute;
  width: 80px;
  height: 80px;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 8px;
  box-sizing: border-box;
  border: 32px solid #cef;
  border-color: #cef transparent #cef transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}*/

/*.gm-style-iw.gm-style-iw-c{

  max-width: 100%!important;

}*/


/*style card ecommerce*/

.card_ecomerce .card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .1875rem
}

.card_ecomerce .card-img-actions {
    position: relative
}

.card_ecomerce .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 0.25rem;
    text-align: center
}

.card_ecomerce .card-img {
    /*width: 350px*/
}

.card_ecomerce .star {
    color: red
}

.card_ecomerce .bg-cart {
    background-color: orange;
    color: #fff
}

.card_ecomerce .bg-cart:hover {
    color: #fff
}

.card_ecomerce .bg-buy {
    background-color: green;
    color: #fff;
    padding-right: 29px
}

.card_ecomerce.bg-buy:hover {
    color: #fff
}


/*style card*/
.product, .product--pink, .product--yellow, .product--green, .product--red, .product--orange, .product--blue {
  /*box-shadow: 1px 5px 15px #CCC;
  width: 15em;
  height: auto;
  border-radius: 3px;
  padding: 2em;
  margin: 1em;
  overflow: hidden;
  position: relative;
  flex: auto;*/
}
.product--blue {
  background: linear-gradient(-45deg, #92DCE5 50%, rgba(255, 255, 255, 0.5) 50%);
}
.product--orange {
  background: linear-gradient(-45deg, #EF6F6C 50%, rgba(255, 255, 255, 0.5) 50%);
}
.product--red {
  background: linear-gradient(-45deg, #E84855 50%, rgba(255, 255, 255, 0.5) 50%);
}
.product--green {
  background: linear-gradient(-45deg, #70C1B3 50%, rgba(255, 255, 255, 0.5) 50%);
}
.product--yellow {
  background: linear-gradient(-45deg, #E8DB7D 50%, rgba(255, 255, 255, 0.5) 50%);
}
.product--pink {
  background: linear-gradient(-45deg, #FF386D 50%, rgba(255, 255, 255, 0.5) 50%);
}
.product img, .product--blue img, .product--orange img, .product--red img, .product--green img, .product--yellow img, .product--pink img {
  max-width: 100%;
  height: auto !important;
  text-align: center;
}
.product_inner {
  display: flex;
  align-items: center;
  flex-flow: column wrap;
}
.product_inner p {
  color: rgba(255, 255, 255, 0.9);
}
.product_inner button {
  border: 1px solid rgba(255, 255, 255, 0.5);
  color: #FFF;
  border-radius: 3px;
  padding: 1em 3em;
  margin: 1em 0 0 0;
  background: none;
  cursor: pointer;
  transition: background ease-in 0.25s;
}
.product_inner button:hover {
  background: white;
  color: #2B2D42;
}
.product_inner button:before {
  font-family: FontAwesome;
  content: "";
  color: #FFF;
  position: absolute;
  font-size: 1.5em;
  margin: 0 -1.5em;
}
.product_inner button:hover:before {
  color: #2B2D42;
}
.product_overlay {
  background: rgba(255, 255, 255, 0.9);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  transform: translateY(-500px);
  opacity: 0;
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
  align-items: center;
}
.product_overlay h2 {
  color: rgba(43, 45, 66, 0.7);
  font-size: 1.2em;
  margin: 1em 0;
}
.product_overlay i {
  color: rgba(43, 45, 66, 0.7);
  font-size: 1.5em;
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

[onClick] {
cursor:pointer;
}


/*style coupon*/
.coupon_area {
  display: table;
  min-height: 618px;
  min-width: 375px;
  border: 7px dashed #abaa8e
}

.coupon_content{
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.coupon_content h2,
.coupon_content h3 { 
  text-transform: uppercase;
  margin: 0;
}

.coupon_content .code{
  color: white;
  background-color: #ff0000db; 
  display: inline-block;
  padding: 10px;
  margin: 10px 0;
} 

.code_text { 
  padding: 10px 0;
  color: #4fad37;
}

.code_text_h2 { 
  color: #116bdc;
}

.code_text_h3 { 
  color: #116bdc;
}

.brand_discount {
    padding: 20px;
    background-image: url("bookmap_repo/logo_2.png");
    background-size: cover;
    /*background-position: center center;*/
    color: #fff;
    min-height: 618px;
    min-width: 375px;
    position: relative;
    /*box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);*/
    transition: all 0.6s cubic-bezier(1, -0.375, 0.285, 0.995);
    z-index: 1;

  }

  /*style disabled button search*/

  .disabled_button_search{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
  }

  /*rotate logo bookmap as loading*/
  .rotate_logo_loading {
    -webkit-animation: spin 1s linear infinite;
  }

  /* style marker */
  img[src$="#custom_marker"]{
    border: 2px solid #900 !important;
    border-radius:50%;
  }

</style>


</head>
<body>
<div class="overlay"></div>
<!-- navbar desktop -->
<nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none; height:78px; padding: 15px;">
  <div class="container col-md-12" style="margin:0; padding:0;">
    <a class="navbar-brand" onclick="change_vis('home')" style="margin-right: 0;">
      <img id="logo_loading" src="bookmap_repo/logo_2.png" width="30" height="30" class="rounded-circle align-bottom mr-1">
      Bookmap
    </a>
    <!-- <div class="lds-hourglass" style="display: none;"></div> -->
    <ul class="navbar-nav ml-auto d-block d-md-none">
     @if( auth()->guard('users_bookmap')->check() )
     <li class="nav-item">
      <a onclick="change_vis('cart');" style="padding-right: 0" class="btn btn-link"><i class="bx bx-heart icon-single" style="color: blue;"></i> <span class="badge badge-danger badge_cart">0</span>
        <a style="padding-right: 0" class="btn btn-link" onclick="open_menu(1);"><i class="bx bx-menu icon-single" style="color: blue;"></i></a>
      </a>
    </li>
    @else
    <li class="nav-item" onclick="open_menu(1);">
      <a style="padding-right: 0" class="btn btn-link"><i class="bx bx-heart icon-single" style="color: blue;"></i> <span class="badge badge-danger badge_cart">0</span>
        <a style="padding-right: 0" class="btn btn-link"><i class="bx bx-menu icon-single" style="color: blue;"></i></a>
      </a>
    </li>
    @endif
    </ul>
    <div class="collapse navbar-collapse">
      <div id="search_geo_prod" class="form-inline my-2 my-lg-0 mx-auto">
        <div class="dropdown">
          <button class="btn btn-success my-2 my-sm-0" type="button" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" id="dropdownCategoryButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-categories"></i>
          </button>
          <div class="dropdown-menu dropdown_cat" aria-labelledby="dropdownCategoryButton">
            <div style="height: 300px; overflow: auto">
            <div class="dropdown-item" >
              <div class="form-check" style="justify-content: left">
                <label><strong>@lang('bookmap/lang.categories')</strong></label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="1">
                <label >@lang('bookmap/lang.book')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="2">
                <label >@lang('bookmap/lang.vehicles')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="3">
                <label >@lang('bookmap/lang.technology')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="4">
                <label >@lang('bookmap/lang.clothing')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="5">
                <label >@lang('bookmap/lang.medicines')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="6">
                <label >Sport</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="7">
                <label >@lang('bookmap/lang.properties')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="8">
                <label >@lang('bookmap/lang.food_and_drink')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="9">
                <label >@lang('bookmap/lang.multimedia')</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="9">
                <label >@lang('bookmap/lang.other')</label>
              </div>
            </div>

            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <label><strong>Km</strong></label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_km" type="checkbox" >
                <label >1</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_km" type="checkbox" >
                <label >5</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_km" type="checkbox" >
                <label >10</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_km" type="checkbox" >
                <label >20</label>
              </div>
            </div>

            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <label><strong>@lang('bookmap/lang.price')</strong></label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >0-20</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >20-50</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >50-100</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >100-200</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >200-500</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >500-10000</label>
              </div>
            </div>

            </div>
          </div>
        </div>
        <input  class="form-control search_main_1 search_field" type="search" placeholder="@lang('bookmap/lang.search_products')..." aria-label="Search"  style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
        <button class="btn btn-success my-2 my-sm-0 search_button_1 disabled_button_search"><i class="bx bx-search"></i></button>
      </div>
      <ul class="navbar-nav">
        @if( auth()->guard('users_bookmap')->check() )
        <li class="nav-item" onclick="change_vis('cart')">
          <a class="btn btn-link"><i class="bx bx-heart icon-single" style="color: blue;"></i> <span class="badge badge-danger badge_cart">0</span></a>
        </li>
        @else
        <li class="nav-item" onclick="open_menu(1)">
          <a class="btn btn-link"><i class="bx bx-heart icon-single" style="color: blue;"></i> <span class="badge badge-danger badge_cart">0</span></a>
        </li>
        @endif
        <li class="nav-item">
          <button type="button" class="btn btn-link d-block" onclick="open_menu(1);" style="padding-right: 0">
            <i class="bx bx-menu icon-single"></i>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar mobile-->
<div id="navbar_searh_mobile_home" class="search-bar d-md-none">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="form-inline mb-3 mx-auto" style="flex-flow: nowrap;">
          <div class="dropdown">
            <button class="btn btn-success" type="button" style="border-top-right-radius: 0;border-bottom-right-radius: 0; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" id="dropdownCategoryButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bx bxs-categories"></i>
            </button>
            <div class="dropdown-menu dropdown_cat" aria-labelledby="dropdownCategoryButton2">
              <div style="height: 300px; overflow: auto">
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <label><strong>@lang('bookmap/lang.categories')</strong></label>
                </div>
              </div>
              <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_cat" type="checkbox" value="1">
                <label >@lang('bookmap/lang.book')</label>
              </div>
            </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="2">
                  <label >@lang('bookmap/lang.vehicles')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="3">
                  <label >@lang('bookmap/lang.technology')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="4">
                  <label >@lang('bookmap/lang.clothing')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="5">
                  <label >@lang('bookmap/lang.medicines')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="6">
                  <label >Sport</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="7">
                  <label >@lang('bookmap/lang.properties')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="8">
                  <label >@lang('bookmap/lang.food_and_drink')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="9">
                  <label >@lang('bookmap/lang.multimedia')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_cat" type="checkbox" value="9">
                  <label >@lang('bookmap/lang.other')</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <label><strong>Km</strong></label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_km" type="checkbox" >
                  <label >1</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_km" type="checkbox" >
                  <label >5</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_km" type="checkbox" >
                  <label >10</label>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="form-check" style="justify-content: left">
                  <input class="checkbox_km" type="checkbox" >
                  <label >20</label>
                </div>
              </div>

              <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <label><strong>@lang('bookmap/lang.price')</strong></label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >0-20</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >20-50</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >50-100</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >100-200</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >200-500</label>
              </div>
            </div>
            <div class="dropdown-item">
              <div class="form-check" style="justify-content: left">
                <input class="checkbox_price" type="checkbox" >
                <label >500-10000</label>
              </div>
            </div>
            </div>
            </div>
          </div>
          <input class="form-control search_main_2 search_field" type="search" placeholder="Search for products..." aria-label="Search" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
          <button class="btn btn-success search_button_2 disabled_button_search"><i class="bx bx-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<nav id="sidebar" style="padding: 0;overflow: hidden;">
  <div class="sidebar-header" style="padding: 15px; ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-10 pl-0">
          <a class="bx bx-undo" onclick="open_menu(1)" style="font-size: larger;">
          </a>
          @if( auth()->guard('users_bookmap')->check() )
          <a style="margin: 0; padding: 0" class="ml-3">@lang('bookmap/lang.hi')
            {{ auth()->guard('users_bookmap')->user()->username }}</a>
          @endif
          
        </div>
        <div class="col-2 pr-0">
          <button type="button" id="sidebarCollapseX" class="btn btn-link">
            <i class="bx bx-x icon-single" onclick="$('#pageSubmenu').collapse('toggle');"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar menu -->
  <ul class="list-unstyled components links" style="height:calc(100% - 73.31px);overflow: scroll;">
    <!-- login -->
    <li class="nav-item">
      <a id="lang-switch" style="flex-wrap: nowrap;" class="">
        <i class="bx bx-text mr-3"></i>
        <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/Italy-Flag.png" class="it">
        <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/United-Kingdom-flag.png" class="en">
      </a>
    </li>
    <li class="nav-item active">
      <a onclick="open_menu(10)"><i class="bx bx-info-circle mr-3"></i> @lang('bookmap/lang.whois')</a>
    </li>
    <li class="nav-item">
      <a onclick="open_menu(6)"><i class="bx bx-mail-send mr-3"></i> @lang('bookmap/lang.contact_us')</a>
    </li>
    <!-- <li class="nav-item addtohomescreen" style="display: none;">
      <a onclick="addToHomescreen()"><i class="bx bx-star mr-3"></i> @lang('bookmap/lang.add_to_home')</a>
    </li> -->
    @if( auth()->guard('users_bookmap')->check() )
    <li class="nav-item">
      <a onclick="change_vis('home')"><i class="bx bx-home mr-3"></i> Home</a>
    </li>
    <li class="nav-item">
      <a onclick="change_vis('products');"><i class="bx bx-archive mr-3"></i> @lang('bookmap/lang.my_products')</a>
    </li>
    <li class="nav-item">
      <a class="notify_chat" onclick="change_vis('contact');"><i class="bx bx-chat mr-3 notify_chat"></i> @lang('bookmap/lang.chat')</a>
    </li>
    <li class="nav-item">
      <a onclick="change_vis('cart');"><i class="bx bx-heart mr-3"></i> @lang('bookmap/lang.my_cart')</a>
    </li>
    <li class="nav-item">
      <a onclick="open_menu(4)"><i class="bx bx-list-ul mr-3"></i> @lang('bookmap/lang.profile')</a>
    </li>
    <!-- <li class="nav-item">
      <a onclick="open_menu(6)"><i class="bx bx-mail-send mr-3"></i> @lang('bookmap/lang.contact_us')</a>
    </li> -->
    <li class="nav-item">
      <a href="/logout_bookmap"><i class="bx bx-log-out mr-3"></i> Logout</a>
    </li>
    @if( auth()->guard('users_bookmap')->user()->id ==28 )
    <li class="nav-item">
      <a onclick="open_menu(7)"><i class="bx bxs-error mr-3"></i> Utenti registrati</a>
    </li>
    <li class="nav-item">
      <a onclick="open_menu(8)"><i class="bx bxs-error mr-3"></i> Visitatori</a>
    </li>
    <li class="nav-item">
      <a onclick="open_menu(9)"><i class="bx bxs-error mr-3"></i> Ricerche</a>
    </li>
    @endif
    @else
    <li class="nav-item">
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="bx bxs-user-circle mr-3"></i> Login / Register</a>
      <ul class="collapse" id="pageSubmenu" style="padding:0">
        <div id="page_login">
          @include('bookmap.login')
        </div>
      </ul>
    </li>
    @endif
  </ul>

  <!-- sidebar whois -->
  <div id="form_whois_user" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow-x: hidden; position: relative; padding: 15px; display: none"> 
    <div style="padding: 10px; text-align: center;">
      <h4>@lang('bookmap/lang.whois')</h4>
    </div>
    <div class="form-group">
        <label style="text-align: justify;">@lang('bookmap/lang.content_whois')</label>
    </div>
  </div> 

  <!-- sidebar add product form -->
  <div id="form_add_prod" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow-x: hidden; position: relative; padding: 15px; display: none"> 

      <div style="padding: 10px; text-align: center;">
        <h4 id="name_form_prod">@lang('bookmap/lang.add_prod')</h4>
      </div>

      <div class="form-group">
        <label>@lang('bookmap/lang.name_prod')</label>
        <input type="text" name="prod_name" id="prod_name" class="form-control form-creation-product" placeholder="@lang('bookmap/lang.name_prod')" required>
      </div>

      <div class="form-group">
        <label>@lang('bookmap/lang.categories')</label>
        <select class="form-control form-creation-product" name="prod_cat" id="prod_cat">
          <option value="" disabled selected>@lang('bookmap/lang.categories')</option>
          <option value="1">@lang('bookmap/lang.book')</option>
          <option value="2">@lang('bookmap/lang.vehicles')</option>
          <option value="3">@lang('bookmap/lang.technology')</option>
          <option value="4">@lang('bookmap/lang.clothing')</option>
          <option value="5">@lang('bookmap/lang.medicines')</option>
          <option value="6">Sport</option>
          <option value="7">@lang('bookmap/lang.properties')</option>
          <option value="8">@lang('bookmap/lang.food_and_drink')</option>
          <option value="9">@lang('bookmap/lang.multimedia')</option>
          <option value="9">@lang('bookmap/lang.other')</option>
        </select>
      </div>

      <div class="form-group">
        <label>@lang('bookmap/lang.desc_prod')</label>
        <textarea id="prod_desc" class="form-control form-creation-product" placeholder="@lang('bookmap/lang.desc_prod')" required></textarea>
      </div>

      <!-- <div class="form-group">
        <label>@lang('bookmap/lang.ean_prod')</label>
        <input type="text" name="prod_ean" id="prod_ean" class="form-control" placeholder="@lang('bookmap/lang.ean_prod')" required>
      </div> -->

      <!-- <div class="form-group" style="display: flex; flex-wrap: nowrap;">
        <div style="padding-right: 2px; flex-grow: 1">
          <label>@lang('bookmap/lang.qnt_prod')</label>
          <input type="text" name="prod_giac" id="prod_giac"  class="form-control form-creation-product" placeholder="@lang('bookmap/lang.qnt_prod')" required>
        </div>
        <div style="padding-left: 2px; flex-grow: 1">
          <label>@lang('bookmap/lang.price_prod')</label>
          <input type="text" name="prod_price" id="prod_price"  class="form-control form-creation-product" placeholder="@lang('bookmap/lang.price_prod')" required>
        </div>
      </div> -->

      <div class="form-group">
        <div>
          <label>@lang('bookmap/lang.price_prod')</label>
          <input type="text" name="prod_price" id="prod_price"  class="form-control form-creation-product" placeholder="@lang('bookmap/lang.price_prod')" required>
        </div>
      </div>

      <div class="form-group">
        <label>@lang('bookmap/lang.place_prod')</label>
        <input type="text" name="prod_place" onclick='initAutocomplete()' id="prod_place" class="form-control form-creation-product" placeholder="@lang('bookmap/lang.place_prod')" required>
      </div>

      <div class="form-group">
        <label>@lang('bookmap/lang.choose_file_prod')</label>
        <div class="custom-file" style="margin-bottom: .5rem;">
          <input type="file" class="custom-file-input upload-field-0" id="gallery-photo-add" multiple>
          <label class="custom-file-label" for="gallery-photo-add" data-browse="Choose file">@lang('bookmap/lang.choose_file_prod')</label>
        </div>
          <div class="img-wrap" id="button_clear">
          <div class="gallery"></div>
        </div>
      </div>

      <div>
        <button id="name_submit_prod" type="submit" class="btn btn-primary" style="width: 100%">@lang('bookmap/lang.add')</button>
      </div>

  </div>  

  <!-- sidebar user profile form -->
  <div id="form_setting_user" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow-x: hidden; position: relative; padding: 15px; display: none"> 

    <div style="padding: 10px; text-align: center;">
      <h4 id="name_form_prod">@lang('bookmap/lang.choose_file_prod')</h4>
    </div>

    @if( auth()->guard('users_bookmap')->check() )
    <input type="file" name="image-file" id="imgupload" onchange="previewFile()" style="opacity: 0;display: none">
    <div class="d-flex flex-column align-items-center text-center">
      <div onclick="$('#imgupload').trigger('click'); return false;">
        @if( auth()->guard('users_bookmap')->user()->image =="" )
        <img id="image_profile" src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">
        @else
        <img id="image_profile" src="bookmap_repo/img_profile/{{ auth()->guard('users_bookmap')->user()->image}}?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">
        @endif
      </div>
    </div>

    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" id="username" class="form-control form-creation-product" placeholder="Username" value="{{ auth()->guard('users_bookmap')->user()->username }}">
    </div>
    @endif

    <div>
      <button  type="submit" class="btn btn-primary mb-3" onclick="save_data_user()" style="width: 100%">@lang('bookmap/lang.save')</button>
    </div>

    <label>@lang('bookmap/lang.select_sub')</label>
    <div class="subscription-container mb-3 mt-3">
      <input type="radio" name="radio" id="option1" value="0" sum="0">
      <label for="option1" class="subscription__button">
        <h3 class="subscription__title">basic</h3>
        <h3 class="subscription__main-feature">0-5 @lang('bookmap/lang.products')</h3>
        <span class="subscription__price">Free/gratis</span>
      </label>

      <input type="radio" name="radio" id="option2" value="1" sum="4.99">
      <label for="option2" class="subscription__button">
        <h3 class="subscription__title">premium</h3>
        <h3 class="subscription__main-feature">6-50 @lang('bookmap/lang.products')</h3>
        <span class="subscription__price">4,99 €/@lang('bookmap/lang.month')</span>
      </label>

      <input type="radio" name="radio" id="option3" value="2" sum="9.99">
      <label for="option3" class="subscription__button">
        <h3 class="subscription__title">deluxe</h3>
        <h3 class="subscription__main-feature">@lang('bookmap/lang.illimitate')</h3>
        <span class="subscription__price">9,99 €/@lang('bookmap/lang.month')</span>
      </label>
    </div>

    <div>
      <div class="form-group">
        <label>@lang('bookmap/lang.discount_code')</label>
        <input type='text' class='form-control form-creation-product' id='code_discount' name='code_discount' value='' placeholder='@lang("bookmap/lang.insert_code")' maxlength='' >
        <button id="button_discount" onclick="validate_discount()" class="btn btn-primary mt-3" style="width: 100%">@lang('bookmap/lang.validate_discount')</button>
      </div>
      <div id='paypal-button' class="w-100"></div>
    </div>

  </div> 

  <!-- sidebar contact seller form -->
  <div id="form_contact_seller" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow-x: hidden; position: relative; padding: 15px; display: none"> 

    <div style="padding: 10px; text-align: center;">
      <h4 id="name_form_contact"></h4>
    </div>

    <div class="form-group">
      <label>@lang('bookmap/lang.message')</label>
      <textarea name="chat_message" id="chatSend" class="form-control form-creation-product" placeholder="@lang('bookmap/lang.write_seller')..." required></textarea> 
      <button class="btn btn-primary mt-3 w-100" id="fab_send">@lang('bookmap/lang.send')</button>
    </div> 

  </div>  

  <!-- sidebar contact us -->
  <div id="form_contact_us" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow-x: hidden; position: relative; padding: 15px; display: none"> 

    <div style="padding: 10px; text-align: center;">
      <h4>@lang('bookmap/lang.contact_us')</h4>
    </div>
    <form id="contact-form" name="contact-form" action="/contact_bookmap.php" method="POST">
      <div class="form-group">
        <label>Email</label>
        @if( auth()->guard('users_bookmap')->check() )
        <input type="text" name="email"  class="form-control form-creation-product" placeholder="Email" required value="{{ auth()->guard('users_bookmap')->user()->email}}">
        @else
        <input type="text" name="email"  class="form-control form-creation-product" placeholder="Email" required value="">
        @endif
      </div>
      <div class="form-group">
        <label>@lang('bookmap/lang.message')</label>
        <textarea name="message"  class="form-control form-creation-product" placeholder="@lang('bookmap/lang.write_message')..." required></textarea> 
        <button type="submit" class="btn btn-primary mt-3 w-100">@lang('bookmap/lang.send')</button>
      </div>
    </form> 

  </div> 

  @if( auth()->guard('users_bookmap')->check() )
  @if( auth()->guard('users_bookmap')->user()->id ==28 )
  <!-- sidebar register user -->
  <div id="form_register_user" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow: auto; position: relative; padding: 15px; display: none"> 
    <div style="padding: 10px; text-align: center;">
      <h4>Utenti registrati</h4>
    </div>
    <table class="card-table table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">User</th>
          <th scope="col">Abb</th>
          <th scope="col">Scad abb</th>
          <th scope="col">Qnt pro</th>
        </tr>
      </thead>
      <tbody id="append_list_user">
      </tbody>
    </table>
  </div> 
  <!-- sidebar visitor user -->
  <div id="form_visitor_user" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow: auto;  position: relative; padding: 15px; display: none"> 
    <div style="padding: 10px; text-align: center;">
      <h4>Visitatori</h4>
    </div>
    <table class="card-table table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ip</th>
          <th scope="col">From</th>
          <th scope="col">Accesso</th>
          <th scope="col">Tipo</th>
          <th scope="col">Count</th>
        </tr>
      </thead>
      <tbody id="append_list_visitor">
      </tbody>
    </table>
  </div> 
  <!-- sidebar ricerche user -->
  <div id="form_search_user" class="tab-content col-md-12" style="flex: 1 1 0%; height: calc(100% - 73.31px);  overflow: auto;  position: relative; padding: 15px; display: none"> 
    <div style="padding: 10px; text-align: center;">
      <h4>Ricerche</h4>
    </div>
    <table class="card-table table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Ip</th>
          <th scope="col">Ricerca</th>
          <th scope="col">Data</th>
        </tr>
      </thead>
      <tbody id="append_list_search">
      </tbody>
    </table>
  </div> 
  @endif 
  @endif 
</nav>

<!-- page -->
<div id="home" class="page">
<!-- mappa -->
  <div id="map" style="overflow: hidden; flex: 1;  overflow: hidden; position: absolute; right: 0; bottom: 0; left: 0;">
  </div>
  <div class="col-md-12" style="padding:0;">
    <ul style="" id="pagination_product" class="pagination"></ul>
  </div>
  <div style="padding:15px;position: absolute;bottom: 0px; right: 0px;">
    <button class="btn btn-success btn-circle btn-circle-lg m-1" onclick='open_menu(2)' style="box-shadow: 2px 2px 2px 1px darkslategrey;">
      <i class="bx bx-plus-medical"></i>
    </button>
  </div>
</div>
<div id="products" class="page" style="display: none;">
  @include("bookmap.products")
</div>
<div id="contact" class="page" style="display: none;">
  @include("bookmap.contact")
</div>
<div id="cart" class="page" style="display: none;">
  @include("bookmap.cart")
</div>

<!-- popup cookies -->
<div id="cookies" style="font-family:Lato,Roboto,sans-serif;font-weight:100;font-size:.9em;background-color:#191919;padding:.6em;text-align:center;border-radius:.2em;display:none;position:fixed;bottom:0;width:100%;z-index: 1;">
  <div style="display: flex;flex-wrap: wrap;justify-content: center">
    <span class="cookies-notice" style="color:#fff;padding: .4em;">
      @lang('bookmap/lang.privacy')
    </span>
    <span class="cookies-button" style="color:#191919;background-color:#28a745;padding:.4em;cursor:pointer;border-radius:.2em;">
      @lang('bookmap/lang.understand')
    </span>
  </div>
</div>

<!-- modal discount coupon -->
<div class="modal align-middle" id="offModal" aria-labelledby="oddModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.3); display: none;">
  <div class="modal-dialog modal-dialog-centered modal-margin" style="max-width: fit-content">
    <div class="modal-content" style="border: none">
      <div class="modal-body" style="padding: 0">
        <a class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 6px;right: 10px;" onclick="$('#offModal').hide()">×</a>
        <div class="" style="display: flex;justify-content: center;">
          <div class="brand_discount" style="flex-grow: 1;display: none"></div>
          <div class="" style="flex-grow: 1">
            <div class="coupon_area">
              <div class="coupon_content">
                <h2 class="code_text_h2">50% @lang('bookmap/lang.off_discount')</h2>
                <h3 class="code_text_h3">@lang('bookmap/lang.for_this_month')</h3>
                <h3 class="code_text">@lang('bookmap/lang.discount_code')</h3>
                <h2 class="code">HAPPYAUG50</h2>
              </div>
            </div>
          </div>
        </div>
      </div>                
    </div>
  </div>
</div>
 
 <!-- modal last products -->
<div class="modal align-middle" id="offModal_prod" aria-labelledby="oddModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.3);">
  <div class="modal-dialog modal-dialog-centered modal-margin" style="">
    <div class="modal-content" style="border: none">
      <div class="modal-body" style="padding: 0">
        <a class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 6px;right: 10px;" onclick="$('#offModal_prod').hide()">×</a>
        <div class="" style="display: flex;justify-content: center;">
          <div class="" style="flex-grow: 1">
            <div class="coupon_area">
              <div class="coupon_content" style="background: linear-gradient(-45deg, #92DCE5 50%, rgba(255, 255, 255, 0.5) 50%);text-align: center;width: 193px;">
                <div>
                  <img id="image_last_prod" src="bookmap_repo/img_user/28/128/1.jpg?refresh=123" alt="Admin" class="rounded-circle" width="250" height="250">
                </div>
                <div id="price_last_prod" style="color:#b5b5b5;font-size: 17pt;margin:5px 0px 7px;text-align: center;font-weight: lighter; font-size: 60px; text-align:center; line-height: 60px;">€19.90
                </div>
                <div id="title_last_prod" style="color: #63afdc; font-size: 17pt; text-align: center; word-wrap: break-word;">Shadow of the Tomb Raider: Definitive Edition - Xbox one
                </div>
                <div id="place_last_prod" style="color:#b5b5b5; font-size: 17pt; text-align: center; word-wrap: break-word;">Via schifio 344
                </div>
                <div style="display:flex;" class="mt-3">
                  <button id="add_cart_last_prod" style="flex-grow:1;margin: 5px;" type="button" class="btn btn-warning" onclick="add_cart(128,10)"><i class="bx bx-heart"></i></button>
                  <button id="contact_seller_last_prod" style="flex-grow:1;margin: 5px;" type="button" class="btn btn-primary" onclick="contact_seller('28','Mullegalf87','28.jpg');"><i class="bx bx-chat"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>                
    </div>
  </div>
</div>



<!-- modal news -->
<div class="modal align-middle" id="offModal_news" aria-labelledby="oddModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.3); display: none;">
  <div class="modal-dialog modal-dialog-centered modal-margin" style="max-width: fit-content">
    <div class="modal-content" style="border: none;">
      <div class="modal-body" style="padding: 0">
        <a class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;top: 6px;right: 10px;z-index: 1000;" onclick="$('#offModal_news').hide()">×</a>
        <div class="" style="display: flex;justify-content: center;">
          
          <div class="" style="flex-grow: 1">
            <div class="coupon_area">
              <div class="coupon_content coupon_content_video" style="line-height: 0;">
                @if( session()->get('locale')=="en" )
                <video  autoplay muted controls style="width: 100%;height: auto;" id="myVideo" >
                  <source src="bookmap_repo/video_en.mp4" type="video/mp4">
                </video>
                @else
                <video  autoplay muted controls style="width: 100%;height: auto;" id="myVideo" >
                  <source src="bookmap_repo/video_it.mp4" type="video/mp4">
                </video>
                @endif
                <!-- <div style="display: none;" id="myNews">
                  <h4 class="code_text_h2 mt-2">@lang('bookmap/lang.title_news')</h2>
                  <h4 class="code">@lang('bookmap/lang.desc_news')</h2>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>                
    </div>
  </div>
</div>

<script>

//sistemare parte della modifica
//testare con tantissimi prodotti
//ricontrollare sistema degli abbonamenti
//sistemare session lingua
//creare api per sincronizzazione giacenze

//marketing
//fare video intro funzionamento bookmap pubblicità a buttare su facebook e extractor email

//POST RILASCIO
//2)mettere voti e commenti dei clienti relativi al venditore, mettere stelline relative al venditore
//3)inserire mini avatar direttamente come marker nella mappa, forse no
//4)inserire indicazioni stradali al marker

//bloccare apertura console da browser
  window.oncontextmenu = function () {
      return false;
  };

  document.addEventListener("keydown", function(event){
      var key = event.key || event.keyCode;

      if (key == 123) {
          return false;
      } else if ((event.ctrlKey && event.shiftKey && key == 73) || (event.ctrlKey && event.shiftKey && key == 74)) {
          return false;
      }
  }, false);


  var address=window.location.href;
  address=address.split("#")[1];

//variabili globali
  var array_product=[];
  var array_product_page = [];
  var pos; //my position
  var my_position;
  var radius_km; 
  var pointMarker = [];
  var radius_circle = null;
  var circle=[];
  var collection_2=[];


//mettere tutte le funzioni che partono
  function initialize() {
   initMap();
   count_get_cart_user();
   check_subscription();
   //show_modal_discount();
   //show_modal_last_prod();
   // show_modal_news();
 }


 function check_visitor(type_interaction, search){

  $.getJSON("https://api.ipify.org/?format=json", function(e) {

    var ip_address=e.ip;

    if (ip_address!="188.217.226.172") {

      $.get("/check_token_exist_bookmap",{ip_address:ip_address, type_interaction:type_interaction, search:search, from:address},
        function(data){


        });

    }

  });

}

function show_modal_discount(){

  $.get('get_discount_code_bookmap',{code_discount:$(".code").text()},
    function(data){
      var res=jQuery.parseJSON(data);

      if (res.length!=0) {

        $("#offModal").show();

        if(window.matchMedia("(max-width: 767px)").matches){
          $(".brand_discount").hide();
          $(".coupon_area").css("min-height","auto");
          $(".coupon_area").css("width","100%!important");
          $(".modal-margin").css("max-width","");
        } else if(window.matchMedia("(max-width: 992px)").matches){
          $(".brand_discount").show();
        } else{
          $(".brand_discount").show();
        }

      }

    });

}

function show_modal_last_prod(){

  $.get('get_last_prod_bookmap',{},
    function(data){

      var res=jQuery.parseJSON(data);

      $("#offModal_prod").show();
      $("#image_last_prod").attr("src","bookmap_repo/img_user/"+res[0].id_vendor+"/"+res[0].id+"/"+res[0].name_img.split(",")[0]+"?refresh=<?php echo rand(1,999); ?>");
      $("#price_last_prod").text(res[0].price+ "€");
      $("#title_last_prod").text(res[0].name_prod);
      $("#place_last_prod").text(res[0].place);

      $("#add_cart_last_prod").attr("onclick","add_cart("+res[0].id+","+res[0].price+")");
      $("#contact_seller_last_prod").attr("onclick","contact_seller('"+res[0].id_vendor+"','"+res[0].name_vendor+"','"+res[0].image_vendor+"')");

    });

}

function show_modal_news(){

  $("#offModal_news").show();

  $(".brand_discount").hide();
  $(".coupon_area").css("min-height","auto");
  $(".coupon_area").css("width","100%!important");
  $(".modal-margin").css("max-width","");

}

document.getElementById('myVideo').addEventListener('ended',myHandler,false);
function myHandler(e) {
  $('#offModal_news').hide();
}

 //popup cookie
  $(document).ready(function() {
    if (undefined == $.cookie('cookies'))
      $('#cookies').show();
  });
  $('.cookies-button').click(function() {
    $.cookie(
      'cookies',
      'ok', {
        expires: 365,
        path: '/'
      }
      );
    $('#cookies').hide();
  });

 // code lang
 var url = "{{ route('BmLangChange') }}";

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
 

 //javascript mappa
  var map, infoWindow, marker_home, pointMarker_home;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 6
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        const svgMarker = {
          path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
          fillColor: "green",
          fillOpacity: 0.6,
          strokeWeight: 0,
          rotation: 0,
          scale: 2,
          anchor: new google.maps.Point(15, 30),
        };

        // var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var marker = new google.maps.Marker({
          position: pos,
          map: map,
          icon: svgMarker,
        });
        
        $(".search_button_1").attr("onclick","get_product(1)");
        $(".search_button_1").removeClass("disabled_button_search");
        $(".search_button_2").attr("onclick","get_product(2)");
        $(".search_button_2").removeClass("disabled_button_search");

        map.setZoom(12);
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }

  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          '<button class="btn btn-primary" onclick="location.reload()">Info: @lang("bookmap/lang.active_gps")</button>' :
                          'Info: @lang("bookmap/lang.not_support_browser")');
    infoWindow.open(map);
  }


//step1: get array_product
function get_product(pc_or_mobile){
array_product=[];
$("#logo_loading").addClass("rotate_logo_loading");
  $.get("/get_product_bookmap",{},
    function(data){

      var res=jQuery.parseJSON(data);

      for (var i = 0; i < res.length; i++) {

        array_product.push(res[i]);

      }

      search_main(pc_or_mobile);

      check_visitor("search",$(".search_main_"+pc_or_mobile).val());

    });

};

//1=pc
//2=mobile
function search_main(pc_or_mobile){
  array_product_page=[];
  new_array_product_for_km=[];
  $("#pagination_product").empty();
  clearOverlays();
  remove_circle();
  
  var array_cat_selected=[];
  var search_element=$(".search_main_"+pc_or_mobile).val();
  var new_array_product_for_cat=[];
  var new_array_product_for_search=[];
  var new_array_product_for_price=[];
  var new_array_product_for_page_rank=[];
  var size = 10;

  my_position = new google.maps.LatLng(pos);
  var distance_from_location;
  var collection=[];
  var new_array_product_for_km=[];
  var radius_price;
  
  //step2: get array_cat_selected
  $(".checkbox_cat:checked").each(function(){
    array_cat_selected.push({product_cat:$(this).val()});
  });

  //se non è selezionata la categoria fa funzionare solo il search con i km e prezzo auto
  if (array_cat_selected.length==0) {

    new_array_product_for_cat=array_product;

  }else{

    //step3: get array_product_filtered_for_cat
  new_array_product_for_cat = array_product.filter(({cat}) => array_cat_selected.some(x => x.product_cat == cat));

  }

  //i km da controllare a partire dalla mia distanza
  radius_km=$(".checkbox_km:checked:last").next().text(); 


  //se radius_km è vuoto mette uno standard di 20 km
  if (radius_km=="" || radius_km==undefined || radius_km==null) {
    radius_km="20";
  } 

  for (var i = 0; i < new_array_product_for_cat.length; i++) {
  
  collection[i] = new google.maps.LatLng(new_array_product_for_cat[i].lat, new_array_product_for_cat[i].lng);

  //distance in meters between your location and the marker
  distance_from_location = google.maps.geometry.spherical.computeDistanceBetween(my_position, collection[i]); 
  
    //se la distanza tra la mia posizione e i km stabiliti sono minori o uguali add marker
    if (distance_from_location <= radius_km * 1000) {
      //step4: get array_product_filtered_for_km
      new_array_product_for_km.push(new_array_product_for_cat[i]);

    }
  }

  //step5: get array_product_filtered_for_search_element
  new_array_product_for_search = new_array_product_for_km.filter((str)=>{
  return str.name_prod.toLowerCase().indexOf(search_element.toLowerCase()) >= 0 || str.desc.toLowerCase().indexOf(search_element.toLowerCase()) >= 0; 
  });

  //i price da
  radius_price=$(".checkbox_price:checked:last").next().text(); 

  //se radius_price è vuoto mette uno standard di 0-10000
  if (radius_price=="" || radius_price==undefined || radius_price==null) {
    radius_price="0-100000";
  } 

  //step6: get array_product_filtered_for_price
  new_array_product_for_price=new_array_product_for_search.filter(function(x){ 

    return x.price >= radius_price.split("-")[0] && x.price <= radius_price.split("-")[1];
    
  });
  
  //step7: ordina per page_rank
  new_array_product_for_page_rank=new_array_product_for_price.sort(function(a,b) 
  {
     return b.page_rank - a.page_rank;
  });

  if (new_array_product_for_price.length!=0) {

    //step8: dividi array ottenuto per pagine
    for (var i=0; i<new_array_product_for_price.length; i+=size) {
         array_product_page.push(new_array_product_for_price.slice(i,i+size));
    }
    
    //step9: appendo primi 10 risultati 
    //aggiunge i cerchi radianti per mostrare i km di raggio di ricerca    
    radius_circle = new google.maps.Circle({
      center: my_position,
      radius: radius_km * 1000,
      clickable: false,
      map: map,
      fillColor:'#218838',
      strokeColor:'transparent'
    });

    //inserisce i radianti dentro un array, utili per poter essere poi svuotati ogni volta che si effettua una ricerca
    circle.push(radius_circle);

    if(radius_circle) map.fitBounds(radius_circle.getBounds());

    var oms = new OverlappingMarkerSpiderfier(map, { 
      markersWontMove: true,   // we promise not to move any markers, allowing optimizations
      markersWontHide: true,   // we promise not to change visibility of any markers, allowing optimizations
      basicFormatEvents: true,  // allow the library to skip calculating advanced formatting information
    });


    for (var i = 0; i < array_product_page[0].length; i++) {

    collection_2[i] = new google.maps.LatLng(array_product_page[0][i].lat, array_product_page[0][i].lng); 

    var cat;

    if (array_product_page[0][i].cat==1) {

        cat="@lang('bookmap/lang.book')";

      }else if(array_product_page[0][i].cat==2){

        cat="@lang('bookmap/lang.vehicles')";

      }else if(array_product_page[0][i].cat==3){

        cat="@lang('bookmap/lang.technology')";

      }else if(array_product_page[0][i].cat==4){

        cat="@lang('bookmap/lang.clothing')";

      }else if(array_product_page[0][i].cat==5){

        cat="@lang('bookmap/lang.medicines')";

      }else if(array_product_page[0][i].cat==6){

        cat="Sport";

      }else if(array_product_page[0][i].cat==7){

        cat="@lang('bookmap/lang.properties')";

      }else if(array_product_page[0][i].cat==8){

        cat="@lang('bookmap/lang.food_and_drink')";

      }else if(array_product_page[0][i].cat==9){

        cat="Multimedia";

      }else if(array_product_page[0][i].cat==10){

        cat="@lang('bookmap/lang.other')";

      }

    const icon = {
      url: "bookmap_repo/img_profile/"+array_product_page[0][i].id_vendor+".jpg?refresh=<?php echo rand(1,999); ?>" + '#custom_marker', // url
      scaledSize: new google.maps.Size(50, 50), // scaled size
      // origin: new google.maps.Point(0,0), // origin
      // anchor: new google.maps.Point(0, 0) // anchor
    };

    pointMarker[i] = new google.maps.Marker({

      position: collection_2[i],
      map: map,
      product_id: array_product_page[numb][i].id,
      product_name: array_product_page[0][i].name_prod,
      product_seller: array_product_page[0][i].id_vendor,
      product_name_seller: array_product_page[0][i].name_vendor,
      product_name_category: cat,
      product_image_seller: array_product_page[0][i].image_vendor,
      product_description: array_product_page[0][i].desc,
      product_image:array_product_page[0][i].name_img,
      product_price:array_product_page[0][i].price,
      product_place:array_product_page[0][i].place,  
      id_user:array_product_page[0][i].id_vendor,
      icon: icon,

    });

    map.setZoom(12);
    map.panTo(pointMarker[i].position);

    google.maps.event.addListener(pointMarker[i], 'spider_click', function(){

      var content_info_window=
      "<div class='product--blue'>"+
      "<div class='product_inner'>";

      content_info_window+=  
      '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">'+
      '<div class="carousel-inner">';

      if (this.product_image=="") {

        content_info_window+=
        '<div class="carousel-item active" style="height:200px;">'+

        '<img src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" class="card-img img-fluid" alt="" style="width: 200px; height: 100% !important; object-fit: cover;">'+
  
        '</div>';

      }else{

        var active;
        for (var i = 1; i < this.product_image.split(",").length; i++) {

          if (i==1) {
            active="active";

          }else{
            active="";
          }

          content_info_window+=
          '<div class="carousel-item '+active+'" style="height:200px;">'+
      
          '<img src="bookmap_repo/img_user/'+this.product_seller+'/'+this.product_id+'/'+this.product_image.split(",")[i-1]+'?refresh=<?php echo rand(1,999); ?>" class="card-img img-fluid" alt="" style="width: 200px; height: 100% !important; object-fit: cover;">'+
   
          '</div>';

        }

      }

      content_info_window+=
      '</div>'+
      '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">'+
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Previous</span>'+
      '</a>'+
      '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">'+
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Next</span>'+
      '</a>'+
      '</div>'+ 
      '</div>';

      content_info_window+=
      '<div class="card-body text-center" style="padding: 0.25rem;">'+
      '<div class="mb-0">'+
      '<h6 class="font-weight-semibold mb-0" style="width: 193px;word-wrap: break-word;"> <a class="text-default mb-0" data-abc="true">'+this.product_name+'</a> </h6><label class="font-weight-semibold mb-0" style="width: 193px;word-wrap: break-word;"> <a class="text-muted" data-abc="true" >'+this.product_description+'</a></label>'+
      '</div>'+
      '<h3 class="mb-0 font-weight-semibold">'+this.product_price+' €</h3>'+
      '<div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>'+
      '<div class="text-muted mb-0" style="white-space: nowrap; width: 193px;  overflow: hidden; text-overflow: ellipsis;">'+this.product_name_category+'</div>'+
      '<div class="text-muted mb-0" style="white-space: nowrap; width: 193px;  overflow: hidden; text-overflow: ellipsis;">@lang("bookmap/lang.seller") '+this.product_name_seller+'</div>'+ 
      '<div class="text-muted mb-0" style="white-space: nowrap; width: 193px;  overflow: hidden; text-overflow: ellipsis;">'+this.product_place+'</div>'+ 
      '<div style="display:flex;">'+
      '<button style="flex-grow:1;margin: 5px;" type="button" class="btn btn-warning" onclick="add_cart('+this.product_id+','+this.product_price+')"><i class="bx bx-heart"></i></button>'+
      '<button style="flex-grow:1;margin: 5px;" type="button" class="btn btn-primary" onclick="contact_seller(\''+this.product_seller+'\',\''+this.product_name_seller+'\',\''+this.product_image_seller+'\');"><i class="bx bx-chat"></i></button>'+
      '</div>'+
      '</div>'+
      '</div>';

        infoWindow.setContent(content_info_window);
      
        infoWindow.open(map, this);

      });

      oms.addMarker(pointMarker[i]);

    }

    if (array_product_page.length!=1) {

      $("#pagination_product").append("<li id='left' onclick='show_result_page(1)' class='paginate_button page-item active' style='padding: 1px !important;position:absolute; left:0'><i style='padding: 15px;color:white;' class='bx bx-left-arrow icon-single'></i></li><li id='right' onclick='show_result_page(2)' class='paginate_button page-item active' style='padding: 1px !important;position:absolute; right:0'><i class='bx bx-right-arrow icon-single' style='padding: 15px;color:white;'></i></li>");

    }
    $("#left").hide();
  
  } else {

    $.notify({

      title: '<strong>Info</strong>',
      message: "<br>@lang('bookmap/lang.not_found_result')",

    },{

      element: 'body',
      type: "info",
      width: 'auto',
      allow_dismiss: true,
      offset: 20,
      placement: {
        from: "bottom",
        align: "center",
      }
      
    });

  }
  
  $("#logo_loading").removeClass("rotate_logo_loading");
}


//mostro l'html delle pagine viste, rimuovendo i precedenti risultati
var old_numb=0;
var numb=0;
var max_numb;
function show_result_page(type){

  clearOverlays();
  remove_circle();
  collection_2=[];

  max_numb=array_product_page.length-2;
  //less
  if (type==1) {
    if (numb==1) {

      $("#right").show();
      $("#left").hide();

    }else{

      $("#right").show();
      $("#left").show();
    }
      
      numb=old_numb-1; 
      old_numb=numb;

  //more
  } else {
    if (numb==max_numb) {

      $("#right").hide();
      $("#left").show();
    } else{

      $("#right").show();
      $("#left").show();

    }
      
      numb=old_numb+1;
      old_numb=numb;
  } 

  //step10: appendo restanti risultati delle pagine
  //aggiunge i cerchi radianti per mostrare i km di raggio di ricerca    
  radius_circle = new google.maps.Circle({
    center: my_position,
    radius: radius_km * 1000,
    clickable: false,
    map: map,
    fillColor:'#218838',
    strokeColor:'transparent'
  });

  //inserisce i radianti dentro un array, utili per poter essere poi svuotati ogni volta che si effettua una ricerca
  circle.push(radius_circle);

  if(radius_circle) map.fitBounds(radius_circle.getBounds());

  // var oms = new OverlappingMarkerSpiderfier(map, { 
  //     markersWontMove: true,   // we promise not to move any markers, allowing optimizations
  //     markersWontHide: true,   // we promise not to change visibility of any markers, allowing optimizations
  //     basicFormatEvents: true  // allow the library to skip calculating advanced formatting information
  //   });

  for (var i = 0; i < array_product_page[numb].length; i++) {

  collection_2[i] = new google.maps.LatLng(array_product_page[numb][i].lat, array_product_page[numb][i].lng); 
  
  var cat;

    if (array_product_page[0][i].cat==1) {

        cat="@lang('bookmap/lang.book')";

      }else if(array_product_page[0][i].cat==2){

        cat="@lang('bookmap/lang.vehicles')";

      }else if(array_product_page[0][i].cat==3){

        cat="@lang('bookmap/lang.technology')";

      }else if(array_product_page[0][i].cat==4){

        cat="@lang('bookmap/lang.clothing')";

      }else if(array_product_page[0][i].cat==5){

        cat="@lang('bookmap/lang.medicines')";

      }else if(array_product_page[0][i].cat==6){

        cat="Sport";

      }else if(array_product_page[0][i].cat==7){

        cat="@lang('bookmap/lang.properties')";

      }else if(array_product_page[0][i].cat==8){

        cat="@lang('bookmap/lang.food_and_drink')";

      }else if(array_product_page[0][i].cat==9){

        cat="Multimedia";

      }else if(array_product_page[0][i].cat==10){

        cat="@lang('bookmap/lang.other')";

      }
    
      const icon = {
      url: "bookmap_repo/img_profile/"+array_product_page[0][i].id_vendor+".jpg?refresh=<?php echo rand(1,999); ?>" + '#custom_marker', // url
      scaledSize: new google.maps.Size(50, 50), // scaled size
      // origin: new google.maps.Point(0,0), // origin
      // anchor: new google.maps.Point(0, 0) // anchor
    };

    pointMarker[i] = new google.maps.Marker({

      position: collection_2[i],
      map: map,
      product_id: array_product_page[numb][i].id,
      product_name: array_product_page[0][i].name_prod,
      product_seller: array_product_page[0][i].id_vendor,
      product_name_seller: array_product_page[0][i].name_vendor,
      product_name_category: cat,
      product_image_seller: array_product_page[0][i].image_vendor,
      product_description: array_product_page[0][i].desc,
      product_image:array_product_page[0][i].name_img,
      product_price:array_product_page[0][i].price,
      product_place:array_product_page[0][i].place,  
      id_user:array_product_page[0][i].id_vendor,
      icon: icon,

    });

  map.setZoom(12);
  map.panTo(pointMarker[i].position);

  google.maps.event.addListener(pointMarker[i], 'spider_click', function(){
   
    var content_info_window=
      "<div class='product--blue'>"+
      "<div class='product_inner'>";

      content_info_window+=  
      '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">'+
      '<div class="carousel-inner">';

      if (this.product_image=="") {

        content_info_window+=
        '<div class="carousel-item active" style="height:200px;">'+

        '<img src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" class="card-img img-fluid" alt="" style="width: 200px; height: 100% !important; object-fit: cover;">'+
  
        '</div>';

      }else{

        var active;
        for (var i = 1; i < this.product_image.split(",").length; i++) {

          if (i==1) {
            active="active";

          }else{
            active="";
          }

          content_info_window+=
          '<div class="carousel-item '+active+'" style="height:200px;">'+
      
          '<img src="bookmap_repo/img_user/'+this.product_seller+'/'+this.product_id+'/'+this.product_image.split(",")[i-1]+'?refresh=<?php echo rand(1,999); ?>" class="card-img img-fluid" alt="" style="width: 200px;; height: 100% !important; object-fit: cover;">'+
   
          '</div>';

        }

      }

      content_info_window+=
      '</div>'+
      '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">'+
      '<span class="carousel-control-prev-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Previous</span>'+
      '</a>'+
      '<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">'+
      '<span class="carousel-control-next-icon" aria-hidden="true"></span>'+
      '<span class="sr-only">Next</span>'+
      '</a>'+
      '</div>'+ 
      '</div>';

      content_info_window+=
      '<div class="card-body text-center" style="padding: 0.25rem;">'+
      '<div class="mb-0">'+
      '<h6 class="font-weight-semibold mb-0" style="width: 193px;word-wrap: break-word;"> <a class="text-default mb-0" data-abc="true">'+this.product_name+'</a> </h6><label class="font-weight-semibold mb-0" style="width: 193px;word-wrap: break-word;"> <a class="text-muted" data-abc="true" >'+this.product_description+'</a></label>'+
      '</div>'+
      '<h3 class="mb-0 font-weight-semibold">'+this.product_price+' €</h3>'+
      '<div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>'+
      '<div class="text-muted mb-0" style="white-space: nowrap; width: 193px;  overflow: hidden; text-overflow: ellipsis;">'+this.product_name_category+'</div>'+
      '<div class="text-muted mb-0" style="white-space: nowrap; width: 193px;  overflow: hidden; text-overflow: ellipsis;">@lang("bookmap/lang.seller") '+this.product_name_seller+'</div>'+ 
      '<div class="text-muted mb-0" style="white-space: nowrap; width: 193px;  overflow: hidden; text-overflow: ellipsis;">'+this.product_place+'</div>'+ 
      '<div style="display:flex;">'+
      '<button style="flex-grow:1;margin: 5px;" type="button" class="btn btn-warning" onclick="add_cart('+this.product_id+','+this.product_price+')"><i class="bx bx-heart"></i></button>'+
      '<button style="flex-grow:1;margin: 5px;" type="button" class="btn btn-primary" onclick="contact_seller(\''+this.product_seller+'\',\''+this.product_name_seller+'\',\''+this.product_image_seller+'\');"><i class="bx bx-chat"></i></button>'+
      '</div>'+
      '</div>'+
      '</div>'; 

        infoWindow.setContent(content_info_window);
 
        infoWindow.open(map, this);
    });

    oms.addMarker(pointMarker[i]);

  }
}  


$('.carousel').carousel({
  interval: false
})

//clear marker
function clearOverlays() {
  if (pointMarker) {
        for (i in pointMarker) {
            pointMarker[i].setMap(null);
        }
        pointMarker = [];
    }
} 

//clear radius
function remove_circle(){
  for (var i = 0; i < circle.length; i++ ) {
    circle[i].setMap(null);
  }
  circle=[];  
}

//detect mobile device
function detect_device(){

    if(window.matchMedia("(max-width: 767px)").matches){
        // The viewport is less than 768 pixels wide
        $("#map").css("height", "calc(100% - 136px)");
        // $(".lds-hourglass").css("left", "143.97px");
        //$('.addtohomescreen').show();

         
    } else{
        // alert("This is a tablet or desktop.");
        $("#map").css("height", "calc(100% - 78px)");
        $("#sidebar").css("width","35%");
        // $(".lds-hourglass").css("left", "105.97px"); 
    }  
};


  //cambia pagina
  var myhistory = [];
  var data = {!! $data !!};
  page_to_go = data["page"];
  change_vis(page_to_go);
  
  // var page_old="home";
  function change_vis(page, history){
    var page_old=$(".page").filter(":visible").attr("id");
    $("#"+page_old).hide();
    page_build(page);
    if(history != 0){
        myhistory.push(page_old);
    }

    page_old=page;
    $("#"+page).show();

    button_back(page);

    detect_device();

    //lato mobile chiude il sidebar
    $("#sidebar").removeClass("active");
    $(".overlay").removeClass("visible");
  }  


  function button_back(page_name){

    history.pushState(null, null, history.pushState(null, null, window.location.href.substr(0, window.location.href.indexOf(page_name))));
    history.pushState(null, null, window.history.replaceState(null, null, "/bm?page="+page_name));
    window.onpopstate = function () {

      if (page_name=="home" && myhistory.length==1) {

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
          history.go(1);
        };
        return "http://176.107.131.30/bookmap";
        
      } else {
       change_vis(myhistory.pop(), 0); 
     }
   };
 }  


  function page_build(page_name){
    switch(page_name){
      case 'home':
      $("#search_geo_prod").css('visibility','');
      $("#navbar_searh_mobile_home .container").show();
      break;
      case 'products':
      var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
      if (id_user=="") {
        window.location.replace("/bookmap");
      }else{
        
        $("#logo_loading").addClass("rotate_logo_loading");
        $("#table_product").DataTable().destroy();
        $("#navbar_searh_mobile_home .container").hide();
        $("#navbar_searh_desktop_home .container").hide();
        $("#map").css("height", "calc(100% - 78px)");
        start_function_product();
        $("#search_geo_prod").css('visibility','hidden');
      }
      break;
      case 'contact':
      var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
      if (id_user=="") {
        window.location.replace("/bookmap");
      }else{
        start_function_contact();
        $("#search_geo_prod").css('visibility','hidden');
        $("#navbar_searh_mobile_home .container").hide();
      }
      case 'cart':
      var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
      if (id_user=="") {
        window.location.replace("/bookmap");
      }else{
        start_function_cart();
        $("#logo_loading").addClass("rotate_logo_loading");
        $("#search_geo_prod").css('visibility','hidden');
        $("#navbar_searh_mobile_home .container").hide();
      }
      default:

    }
    check_visitor(page_name);

  }

//cambia pagina

//cambia border bottom dei bottoni della navbar del desktop e background del mobile
  $(".nav-item").click(function(){
    $(".nav-item").each(function(){
      $(this).removeClass("active");
    })
    $(this).addClass("active");
  })

  //apre il menu laterale da desktop
  //il resto= menu principale
  //2=add prod
  //3=update prod
  //4=config user
  //5=contact seller
  //6=contact us
  //7-8-9=report
  //10=info

    function open_menu(type, numb, id_vendor, id_prod, name, cat, desc, price, place, name_img){

    $(".overlay").addClass("visible");
    $("#sidebar").addClass("active");

    if (type==2) {

      $(".list-unstyled").hide();
      $("#form_add_prod").show();
      $("#form_setting_user").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();

      check_visitor("add_prod");

      $(".container-image").show();
      $("#name_form_prod").text("@lang('bookmap/lang.add_prod')");
      $("#name_submit_prod").text("@lang('bookmap/lang.add')");
      $(':input').val('');
      $(".append_image_clear").remove();
      $("#name_submit_prod").attr("onclick", "check_form_product()");
      
    } else if(type==3) {
      
      $(".list-unstyled").hide();
      $("#form_add_prod").show();
      $("#form_setting_user").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();

      $(".gallery").empty();
      $("#name_form_prod").text("@lang('bookmap/lang.update_prod')");
      $("#name_submit_prod").text("@lang('bookmap/lang.update')");
      $(".container-image").hide();

      $("#prod_name").val(name);
      $("#prod_cat").val(cat);
      $("#prod_desc").val(desc);
      // $("#prod_ean").val(ean);
      // $("#prod_giac").val(qnt);
      $("#prod_price").val(price);
      $("#prod_place").val(place);

      var split_image=name_img.split(",");

      if (split_image.length==1) {

        $(".gallery").append('<img src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" class="append_image_clear" style="width: 100%; height: 200px; object-fit: cover;margin-bottom: 3px;">');

      } else{

        for (var i = 1; i < split_image.length; i++) {        

        $(".gallery").append('<img src="bookmap_repo/img_user/'+id_vendor+'/'+id_prod+'/'+split_image[i-1]+'?refresh=<?php echo rand(1,999); ?>" class="append_image_clear" style="width: 100%; height: 200px; object-fit: cover;margin-bottom: 3px;">');
      }

      }
      
      $("#name_submit_prod").attr("onclick", "save_input_prod(\""+numb+"\",\""+id_prod+"\")");

    } else if(type==4) {

      $(".list-unstyled").hide();
      $("#form_add_prod").hide();
      $("#form_setting_user").show();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();

      var code_subscription="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->subscription}}@endif";
      $('#option'+code_subscription).prop('checked',true);
      var $radios = $('input:radio[name=radio]');
      $radios.filter('[value='+code_subscription+']').prop('checked', true);

    } else if(type==5) {

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").hide();
      $("#form_contact_us").hide();
      $("#form_contact_seller").show();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();
      
    } else if(type==6) {

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").show();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();
      
    }else if(type==7) {

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").show();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();


      $("#append_list_user").empty();
      $.get('/get_user_bookmap', {},
        function(data){ 
          var res =jQuery.parseJSON(data); 
          var sub;
          var date;
          for (var i = 0; i < res.length; i++) {

            if (res[i].subscription==0) {
              sub="free";
            }else if(res[i].subscription==1){
              sub="premium";
            }else{
              sub="deluxe";
            }

            if(res[i].date_subscription==null){
              date=0;
            }else{
              date=formatDate(res[i].date_subscription);
            }

            $("#append_list_user").append('<tr>'+
              '<td>'+res[i].id+'</td>'+
              '<td>'+res[i].username+'</td>'+
              '<td>'+sub+'</td>'+
              '<td>'+date+'</td>'+
              '<td>'+res[i].qnt_prod+'</td>'+
              '</tr>');
          }

        });
      
    }else if(type==8){

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").show();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();

      $("#append_list_visitor").empty();
      $.get('/get_visitor_bookmap', {},
        function(data){ 
          var res =jQuery.parseJSON(data); 
          var sub;
          var date;
          for (var i = 0; i < res.length; i++) {

            $("#append_list_visitor").append('<tr>'+
              '<td>'+res[i].ip_address+'</td>'+
              '<td>'+res[i].from_fb+'</td>'+
              '<td>'+res[i].date_stamp+'</td>'+
              '<td>'+res[i].type_interaction+'</td>'+
              '<td>'+res[i].numb_access+'</td>'+
              '</tr>');
          }

        }); 

    }else if(type==9){

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").show();
      $("#form_whois_user").hide();

      $("#append_list_search").empty();
      $.get('/get_search_bookmap', {},
        function(data){ 
          var res =jQuery.parseJSON(data); 
          var sub;
          var date;
          for (var i = 0; i < res.length; i++) {

            $("#append_list_search").append('<tr>'+
              '<td>'+res[i].ip_address+'</td>'+
              '<td>'+res[i].search+'</td>'+
              '<td>'+res[i].date+'</td>'+
              '</tr>');
          }

        });

    }else if(type==10){

      check_visitor("whois");

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").hide();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").show();

    }else{

      $("#form_setting_user").hide();
      $("#form_add_prod").hide();
      $(".list-unstyled").show();
      $("#form_contact_seller").hide();
      $("#form_contact_us").hide();
      $("#form_register_user").hide();
      $("#form_visitor_user").hide();
      $("#form_search_user").hide();
      $("#form_whois_user").hide();   

      if(!$("#pageSubmenu").hasClass('show')){
        $('#pageSubmenu').collapse('toggle');
        $(".nav-item").removeClass("active");
      }
      else {
        // console.log("collapsed")
      }

     //  $('#pageSubmenu').on('shown.bs.collapse', function () {
     //   console.log("Opened")
     // });

     //  $('#pageSubmenu').on('hidden.bs.collapse', function () {
     //   console.log("Closed")
     //   $('#pageSubmenu').collapse('toggle');
     //   $(".nav-item").removeClass("active");
     // });

      

    }
      
  }

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
    return day+"-"+month+"-"+year;

  }

  //chiude il menu laterale da desktop
  $("#sidebarCollapseX").on("click", function () {
    $(".overlay").removeClass("visible");
    $("#sidebar").removeClass("active");
  });


  function check_subscription(){
    //DARIO

     $.get('/check_subscription_bookmap',{},
      function(data){
        
        var res=jQuery.parseJSON(data);

      });

  }

  //inserire il mandatory dei dati del form del prodotto quando crei il prodotto
  function check_form_product(){

    $("#form_add_prod .form-control:not(:eq(3))").each(function(index){

      if ($(this).val()=="" || $(this).val()==null) {

        $(this).css("border-color","red");

      } else{

        $(this).css("border-color","black");

        $(this).addClass("border_black");

      }
      
    })

    if ($(".border_black").length==$("#form_add_prod .form-control:not(:eq(3))").length) {

      add_input_prod();

    }

  }

  //aggiunge prodotto
  function add_input_prod(){

   var name_prod=$("#prod_name").val();
   var cat_prod=$("#prod_cat").val();
   var desc_prod=$("#prod_desc").val();
   // var ean_prod=$("#prod_ean").val();
   // var qnt_prod=$("#prod_giac").val();
   var price_prod=$("#prod_price").val();
   var place_prod=$("#prod_place").val();

   var geocoder = new google.maps.Geocoder();
   geocoder.geocode({address:place_prod,region:'no'},function(results,status){
    if(status.toLowerCase() == 'ok'){
      var coords = new google.maps.LatLng(results[0]['geometry']['location'].lat(),results[0]['geometry']['location'].lng());
      prod_lat=coords.lat();
      prod_lng=coords.lng();

      $.get('/check_count_product_user',{},
      function(data){
        
        var res=jQuery.parseJSON(data);

        //result 0=puoi creare
        //result 1=non puoi creare, mi porta direttamente al profilo per l'acquisto dell'abbonamento
        //result 2=non sei loggato, loggati

        if (res==1) {

          open_menu(4);

        } else if(res==2){

          open_menu(1);

        }else{

          // $.get('/add_product_bookmap',{name_prod:name_prod, cat_prod:cat_prod, desc_prod:desc_prod, ean_prod:ean_prod, qnt_prod:qnt_prod, price_prod:price_prod, place_prod:place_prod, lat_prod:prod_lat, lng_prod:prod_lng},
          $.get('/add_product_bookmap',{name_prod:name_prod, cat_prod:cat_prod, desc_prod:desc_prod, price_prod:price_prod, place_prod:place_prod, lat_prod:prod_lat, lng_prod:prod_lng},
            function(data){

              var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
              var id_prod=data;
              const formData = new FormData();

              for (var i = 0; i < prod_file.length; i++) {
          
                  formData.append('prod_file[]', prod_file[i]);

                    }

                  formData.append('id_user', id_user);
                  formData.append('id_prod', id_prod);
                  setTimeout(function(){
                    $.ajax({
                      url : "bookmap_repo/add_product.php",
                      type: 'POST',
                      data : formData,
                      processData: false, 
                      contentType: false,  
                      cache:false,
                      success : function(e) {
                        prod_file.name=0;
                                             
                        $.get('/add_image_product_bookmap',{id_prod:id_prod, image_prod:e},
                          function(data){

                            $.notify({

                              title: '<strong>Info</strong>',
                              message: "<br>@lang('bookmap/lang.prod_created')",

                            },{

                              element: 'body',
                              type: "info",
                              width: 'auto',
                              allow_dismiss: true,
                              offset: 20,
                              placement: {
                                from: "bottom",
                                align: "center",
                              }
                            });

                            change_vis('home');
                          });

                      },
                      error: function (data, textStatus, errorThrown) {

                      },
                    });
                  },2000);

              });

            }  
        });

        }

      });  

    }

  //aggiungi prodotti al carrello
  function add_cart(id_prod, price_prod){

    var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";

    if (id_user=="") {

      open_menu(1);

    }else{

      $.get('/add_cart_bookmap',{id_prod:id_prod, price_prod:price_prod},
      function(data){
     
        $(".badge_cart").text(data);

      });

    }

  }

  //ottieni il numero di prodotti nel carrello
  function count_get_cart_user(){

    var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";

    if (id_user!="") {

      $.get('/count_get_cart_bookmap',{},
      function(data){

        var res=jQuery.parseJSON(data);

        $(".badge_cart").text(res[0].count_prod_cart);

      });

    }

  }


  //define chat color della chat
if (typeof(Storage) !== "undefined") {
  if (localStorage.getItem('fab-color') === null) {
    localStorage.setItem("fab-color", "blue");
  }
  $('.fabs').addClass(localStorage.getItem("fab-color"));
} else {
  $('.fabs').addClass("blue");

}

//script profile
function previewFile() {

  var preview = $("#image_profile")[0];
  var file=$('#imgupload')[0].files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {

    $("#image_profile").attr("src",reader.result)

  }

  if (file) {
    reader.readAsDataURL(file);

     new ImageCompressor(file, {
            quality: 0.6,
            success(result) {
              var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
              var ext_file=result.name.split(".")[1];
              const formData = new FormData();
              formData.append('file', result, result.name);
              formData.append('id_user', id_user);
              formData.append('ext_file', ext_file);

              setTimeout(function(){
                $.ajax({
                  url : "bookmap_repo/upload_img_profile_bookmap.php",
                  type: 'POST',
                  data : formData,
                  processData: false, 
                  contentType: false,  
                  cache:false,
                  success : function(file_name) {
                    $.get("/upload_img_profile_bookmap",{file_name:file_name},
                      function(data){
                        // window.location.replace("/bm?page=profile");
                    });

                  },
                  error: function (data, textStatus, errorThrown) {

                  },
                });
              },2000);

            },
            error(e) {
              console.log(e.message);
            },
          });

  } else {
    preview.src = "";
  }
}

function save_data_user(){

  var username=$("#username").val();
  $.get("/save_data_user_bookmap",{username:username},
    function(data){

      $("#sidebarCollapseX").click();

  });

}


var discount=0;
var sum_cart=0;

function validate_discount(){

  if ($("#code_discount").val()=="") {

    $("#button_discount").removeClass("btn-primary").removeClass("btn-sucess").addClass("btn-danger").text("@lang('bookmap/lang.invalid_discount')");

  }else{

   $.get('get_discount_code_bookmap',{code_discount:$("#code_discount").val()},
    function(data) {

      var res=jQuery.parseJSON(data);

      if (res.length==0) {

        $("#button_discount").removeClass("btn-primary").removeClass("btn-sucess").addClass("btn-danger").text("@lang('bookmap/lang.invalid_discount')");

        sum_cart=$('input:radio[name=radio]:checked').attr("sum");

      }else{

        $("#button_discount").removeClass("btn-primary").removeClass("btn-danger").addClass("btn-success").text("@lang('bookmap/lang.confirmed_discount')");

        sum_cart=($('input:radio[name=radio]:checked').attr("sum"))-(res[0].discount*$('input:radio[name=radio]:checked').attr("sum")/100)+(res[0].discount/100);

      }

      sum_cart=parseFloat(sum_cart).toFixed(2);

    });

 }

}


paypal.Buttons({

    style: {
          shape: 'rect',
          color: 'blue',
          layout: 'horizontal',
          label: 'paypal',
          
        },

    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.     

      return actions.order.create({
        purchase_units: [{
          amount: {
            value: sum_cart
          }
        }]
      });

    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {

            var username="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->username}}@endif";
            var email="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->email}}@endif";
            var sum=$('input:radio[name=radio]:checked').attr("sum");
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 2).padStart(2, '0'); 
            var yyyy = today.getFullYear();
            today = dd + '/' + mm + '/' + yyyy;
            var date_expiration=today;

            var form_data = new FormData();
            form_data.append('username', username);
            form_data.append('email', email);
            form_data.append('sum', sum);
            form_data.append('date_expiration', date_expiration);


            $.ajax({

              url: 'bookmap_repo/send_email_order_bookmap.php',     
              dataType: 'text',        
              cache       : false,
              contentType: false,
              processData : false,
              data: form_data,                  
              type: 'POST',
              async: true,
              headers: {
                "cache-control": "no-cache"
              },

              success: function(output){

                $.get("/change_subscription_bookmap",{state_subscription:$('input:radio[name=radio]:checked').val()},
                  function(data){

                    $.notify({

                      title: '<strong>Info</strong>',
                      message: "<br>@lang('bookmap/lang.success')",

                    },{

                      element: 'body',
                      type: "info",
                      width: 'auto',
                      allow_dismiss: true,
                      offset: 20,
                      placement: {
                        from: "bottom",
                        align: "center",
                      }
                    });

                    setTimeout(function(){ location.reload(); }, 3000);

                  });

              }

            });  

      });
    }
  }).render('#paypal-button');

     
</script>
</body>
</html>
