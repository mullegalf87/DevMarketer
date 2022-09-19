<html>
<head>
    <!-- dataresponsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery 3.5 jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap 4.5 bootstrap-->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- lazyload -->
    <script type="text/javascript" src="/js/jquery.lazy.min.js"></script>
    <!-- drug and drop image -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- imagecompressor -->
    <script type="text/javascript" src="/js/image-compressor.js"></script>
    <!-- fontawsome -->
    <script src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    <!-- boxicons -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css'>
    <!-- font -->
    <link href="http://fonts.cdnfonts.com/css/silk-serif?styles=108358" rel="stylesheet"> 
    <link href="http://fonts.cdnfonts.com/css/futura-pt?styles=117667" rel="stylesheet">
    <!-- lettering -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
    <!-- paypal -->
    <script src="https://www.paypal.com/sdk/js?client-id=AaLPg6yTVNvanJXpjFSt0MsUZ4yG7FUVCuAHRJiFcjrGyEqWBKyz1kr60ysO079Y-WAdIlEmcKOE6amA&currency=EUR"></script>
    <!-- sb-fo43uq10804200@personal.example.com pass: 12345678 -->
    <!-- highcharts -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <style>
        @import url('http://fonts.cdnfonts.com/css/silk-serif?styles=108358');
        @import url('http://fonts.cdnfonts.com/css/futura-pt?styles=117667');
        .navbar .navbar-nav .nav-link {
            color: #000000;
            font-size: 1.1em;
        }
        .navbar .navbar-nav .nav-link:hover{
            color: #808080;
        }
        .navbar-logo-centered .navbar-nav .nav-link{
            padding: .5em 1em;
        }
        li{
            text-align: center;
            font-size:15px;
            display: table;
        }
        a{  
            font-family: 'Futura PT', sans-serif;
            font-size: 15px!important;
            white-space: nowrap;
            display: table-cell!important;
            text-align: center;
            vertical-align: middle;
        }
        p{
            font-family: 'Futura PT', sans-serif;
            font-size: 15px!important;
        }
        .form-control {
            
            border-left: none !important; /* if you want to remove borders at all*/
            border-top: none !important; /* if you want to remove borders at all*/
            border-right: none !important; /* if you want to remove borders at all*/
            outline: none !important;
            box-shadow: none !important;
        }  
        li:hover {
            background-color: transparent!important;
            text-decoration: underline;
            text-underline-offset: 5px;
        }
        .circle_cart {
            border-radius: 50%;
            width: 34px;
            height: 34px;
            border: 1px solid #000;
            color: #000;
            font-size:12px;
            padding-top: 8px;
            padding-bottom: 8px;
            display: inline-block;
        }
        .img-corner {
            display: block;
            width: 70%;
            height: auto;
            border-radius:999em 999em 40px 40px;
        }
        .centered_text_on_image {
            position: absolute;
            bottom: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Silk Serif', sans-serif;
            font-size: 70px!important;
            white-space: nowrap;
        }
        h1{
            font-family: 'Silk Serif', sans-serif;
            font-size: 70px!important;
        }
        label{
            font-family: 'Silk Serif', sans-serif;
            font-size: 12px!important;
        }
        button{
            font-family: 'Futura PT', sans-serif;
            font-size: 12px!important;
            color: black!important;
            padding: 20px!important;
            background: transparent!important;
            border-radius: 0!important;
            border-color: black!important;
            /* width: 60%; */
        }
        /* lettering testo mezza luna top image */
        .curved2 {
            top: 10px;
            left: 0;
            width: 100%;
            height: 100%;
            font-family: 'Silk Serif', sans-serif;
            letter-spacing: 0;
        }
        /* timbro ileniazitodesign */
        .emblem {
            height: 100px;
            border-radius: 50%;
            /* animation: spinZ 20s linear infinite; */
            text-align: center;
            color: #000;
        }
        
        .emblem span {
            font-family: 'Futura PT', sans-serif;
            font-size: 12px!important;
            position: absolute;
            display: inline-block;
            right: 34%;
            
            top: 0;
            bottom: 0;
            text-transform: uppercase;
            font-size: 5vh;
            transition: all .5s cubic-bezier(0,0,0,1);
        }
        
        .emblem_footer span{
            margin: auto;
            width: 0;
        }            
        @keyframes spinZ {
            0% {
                transform: rotateZ(360deg);
            }
            100% {
                transform: rotateZ(0deg);
            }
        }
        /* cambia colore sfondo input in autocmplete */
            input:-webkit-autofill,
            input:-webkit-autofill:hover, 
            input:-webkit-autofill:focus, 
            input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px #dbd3d3 inset !important;
        }
        [onClick] {
            cursor:pointer;
        }
        textarea:hover, 
        input:hover, 
        textarea:active, 
        input:active, 
        textarea:focus, 
        input:focus,
        button:focus,
        button:active,
        button:hover,
        label:focus,
        .btn:active,
        .btn.active
        {
            outline:0px !important;
            /* -webkit-appearance:none; */
            box-shadow: none !important;
        }
        .ellipsis{
            overflow: hidden;
            text-overflow: ellipsis;
        }
        button{
            position: relative;
        }
        .navbar-toggler span {
            display: block;
            background-color: #4f4f4f;
            height: 2px;
            width: 22px;
            margin-top: 5px;
            margin-bottom: 5px;
            position: relative;
            left: 0;
            opacity: 1;
            transition: all 0.35s ease-out;
            transform-origin: center left;
        }
        .navbar-toggler span:nth-child(1) {
            margin-top: 0.3em;
        }
        .navbar-toggler:not(.collapsed) span:nth-child(1) {
            transform: translate(15%, -33%) rotate(45deg);
        }
        .navbar-toggler:not(.collapsed) span:nth-child(2) {
            opacity: 0;
        }
        .navbar-toggler:not(.collapsed) span:nth-child(3) {
            transform: translate(15%, 33%) rotate(-45deg) ;
        }
        .navbar-toggler span:nth-child(1) {
            transform: translate(0%, 0%) rotate(0deg) ;
        }
        .navbar-toggler span:nth-child(2) {
            opacity: 1;
        }
        .navbar-toggler span:nth-child(3) {
            transform: translate(0%, 0%) rotate(0deg) ;
        }


    </style>
