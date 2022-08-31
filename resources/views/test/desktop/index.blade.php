<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap 5.2 bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- konva -->
        <script src="test_repo/js/konva.js"></script>
        <!-- libreria api sincronizzazione giacenze -->
        <!-- <script src="http://176.107.131.30/js/test_api.js"></script> -->
        <style>
            /*style language*/
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
            .active-lang {
                display: flex !important;
                transition: display .5s;
            }
            .active-flag {
                transition: all .5s;
                opacity: 1 !important;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" onclick="change_vis('home')">{{ $lastname }} - Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="home">Features</a>
                        </li> -->
                        <li class="nav-item active display_lang" style="margin: auto;">
                            <div id="lang-switch" style="display: flex;flex-wrap: nowrap;">
                                <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/Italy-Flag.png" class="it">
                                <img src="https://cdn3.iconfinder.com/data/icons/finalflags/256/United-Kingdom-flag.png" class="en">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @if( auth()->guard('users_test')->check() )
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ciao {{ auth()->guard('users_test')->user()->username }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" onclick="change_vis('action')">{{ __('test/lang.action') }}</a>
                                <a class="dropdown-item" onclick="logout_test()">Logout</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" onclick="change_vis('login')">Login</a>
                        </li>
                        @endif 
                    </ul>
                </div>
            </div>
        </nav>
        <div id="home" class="page" style="display: none;">
            @include("test.desktop.home")
        </div>
        <div id="login" class="page" style="display: none;">
            @include("test.desktop.login")
        </div>
        <div id="action" class="page" style="display: none;">
            @include("test.desktop.action")
        </div>
        <div id="actiondetail" class="page" style="display: none;">
            @include("test.desktop.actiondetail")
        </div>

        <script>

            //cambio lingua
            var url = "{{ route('TtLangChange') }}";
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
                    // italian button
                    $("#lang-switch .it").click(function() {
                        // Enable italian
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
                        // Disable italian
                        $('.it_lang').removeClass("active-lang")
                        // Active or remove the opacity on the flags.
                        $('#lang-switch .en').addClass("active-flag");
                        $('#lang-switch .it').removeClass("active-flag");
                        window.location.href = url + "?lang=en";
                    });
                });
            });

            //cambio pagina
            var myhistory = [];
            var data = {!! $page !!};
            var page_to_go = data.id;
            change_vis(page_to_go);
            function change_vis(page, history){
                var num_page_detail = {!! $num_page !!};
                var old_page=window.location.href.split("=")[1];
                if (old_page.indexOf('actiondetail') == 0) {
                    $("#actiondetail").hide();
                }else{
                    $("#"+old_page).hide();
                }
                if(history != 0){
                    myhistory.push(old_page);
                }
                old_page=page;
                $("#"+page).show();
                button_back(page, num_page_detail);
                case_page(page, num_page_detail); 
            }
            
            //torna indietro tra le pagine
            function button_back(page_name, num_page_detail){
                history.pushState(null, null, history.pushState(null, null, window.location.href.substr(0, window.location.href.indexOf(page_name))));
                    history.pushState(null, null, window.history.replaceState(null, null, "/tt?page="+page_name));
                if (page_name=="actiondetail") {
                    history.pushState(null, null, window.history.replaceState(null, null, "/tt?page="+page_name+"_"+num_page_detail));
                } else{
                    history.pushState(null, null, window.history.replaceState(null, null, "/tt?page="+page_name));
                }
                window.onpopstate = function () {
                    if (myhistory.length==1) {
                        history.pushState(null, null, location.href);
                        window.onpopstate = function () {
                            history.go(1);
                        };
                        return "http://localhost:8000/test";
                    } else {
                        change_vis(myhistory.pop(), 0); 
                    }
                };
            }

            //passaggio tra una pagina e l'altra
            function case_page(page_name, num_page_detail){
                switch(page_name) {
                    case "home":
                    break;
                    case "login":
                    break;
                    case "action":
                    break;
                    case "actiondetail":
                    start_function_actiondetail(num_page_detail);
                    break;
                    default:
                }
                $("html, body").animate({ scrollTop: 0 }, "slow");
                if($(".navbar-collapse").hasClass("show")==true){
                    $(".navbar-toggler").click();
                }
            }

            //logout
            function logout_test(){
                $.get("/logout_test",{},
                function(){
                    window.location.replace("/test");
                });
            }

        </script>
    </body>
</html>