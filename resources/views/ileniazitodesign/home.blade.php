<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap 4.5 bootstrap-->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- font -->
        <link href="http://fonts.cdnfonts.com/css/silk-serif?styles=108358" rel="stylesheet"> 
        <link href="http://fonts.cdnfonts.com/css/futura-pt?styles=117667" rel="stylesheet">
        <!-- lettering -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
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
                bottom: 50;
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
            /* round text */
            .circle {
                transform: rotate(-23deg);
                position: absolute;
                font-family: 'Futura PT', sans-serif;
                font-size: 20px!important;
                height: 53%;
                margin: auto;
                width: 61%;
                right: 0;
            }
            .circle > .text [class*=char] {
                height: 75%;
                position: absolute;
                transform-origin: center bottom;
            }
            .circle > .text .char-1 {
                transform: rotate(4.5deg);
            }
            .circle > .text .char-2 {
                transform: rotate(9deg);
            }
            .circle > .text .char-3 {
                transform: rotate(13.5deg);
            }
            .circle > .text .char-4 {
                transform: rotate(18deg);
            }
            .circle > .text .char-5 {
                transform: rotate(22.5deg);
            }
            .circle > .text .char-6 {
                transform: rotate(27deg);
            }
            .circle > .text .char-7 {
                transform: rotate(31.5deg);
            }
            .circle > .text .char-8 {
                transform: rotate(36deg);
            }
            .circle > .text .char-9 {
                transform: rotate(40.5deg);
            }
            .circle > .text .char-10 {
                transform: rotate(45deg);
            }
            .circle > .text .char-11 {
                transform: rotate(49.5deg);
            }
            .circle > .text .char-12 {
                transform: rotate(54deg);
            }
            .circle > .text .char-13 {
                transform: rotate(58.5deg);
            }
            .circle > .text .char-14 {
                transform: rotate(63deg);
            }
            .circle > .text .char-15 {
                transform: rotate(67.5deg);
            }
            .circle > .text .char-16 {
                transform: rotate(72deg);
            }
            .circle > .text .char-17 {
                transform: rotate(76.5deg);
            }
            .circle > .text .char-18 {
                transform: rotate(81deg);
            }
            .circle > .text .char-19 {
                transform: rotate(85.5deg);
            }
            .circle > .text .char-20 {
                transform: rotate(90deg);
            }
            .circle > .text .char-21 {
                transform: rotate(94.5deg);
            }
            .circle > .text .char-22 {
                transform: rotate(99deg);
            }
            .circle > .text .char-23 {
                transform: rotate(103.5deg);
            }
            .circle > .text .char-24 {
                transform: rotate(108deg);
            }
            .circle > .text .char-25 {
                transform: rotate(112.5deg);
            }
            .circle > .text .char-26 {
                transform: rotate(117deg);
            }
            .circle > .text .char-27 {
                transform: rotate(121.5deg);
            }
            .circle > .text .char-28 {
                transform: rotate(126deg);
            }
            .circle > .text .char-29 {
                transform: rotate(130.5deg);
            }
            .circle > .text .char-30 {
                transform: rotate(135deg);
            }
            .circle > .text .char-31 {
                transform: rotate(139.5deg);
            }
            .circle > .text .char-32 {
                transform: rotate(144deg);
            }
            .circle > .text .char-33 {
                transform: rotate(148.5deg);
            }
            .circle > .text .char-34 {
                transform: rotate(153deg);
            }
            .circle > .text .char-35 {
                transform: rotate(157.5deg);
            }
            .circle > .text .char-36 {
                transform: rotate(162deg);
            }
            .circle > .text .char-37 {
                transform: rotate(166.5deg);
            }
            .circle > .text .char-38 {
                transform: rotate(171deg);
            }
            .circle > .text .char-39 {
                transform: rotate(175.5deg);
            }
            .circle > .text .char-40 {
                transform: rotate(180deg);
            }
            .circle > .text .char-41 {
                transform: rotate(184.5deg);
            }
            .circle > .text .char-42 {
                transform: rotate(189deg);
            }
            .circle > .text .char-43 {
                transform: rotate(193.5deg);
            }
            .circle > .text .char-44 {
                transform: rotate(198deg);
            }
            .circle > .text .char-45 {
                transform: rotate(202.5deg);
            }
            .circle > .text .char-46 {
                transform: rotate(207deg);
            }
            .circle > .text .char-47 {
                transform: rotate(211.5deg);
            }
            .circle > .text .char-48 {
                transform: rotate(216deg);
            }
            .circle > .text .char-49 {
                transform: rotate(220.5deg);
            }
            .circle > .text .char-50 {
                transform: rotate(225deg);
            }
            .circle > .text .char-51 {
                transform: rotate(229.5deg);
            }
            .circle > .text .char-52 {
                transform: rotate(234deg);
            }
            .circle > .text .char-53 {
                transform: rotate(238.5deg);
            }
            .circle > .text .char-54 {
                transform: rotate(243deg);
            }
            .circle > .text .char-55 {
                transform: rotate(247.5deg);
            }
            .circle > .text .char-56 {
                transform: rotate(252deg);
            }
            .circle > .text .char-57 {
                transform: rotate(256.5deg);
            }
            .circle > .text .char-58 {
                transform: rotate(261deg);
            }
            .circle > .text .char-59 {
                transform: rotate(265.5deg);
            }
            .circle > .text .char-60 {
                transform: rotate(270deg);
            }
            .circle > .text .char-61 {
                transform: rotate(274.5deg);
            }
            .circle > .text .char-62 {
                transform: rotate(279deg);
            }
            .circle > .text .char-63 {
                transform: rotate(283.5deg);
            }
            .circle > .text .char-64 {
                transform: rotate(288deg);
            }
            .circle > .text .char-65 {
                transform: rotate(292.5deg);
            }
            .circle > .text .char-66 {
                transform: rotate(297deg);
            }
            .circle > .text .char-67 {
                transform: rotate(301.5deg);
            }
            .circle > .text .char-68 {
                transform: rotate(306deg);
            }
            .circle > .text .char-69 {
                transform: rotate(310.5deg);
            }
            .circle > .text .char-70 {
                transform: rotate(315deg);
            }
            .circle > .text .char-71 {
                transform: rotate(319.5deg);
            }
            .circle > .text .char-72 {
                transform: rotate(324deg);
            }
            .circle > .text .char-73 {
                transform: rotate(328.5deg);
            }
            .circle > .text .char-74 {
                transform: rotate(333deg);
            }
            .circle > .text .char-75 {
                transform: rotate(337.5deg);
            }
            .circle > .text .char-76 {
                transform: rotate(342deg);
            }
            .circle > .text .char-77 {
                transform: rotate(346.5deg);
            }
            .circle > .text .char-78 {
                transform: rotate(351deg);
            }
            .circle > .text .char-79 {
                transform: rotate(355.5deg);
            }
            .circle > .text .char-80 {
                transform: rotate(360deg);
            }
            
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
        
        </style>
    </head>
    <body>
        <nav id="navbar_1" class="navbar navbar-expand-lg navbar-light" style="background-color: #dbd3d3;padding: 1rem 1rem;">
            <a class="navbar-brand d-lg-none" href="#"><img src="https://codingyaar.com/wp-content/uploads/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler7"
                aria-controls="myNavbarToggler7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbarToggler7" style="justify-content: center;">
                <ul class="navbar-nav w-100">
                    <li class="nav-item text-center pr-3 pl-3">
                        <a class="nav-link" href="#" >Store</a>
                    </li>
                    <li class="nav-item text-center pr-3 pl-3">
                        <a class="nav-link" href="#">Collection</a>
                    </li>
                    <li class="nav-item text-center pr-3 pl-3">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <div class="d-none d-lg-block w-100 text-center" style="padding-top: 8px;">
                        <!-- <img src="https://codingyaar.com/wp-content/uploads/logo.png"> -->
                        <h4 class="m-0" style="vertical-align: middle;text-align: center;padding-top: 8px;font-family: 'Silk Serif', sans-serif;
                        white-space: nowrap;">ILENIA ZITO</h4>
                    </div>
                    <li class="nav-item text-center pr-3 pl-3">
                        <a class="nav-link" href="#">Ship to</a>
                    </li>
                    <li class="nav-item text-center pr-3 pl-3">
                        <a class="nav-link" href="#">Account</a>
                    </li>
                    <li class="nav-item text-center pr-3 pl-3" style="padding: 8px;">
                        <div class="circle_cart">2</div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="home" class="page">
            <section id="section1" class="container-fluid h-100" style="background-color: #dbd3d3;">
                <!-- <div class="d-flex flex-nowrap" style="position: absolute; top: 30%; right: 0;justify-content: center;"> -->
                <div class="d-flex flex-nowrap h-100">
                    <div class="col-md-4 h-100">
                        <p class="" style="position: absolute; bottom:0; right: 0;margin-bottom: 3rem!important;">Intersection of couture and ready to wear</p>
                    </div>
                    <div class="col-md-4 h-100 p-0">
                        <div class="w-100">
                            <div class="circle append_span_circle">
                                <span class="text">HANDCRAFTED</span>
                            </div>
                        </div>
                        <img style="position: absolute; bottom:0;right: 0; left: 0;margin-bottom: 3rem!important;" class="img-corner m-auto" src="ileniazitodesign_repo/1.jpeg">
                    </div>
                    <div class="centered_text_on_image">- Embrace your feminity</div>
                    <div class="col-md-4 h-100">
                        <p style="position: absolute; bottom:0; left: 0;margin-bottom: 3rem!important;">Intersection of couture and ready to wear</p>
                    </div>
                </div>
            </section>
            <section id="section2" class="container-fluid p-0">
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
                        <div class="emblem" style="position: absolute; left: 70px; right: 0; top: -60px;margin: 0 auto;width: 100px;">Ileniazitodesign-Ileniazitodesign-</div>
                        <img src="ileniazitodesign_repo/2.jpeg" style="width: 190px; object-fit: contain; pointer-events: none;">
                    </div>
                    <div class="col-md-4 p-0 z-index-0" style="z-index:0">
                        <img src="ileniazitodesign_repo/3.jpeg" style="width: 100%; object-fit: contain; pointer-events: none;">
                    </div>
                </div>
            </section>
            <section id="section3" class="container-fluid p-0 h-100" style="background-color: #dbd3d3;">
                <div class="d-flex flex-nowrap h-100">
                    <div class="col-md-4">
                        <div style="position: absolute;bottom: 100px;left:100px;">
                            <img class="img-corner m-auto" src="ileniazitodesign_repo/1.jpeg">
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
                        <div style="position: absolute;top: 100px;right:100px;">
                            <img class="img-corner m-auto" src="ileniazitodesign_repo/2.jpeg">
                        </div>
                        <div class="emblem" style="left: 0!important;right: 0!important;bottom: 110px!important; top:auto!important; margin:0;width: 100px;position: absolute;">Ileniazitodesign-Ileniazitodesign-</div>
                    </div>
                </div>
            </section>
            <section id="section4" class="container-fluid p-0 h-100">
                <div class="d-flex flex-nowrap">
                    <div class="col-md-6" style="z-index: 1;">
                        <div style="top: 0; position: absolute; right: 0;padding-top: 15%; bottom: 0;">
                            <div style="margin-left: 25%;">
                                <img class="" style="border-radius: 0;width: 40%;float:right;margin-right: 25px;" src="ileniazitodesign_repo/1.jpeg">
                                <div style="float:right;margin-right: 25px;">
                                    <h1 style="font-size: -webkit-xxx-large!important;margin-left: 30%;background-color: white;display: inline-block;">CECILIA BAHANSEN</h1>
                                </div>
                                <div style="float:right;margin-right: 25px;">
                                    <label style="float: right;width: 40%;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="z-index: 0;">
                        <div>
                            <div class="emblem" style="margin: auto;top: 125px; position: absolute;z-index: 1;">Ileniazitodesign-Ileniazitodesign-</div>
                            <img class="img-corner" style="top: 0; border-radius: 0; position: absolute; left: 0;padding-top: 15%; bottom: 0; width: 45%;" src="ileniazitodesign_repo/2.jpeg">
                        </div>
                    </div>
                </div>
            </section>
            <section id="section5" class="container-fluid p-0 h-100" style="background-color: #dbd3d3;">
                <div class="d-flex flex-nowrap" >
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center" style="font-family: 'Futura PT', sans-serif;font-size: 20px!important;padding-top:10%">NEWSLETTER</h4>
                        <img style="width: 50%!important;" class="img-corner m-auto" src="ileniazitodesign_repo/1.jpeg">
                        <h1 class="text-center" style="font-size: 40px!important;white-space: normal!important;padding:10%">Subscribe to see the latest updates</h1>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="d-flex flex-nowrap">
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Email" style="width: 60%;float: right;height:60px;background: transparent; border-radius: 0; width: 60%; float: right; height: 60px; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary text-left">SUBSCRIBE  </button>
                    </div>
                </div>
            </section>
        </div>
        <div id="shopmyart" class="page d-none">
            @include("ileniazitodesign.shopmyart")
        </div>
        <footer style="background-color:#CDB4B4">
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
            //sistemare timbri
            //sistemare title lettering nella section_1
            //mettere funzioni cambio pagina
            //distinguere accesso per desktop o per mobile diviso per cartella
            //fare pagina login
            $.fn.lettering = function(name) {
                var t = this.text(),
                tl = t.length,
                r = '';
                for(var i = 0; i < tl; i++) {
                    r += '<span class="' + name + '-' + i + '">' + t[i] + '</span>';
                }
                this.html(r);
            };
            $.fn.rotate = function(children) {
                this.css({
                    transform: 'rotate(-' + parseInt((360 / 80) * ((children.text().length - 1) / 2)) + 'deg)'
                });
            };

            $('.append_span_circle').each(function(){

            var parent = $(this);
            var children = parent.children('.text');
            
            
            parent.rotate(children);
            children.lettering('char');

            });
            
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
                
            })

        </script>
    </body>
</html>