</head>
<body>
    <nav id="navbar_1" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #dbd3d3;padding: 1rem 1rem;">
        <a class="navbar-brand d-lg-none" href="#">
            <img src="https://ileniazitodesign.com/public/img/ilenia_design/logo_izd.png?refresh=499" style="width: 60px; height: 60px; object-fit: cover;pointer-events: none;padding:5px;" alt="logo">   
        </a>
        <a class="navbar-toggler collapsed border-0" type="button" data-toggle="collapse" data-target="#myNavbarToggler7">
            <span> </span>
            <span> </span>
            <span> </span>
        </a>
        <div class="collapse navbar-collapse" id="myNavbarToggler7" style="justify-content: center;">
            <ul class="navbar-nav w-100">
                <li class="nav-item pr-3 pl-3">
                    <a class="nav-link text-left" onclick="change_vis('home')">Home</a>
                </li>
                <li class="nav-item pr-3 pl-3">
                    <a class="nav-link text-left" onclick="change_vis('shopmyart_0')" >Store</a>
                </li>
                <li class="nav-item pr-3 pl-3">
                    <a class="nav-link text-left" onclick="change_vis('requests')">Request</a>
                </li>
                <!-- <div class="d-lg-block w-100 text-center" style="padding-top: 8px;">
                    <h4 class="m-0 titlesite" style="vertical-align: middle;text-align: center;padding-top: 8px;font-family: 'Silk Serif', sans-serif; white-space: nowrap;display: none;" onclick="change_vis('home')">ILENIA ZITO DESIGN</h4>
                </div> -->
                <li class="nav-item pr-3 pl-3">
                    @if( auth()->guard('users_ileniadesign')->check() )
                    <a class="nav-link text-left" onclick="logout()">Logout</a>
                    @else
                    @endif
                </li>
                <li class="nav-item pr-3 pl-3">
                    @if( auth()->guard('users_ileniadesign')->check() )
                    @if( auth()->guard("users_ileniadesign")->user()->id==13 )
                    <a class="nav-link text-left" onclick="change_vis('setting')">My setting </a>
                    <a class="nav-link text-left" onclick="change_vis('order')">My order </a>
                    @else
                    <a class="nav-link text-left" onclick="change_vis('order')">My order </a>
                    @endif
                    @else
                    <a class="nav-link text-left" onclick="change_vis('login')">Login/Register </a>
                    @endif
                </li>
                <li class="nav-item pr-3 pl-3">
                    <a class="nav-link text-left" onclick="change_vis('cart')">Cart </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="home" class="page" style="display: none">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            <section class="container-fluid h-100" style="background-color: #dbd3d3;">
                <div class="d-flex flex-nowrap h-100">
                    <div class="col-md-4 h-100">
                        <p class="" style="position: absolute; bottom:0; right: 0;margin-bottom: 7rem!important;width:30%;">Intersection of couture and ready to wear</p>
                    </div>
                    <div class="col-md-4 p-0">
                        <div class="" style="display: block;position: absolute; bottom:0;right: 0; left: 0;margin-bottom: 7rem!important;">
                            <div class="curved2">ILENIAZITODESIGN</div>
                            <img class="img-corner m-auto" src="ileniadesign_repo/1.jpeg">
                        </div>
                    </div>
                    <div class="centered_text_on_image">- Embrace your feminity</div>
                    <div class="col-md-4 h-100">
                        <p style="position: absolute; bottom:0; left: 0;margin-bottom: 7rem!important;width:30%;">Intersection of couture and ready to wear</p>
                    </div>
                </div>
            </section>
            <section class="container-fluid p-0">
                <div class="d-flex flex-nowrap">
                    <div class="col-md-7 p-0">
                        <div style="position: relative; top: 50%; transform: translateY(-50%); display: flex; justify-content: center;">
                            <div>
                                <p style="margin-left: 10%;">SPRING SUMMER 2021</p>
                                <h1>- New Collection</h1>
                                <p style="margin-left: 10%;">Text around circle. Very, very, very long text for testing. prova di tigno con s</p>
                                <button style="margin-left: 10%;" class="btn btn-primary text-left">COLLECTION  <img style="position: absolute;right: 15px;top: 50%;transform: translateY(-50%);width: 30px;" src="ileniadesign_repo/long-arrow.png"></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 p-0" style="z-index:1;margin: auto;display: block;">
                        <div class="emblem" style="position: absolute;right: 0;top: -50px;">Ileniazitodesign-Ileniazitodesign-</div>
                        <img src="ileniadesign_repo/2.jpeg" style="width: 190px; object-fit: contain; pointer-events: none;">
                    </div>
                    <div class="col-md-4 p-0 z-index-0" style="z-index:0">
                        <img src="ileniadesign_repo/3.jpeg" style="width: 100%; object-fit: contain; pointer-events: none;">
                    </div>
                </div>
            </section>
            <section class="container-fluid p-0 h-100" style="background-color: #dbd3d3;">
                <div class="d-flex flex-nowrap h-100">
                    <div class="col-md-4">
                        <div style="position: absolute;bottom: 100px;left:100px;">
                            <img class="img-corner m-auto" src="ileniadesign_repo/1.jpeg">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center" style="position: absolute;bottom:100px;left: 0; margin: auto;right: 0">
                            <p class="text-center">CATEGORIES</p><br>
                            <h1 class="text-center" style="font-size: 50px!important;margin-left: -5%;">- Dresses</h1>
                            <h1 class="text-center" style="font-size: 50px!important;">Skirts</h1>
                            <h1 class="text-center" style="font-size: 50px!important;">Blouses</h1>
                            <h1 class="text-center" style="font-size: 50px!important;">Knitwear</h1>
                            <h1 class="text-center" style="font-size: 50px!important;">Jackets</h1><br>
                            <button class="btn btn-primary text-left">VIEW ALL <img style="position: absolute;right: 15px;top: 50%;transform: translateY(-50%); width: 30px;" src="ileniadesign_repo/long-arrow.png"></button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="position: absolute;top: 100px;right:100px;z-index:1;margin: auto;display: block;">
                            <div class="emblem" style="position: absolute;bottom: -50px;left:50px;">Ileniazitodesign-Ileniazitodesign-</div>
                            <img class="img-corner m-auto" src="ileniadesign_repo/2.jpeg">
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid p-0">
                <div class="d-flex flex-nowrap">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3" style="z-index: 1;margin-top: 10%;margin-bottom: 10%;">
                        <div class="" style="display:block;margin-top: 20%;margin-bottom: 20%;">
                            <img class="img-corner" style="border-radius: 0;width: 70%;float: right;" src="ileniadesign_repo/1.jpeg">
                            <div style="float:right;margin-right: 25px;">
                                <h1 style="font-size: 40px!important;margin-left: 25%;background-color: white;display: inline-block;height: 55px;padding: 9px;">ILENIA ZITO DESIGN</h1>
                            </div>
                            <label style="float: right;width: 70%;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                        </div>
                    </div>
                    <div class="col-md-3" style="z-index: 0;margin-top: 10%;margin-bottom: 10%;">
                        <div class="" style="display:block;margin-top: 20%;margin-bottom: 20%;">
                            <div class="emblem" style="top: 0; right: 0; position: absolute;">Ileniazitodesign-Ileniazitodesign-</div>
                            <img class="img-corner" style="border-radius: 0; width: 100%;" src="ileniadesign_repo/2.jpeg">
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </section>
            <section class="container-fluid p-0 h-100" style="background-color: #dbd3d3;">
                <div class="d-flex flex-wrap" >
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;padding-top:10%">NEWSLETTER</h4>
                        <img style="width: 40%!important;" class="img-corner m-auto" src="ileniadesign_repo/1.jpeg">
                        <h1 class="text-center" style="font-size: 25px!important;white-space: normal!important;padding:10%">Subscribe to see the latest updates</h1>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="d-flex flex-nowrap w-100">
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Email" id="email_newsletter" style="width: 60%;float: right;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary text-left" onclick="register_newsletter()">SUBSCRIBE  <img style="position: absolute;right: 15px;top: 50%;transform: translateY(-50%);width: 30px;" src="ileniadesign_repo/long-arrow.png"></button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer"></div>
        </div>
    </div>
    <div id="login" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.login")
            <div class="footer"></div>
        </div>
    </div>
    <div id="shopmyart" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.shopmyart")
            <div class="footer"></div>
        </div>
    </div>
    <div id="shopdetail" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.shopdetail")
            <div class="footer"></div>
        </div>
    </div>
    <div id="cart" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.cart")
            <div class="footer"></div>
        </div>
    </div>
    <div id="summary" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.summary")
            <div class="footer"></div>
        </div>
    </div>
    <div id="requests" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.requests")
            <div class="footer"></div>
        </div>
    </div>
    @if( auth()->guard('users_ileniadesign')->check() )
    @if( auth()->guard("users_ileniadesign")->user()->id==13 )
    <div id="setting" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.setting")
            <div class="footer"></div>
        </div>
    </div>
    <div id="order" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.order")
            <div class="footer"></div>
        </div>
    </div>
    @else
    <div id="order" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.mobile.order")
            <div class="footer"></div>
        </div>
    </div>
    @endif
    @endif

    <footer id="footer" style="background-color:#CDB4B4;">
        <div class="">
            <h1 class="text-center" style="font-size:25px!important;padding: 5%;">ILENIA ZITO DESIGN</h1>
        </div>
        <div class="d-flex flex-nowrap text-center">
            <div class="flex-grow-1" style="">
                <p style="margin-bottom: 0.5rem!important;">Navigate</p>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Shop</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Collection</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">About</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Account</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Contact</label><br>
            </div>
            <div class="flex-grow-1" style="">
                <p style="margin-bottom: 0.5rem!important;">Assistance</p>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Shipping & returns</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Privacy police</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">FAQ</label><br>
            </div>
            <div class="flex-grow-1" style="">
                <p style="margin-bottom: 0.5rem!important;">Social</p>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Facebook</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Instagram</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Pinterest</label><br>
            </div>
        </div>
        <div class="text-center p-3 m-0" style="">
            <p>All right reserved - 2020 CECILIE BAHANSEN</p>
        </div>
        <div class="d-flex flex-nowrap text-center" style="">
            <div class="flex-grow-1" style="">
                <p>Terms & Condition</p>
            </div>
            <div class="flex-grow-1">
                <p>Site by Dario Rosciglione</p>
            </div>
        </div>
    </footer>

    <!-- modal -->
    <div class="modal" id="deliverymodal" aria-hidden="true" style="width: 100%;background: rgba(0,0,0,.3);">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 0">
                <div class="modal-body">
                    <div style="" class="text-center">
                        <img src="https://ileniazitodesign.com/public/img/ilenia_design/logo_izd.png?refresh=499" style="width:100px; height: 100px; object-fit: cover;pointer-events: none;padding:5px;" alt="logo">    
                    </div>
                    <div class="html-slot-container">
                        <h1 class="text-center discount_percent" style="font-size: 50px!important; padding: 9px;font-family: 'Futura PT', sans-serif;text-transform:uppercase"></h1>
                        <h1 class="text-center code" style="font-size: 50px!important; padding: 9px;font-family: 'Futura PT', sans-serif;text-transform:uppercase; background-color: #dbd3d3;"></h1>
                        <h1 class="text-center gift_text" style="font-size: 30px!important; padding: 9px;font-family: 'Futura PT', sans-serif;"></h1>
                    </div>
                    <div class="html-slot-container">
                        <div class="cookie-content">
                            <div class="cookie-section1">
                                <select class="d-block w-100 form-control" id="select_delivery_locator" required="" style="border-radius: 0!important;padding: 0px 0!important; height: 44px; border: 1px solid #212529;">
                                    <option value="" selected="" disabled>Scegli stato</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Greece">Greece</option> 
                                    <option value="Italy">Italy</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Finland">Finland</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                </select>
                                <button class="btn btn-primary w-100 mt-3" data-dismiss="modal" aria-label="Close" onclick="check_locator();">CONTINUE SHOPPING  </button>
                            </div>
                            <br>
                            <p class="cookie text-center">We use cookies on our site to enhance your user experience, improve site quality and show you relevant products. We allow third parties to place cookies on our site. By continuing to use the site, you consent to the use of cookies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //MODIFICHE MOBILE
        //modificare lingua
        
        //MODIFICHE MOBILE
        //riportare tutto il progetto dentro la cartella e sistemarlo solo graficamente

        //funzioni iniziali
        situation_modal();
        var footer_show=$("#footer").detach();

        //check ip
        var address=window.location.href;
        address=address.split("#")[1];

        function check_visitor(type_interaction){
            $.getJSON("http://ipinfo.io/json", function(e) {
                console.log(e.ip)
                var ip_address=e.ip;
                var location=e.city + ", " + e.region;
                if (ip_address!="109.117.218.107" && ip_address!="79.8.231.26" ) {
                $.get("/check_token_exist_ileniadesign",{ip_address:ip_address, type_interaction:type_interaction, from:address, city:location},
                    function(data){
                    });
                }
            });

        }

        //cambio pagina
        var myhistory = [];
        var data = {!! $data !!};
        page_to_go = data["page"];
        change_vis(page_to_go);
        
        function change_vis(page_name, history){
            var num_image=page_name.split("_")[1];
            page_name=page_name.split("_")[0];
            
            var old_page=window.location.href.split("=")[1];
            
            if (old_page.indexOf('shopdetail') == 0) {
                
                $("#shopdetail").hide();
                
            }else{
                
                $("#"+old_page).hide();
                
            }
            
            if(history != 0){
                
                myhistory.push(old_page);
                
            }
            
            old_page=page_name;
            
            $("#"+page_name).show();
            
            button_back(page_name, num_image);
            
            case_page(page_name, num_image);
            
        }
        
        function button_back(page_name, num_image){
            
            history.pushState(null, null, history.pushState(null, null, window.location.href.substr(0, window.location.href.indexOf(page_name))));
            
            if (page_name=="shopdetail") {
                
                history.pushState(null, null, window.history.replaceState(null, null, "/id?page="+page_name+"_"+num_image));
                
            } else{
                
                history.pushState(null, null, window.history.replaceState(null, null, "/id?page="+page_name));
                
            }
            
            window.onpopstate = function () {
                
                if (myhistory.length==1) {
                    
                    history.pushState(null, null, location.href);
                    window.onpopstate = function () {
                        history.go(1);
                    };
                    return "http://localhost:8000/ileniadesign";
                    
                } else {
                    
                    change_vis(myhistory.pop(), 0); 
                    
                }
                
            };
            
        }  
        
        function case_page(page_name, num_image){
            
            switch(page_name) {
                case "home":
                    $("#navbar_1").css("background-color","#dbd3d3");
                    $(".titlesite").hide();
                break;
                case "shopmyart":
                    start_function_shopmyart();
                    $("#navbar_1").css("background-color","#dbd3d3");
                    $(".titlesite").show();
                break;
                case "shopdetail":
                    start_function_shopdetail(num_image);
                    $("#navbar_1").css("background-color","transparent");
                    $(".titlesite").show();
                break;
                case "requests":
                    $(".titlesite").show();
                break;
                case "cart":
                    start_function_cart();
                    $("#navbar_1").css("background-color","#dbd3d3");
                    $(".titlesite").show();
                break;
                case "summary":
                    start_function_summary();
                    $(".titlesite").show();
                break;
                case "setting":
                    start_function_setting();
                    $(".titlesite").show();
                break;
                case "order":
                    start_function_order();
                    $(".titlesite").show();
                break;
                case "login":
                    $("#navbar_1").css("background-color","#dbd3d3");
                    $(".titlesite").show();
                break;
                default:
        
            }
            check_visitor(page_name);
            start_function_home(page_name);
        }
        
        function start_function_home(page_name){
            $(".container_page").css("height", "calc(100% - 82px)");
            set_lettering_circle_title();
            get_count_cart();
            
            $("#"+page_name+ " .footer").html(footer_show);
        }
        
        function logout(){
            $.get("/logout_ileniadesign",{},function(){
                window.location.replace("/ileniadesign");
            });
        }
        
        function set_lettering_circle_title(){
            
            $.fn.circleType = function (options) {
                var settings = {
                    dir: 1,
                    position: "relative"
                };
                if (typeof $.fn.lettering !== "function") {
                    return;
                }
                return this.each(function () {
                    if (options) {
                        $.extend(settings, options);
                    }
                    var elem = this,
                    delta = 180 / Math.PI,
                    ch = parseInt($(elem).css("line-height"), 10),
                    fs = parseInt($(elem).css("font-size"), 10),
                    txt = elem.innerHTML.replace(/^\s+|\s+$/g, "").replace(/\s/g, "&nbsp;"),
                    letters,
                    center;
                    
                    elem.innerHTML = txt;
                    $(elem).lettering();
                    
                    elem.style.position = settings.position;
                    
                    letters = elem.getElementsByTagName("span");
                    center = Math.floor(letters.length / 2);
                    
                    var layout = function () {
                        var tw = 0,
                        i,
                        offset = 0,
                        minRadius,
                        origin,
                        innerRadius,
                        l,
                        style,
                        r,
                        transform;
                        
                        for (i = 0; i < letters.length; i++) {
                            tw += letters[i].offsetWidth;
                        }
                        minRadius = tw / Math.PI / 2 + ch;
                        
                        if (settings.fluid && !settings.fitText) {
                            settings.radius = Math.max(elem.offsetWidth / 2, minRadius);
                        } else if (!settings.radius) {
                            settings.radius = minRadius;
                        }
                        
                        if (settings.dir === -1) {
                            origin = "center " + (-settings.radius + ch) / fs + "em";
                        } else {
                            origin = "center " + settings.radius / fs + "em";
                        }
                        
                        innerRadius = settings.radius - ch;
                        
                        for (i = 0; i < letters.length; i++) {
                            l = letters[i];
                            offset += (l.offsetWidth / 2 / innerRadius) * delta;
                            l.rot = offset;
                            offset += (l.offsetWidth / 2 / innerRadius) * delta;
                        }
                        for (i = 0; i < letters.length; i++) {
                            l = letters[i];
                            style = l.style;
                            r = (-offset * settings.dir) / 2 + l.rot * settings.dir;
                            transform = "rotate(" + r + "deg)";
                            
                            style.position = "absolute";
                            style.left = "50%";
                            style.marginLeft = -(l.offsetWidth / 2) / fs + "em";
                            
                            style.webkitTransform = transform;
                            style.MozTransform = transform;
                            style.OTransform = transform;
                            style.msTransform = transform;
                            style.transform = transform;
                            
                            style.webkitTransformOrigin = origin;
                            style.MozTransformOrigin = origin;
                            style.OTransformOrigin = origin;
                            style.msTransformOrigin = origin;
                            style.transformOrigin = origin;
                            if (settings.dir === -1) {
                                style.bottom = 0;
                            }
                        }
                        
                        if (settings.fitText) {
                            if (typeof $.fn.fitText !== "function") {

                            } else {
                                $(elem).fitText();
                                $(window).resize(function () {
                                    updateHeight();
                                });
                            }
                        }
                        updateHeight();
                    };
                    
                    var getBounds = function (elem) {
                        var docElem = document.documentElement,
                        box = elem.getBoundingClientRect();
                        return {
                            top: box.top + window.pageYOffset - docElem.clientTop,
                            left: box.left + window.pageXOffset - docElem.clientLeft,
                            height: box.height
                        };
                    };
                    
                    var updateHeight = function () {
                        var mid = getBounds(letters[center]),
                        first = getBounds(letters[0]),
                        h;
                        if (mid.top < first.top) {
                            h = first.top - mid.top + first.height;
                        } else {
                            h = mid.top - first.top + first.height;
                        }
                        elem.style.height = h + "px";
                    };
                    
                    if (settings.fluid && !settings.fitText) {
                        $(window).resize(function () {
                            layout();
                        });
                    }
                    
                    if (document.readyState !== "complete") {
                        elem.style.visibility = "hidden";
                        
                        $(window).on('load', function(){
                            elem.style.visibility = "visible";
                            layout();
                        });
                    } else {
                        layout();
                    }
                });
            };
            
            $(".curved2").circleType({ dir: 1, radius: 200 });
            
        }
        
        $('.emblem').each(function(){
            var text=$(this).text();
            $(this).empty();
            for (var i = 0; i < text.length; i++) {
                var letter = text[i];
                var span = document.createElement('span');
                var node = document.createTextNode(letter);
                var r = (360/text.length)*(i);
                var x = (Math.PI/text.length).toFixed(0) * (i);
                var y = (Math.PI/text.length).toFixed(0) * (i);
                span.appendChild(node);
                span.style.webkitTransform = 'rotateZ('+r+'deg) translate3d('+x+'px,'+y+'px,0)';
                span.style.transform = 'rotateZ('+r+'deg) translate3d('+x+'px,'+y+'px,0)';
                $(this).append(span);
            }
            
        });

        function get_count_cart(){
            $.get("get_count_prod_cart_ileniadesign",{/*token_user:user*/},
            function(data){
                data==0?data=0:data=data;
                $(".circle_cart").text(data);
            });
        }

        function formatDate(date) {

            var year=date.split("-")[0];
            var month=date.split("-")[1];
            var day=date.split("-")[2];
            var correct_day=day.split(" ")[0];
            var time=day.split(" ")[1];

            return correct_day+"/"+month+"/"+year;

        }

        function situation_modal(){

            $("#deliverymodal").show();
            $.get('get_promotion_ileniadesign',{},
            function(data){
                var res=jQuery.parseJSON(data);
                if (res.get_discount.length!=0) {
                    $(".discount_percent").text(res.get_discount[0].off+"% di sconto");
                    $(".code").text(res.get_discount[0].name);
                    var gift_text=res.get_gift.length!=0 ? gift_text=res.get_gift[0].name : gift_text="";
                    $(".gift_text").text(gift_text);
                }
            });

        }

        function check_locator(){
            var locator=$("#select_delivery_locator").val();
            if (locator!=null) {
                $.get('check_locator_ileniadesign',{locator:locator},
                function(data){
                    $('#deliverymodal').hide();
                    var res=jQuery.parseJSON(data);
                    $(".locator_state").val(res.locator);
                    $("#radio_delivery").val(res.price.toFixed(2));
                    $("#radio_delivery").after(res.type_delivery);
                    $(".price_delivery").text("€ "+res.price.toFixed(2));
                    $(".within_delivery").text(res.within_delivery);
                    $(".total_delivery").text("€ "+res.price.toFixed(2));
                    sum_cart();
                    //bloccare la spedizione in relazione allo stato nel summary prima di pagare
                });
            }
        }

        function formatDate(date) {

            var year=date.split("-")[0];
            var month=date.split("-")[1];
            var day=date.split("-")[2];
            var correct_day=day.split(" ")[0];
            var time=day.split(" ")[1];
            return correct_day+"/"+month+"/"+year;

        }

        function formatDate_ileniadesign(date) {

            var weekday = ["Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato"];
            var d = new Date(date);
            var month = '' + (d.getMonth() + 1);
            var day = '' + d.getDate();
            var day_name = '' + weekday[d.getDay()];
            var year = d.getFullYear().toString().substr(-2);
            if (month.length < 2) 
            month = '0' + month;
            if (day.length < 2) 
            day = '0' + day;
            return day_name;

        }

        function register_newsletter(){
            var email=$("#email_newsletter").val();
            $.get('register_newsletter_ileniadesign',{email:email},
                function(data){
                    console.log(data);
            });

        }
        
    </script>
</body>
</html>