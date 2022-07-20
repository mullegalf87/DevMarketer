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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
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
            white-space: nowrap;
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
            width: 60%;
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
    </style>
</head>
<body>
    <nav id="navbar_1" class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #dbd3d3;padding: 1rem 1rem;">
        <a class="navbar-brand d-lg-none" href="#">
            <img src="https://codingyaar.com/wp-content/uploads/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler7"
        aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbarToggler7" style="justify-content: center;">
            <ul class="navbar-nav w-100">
                <li class="nav-item text-center pr-3 pl-3">
                    <a class="nav-link" onclick="change_vis('shopmyart_0')" >Store</a>
                </li>
                <li class="nav-item text-center pr-3 pl-3">
                    <a class="nav-link" onclick="change_vis('request')">Request</a>
                </li>
                <li class="nav-item text-center pr-3 pl-3">
                    <a class="nav-link" onclick="change_vis('about')">About</a>
                </li>
                <div class="d-none d-lg-block w-100 text-center" style="padding-top: 8px;">
                    <!-- <img src="https://codingyaar.com/wp-content/uploads/logo.png"> -->
                    <h4 class="m-0" style="vertical-align: middle;text-align: center;padding-top: 8px;font-family: 'Silk Serif', sans-serif; white-space: nowrap;" onclick="change_vis('home')">ILENIA ZITO DESIGN</h4>
                </div>
                <li class="nav-item text-center pr-3 pl-3">
                    @if( auth()->guard('users_ileniadesign')->check() )
                    <a class="nav-link" onclick="logout()">Logout</a>
                    @else
                    @endif
                </li>
                <li class="nav-item text-center pr-3 pl-3">
                    @if( auth()->guard('users_ileniadesign')->check() )
                    @if( auth()->guard("users_ileniadesign")->user()->id==13 )
                    <a class="nav-link" onclick="change_vis('setting')">My setting </a>
                    <a class="nav-link" onclick="change_vis('order')">My order </a>
                    @else
                    <a class="nav-link" onclick="change_vis('order')">My order </a>
                    @endif
                    @else
                    <a class="nav-link" onclick="change_vis('login')">Login/Register </a>
                    @endif
                </li>
                <li class="nav-item text-center pr-3 pl-3" style="padding: 8px;">
                    <div class="circle_cart" onclick="change_vis('cart')">0</div>
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
                                <button style="margin-left: 10%;" class="btn btn-primary text-left">COLLECTION  </button>
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
                            <button class="btn btn-primary text-left">VIEW ALL  </button>
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
                            <input class="form-control" placeholder="Email" style="width: 60%;float: right;height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary text-left">SUBSCRIBE  </button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer"></div>
        </div>
    </div>
    <div id="login" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.login")
            <div class="footer"></div>
        </div>
    </div>
    <div id="shopmyart" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.shopmyart")
            <div class="footer"></div>
        </div>
    </div>
    <div id="shopdetail" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.shopdetail")
            <div class="footer"></div>
        </div>
    </div>
    <div id="cart" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.cart")
            <div class="footer"></div>
        </div>
    </div>
    <div id="summary" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.summary")
            <div class="footer"></div>
        </div>
    </div>
    
    @if( auth()->guard('users_ileniadesign')->check() )
    @if( auth()->guard("users_ileniadesign")->user()->id==13 )
    <div id="setting" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.setting")
            <div class="footer"></div>
        </div>
    </div>
    <div id="order" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.order")
            <div class="footer"></div>
        </div>
    </div>
    @else
    <div id="order" class="page" style="display: none;">
        <div class="container_page" style="flex: 1; position: absolute; right: 0; bottom: 0; left: 0;">
            @include("ileniadesign.desktop.order")
            <div class="footer"></div>
        </div>
    </div>
    @endif
    @endif

    <footer id="footer" style="background-color:#CDB4B4;">
        <div class="">
            <h1 class="text-center" style="font-size:25px!important;padding: 5%;">CECILIE BAHANSEN</h1>
        </div>
        <div class="d-flex flex-nowrap">
            <div class="col-md-2 text-left" style="padding-left: 60px;">
                <p style="margin-bottom: 0.5rem!important;">Navigate</p>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Shop</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Collection</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">About</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Account</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Contact</label><br>
            </div>
            <div class="col-md-2 text-left" style="padding-left: 60px;">
                <p style="margin-bottom: 0.5rem!important;">Assistance</p>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Shipping & returns</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Privacy police</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">FAQ</label><br>
            </div>
            <div class="col-md-2 text-left" style="padding-left: 60px;">
                <p style="margin-bottom: 0.5rem!important;">Social</p>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Facebook</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Instagram</label><br>
                <label style="font-family: 'Futura PT', sans-serif; font-size: 12px!important;margin-bottom: 0">Pinterest</label><br>
            </div>
            <div class="col-md-6 text-center">
                <div class="emblem emblem_footer">Ileniazitodesign-Ileniazitodesign-</div>
            </div>
        </div>
        <div class="d-flex flex-nowrap" style="font-size:25px!important;padding-top: 5%;padding-bottom:2%;">
            <div class="col-md-4 text-left" style="padding-left: 60px;">
                <p>All right reserved - 2020 CECILIE BAHANSEN</p>
            </div>
            <div class="col-md-4 text-left" style="padding-left: 60px;">
                <p>Terms & Condition</p>
            </div>
            <div class="col-md-4 text-center">
                <p>Site by Dario Rosciglione</p>
            </div>
        </div>
    </footer>
    <script>
        //MODIFICHE DESKTOP
        //fare pagina ordini profilo cliente: ordini(dopo l'acquisto mettere nella tabella cart numero omaggi e %sconto così da riportarli nella lista ordini) e preferiti(rendere il cuore interagibile in una tabella stile cart), profilo;
        //fare pagina richieste;
        //fare accettazione cookie
        //sistemare problema lazy load delle immagini quando filtrate
        //fare modal per promozione all'apertura della pagina
        //fare in mysetting report e tabelle per invio
        
        //MODIFICHE MOBILE
        

        //importantissimo funzioni per cambiare pagina in laravel da chrome  
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
                break;
                case "shopmyart":
                    start_function_shopmyart();
                    $("#navbar_1").css("background-color","#dbd3d3");
                break;
                case "shopdetail":
                    start_function_shopdetail(num_image);
                    $("#navbar_1").css("background-color","transparent");
                break;
                case "requests":
                break;
                case "cart":
                    start_function_cart();
                    $("#navbar_1").css("background-color","#dbd3d3");
                break;
                case "summary":
                    start_function_summary();
                break;
                case "setting":
                    start_function_setting();
                break;
                case "order":
                    start_function_order();
                break;
                case "login":
                    $("#navbar_1").css("background-color","#dbd3d3");
                break;
                default:
        
            }
            var footer_show=$("#footer").detach();
            $("#"+page_name+ " .footer").html(footer_show);
            start_function_home();
        }
        
        function start_function_home(){
            $(".container_page").css("height", "calc(100% - 82px)");
            set_lettering_circle_title();
            get_count_cart();
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
        
    </script>
</body>
</html>