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

        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" onclick="change_vis('home')">{{ $name }} - Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="home">Features</a>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav">
                        @if( auth()->guard('users_test')->check() )
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ciao {{ auth()->guard('users_test')->user()->username }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" onclick="change_vis('action')">Action</a>
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
            @include("test.mobile.home")
        </div>
        <div id="login" class="page" style="display: none;">
            @include("test.mobile.login")
        </div>
        <div id="action" class="page" style="display: none;">
            @include("test.mobile.action")
        </div>

        <script>

            var myhistory = [];
            var data = {!!$page!!};
            var page_to_go = data.id;
            change_vis(page_to_go);
            function change_vis(page, history){
                var res_id;
                if (page.includes('_')) {
                    res_id=page.split("_")[1];
                    page=page.split("_")[0];
                }
                var old_page=window.location.href.split("=")[1];
                if (old_page.indexOf('layout') == 0) {
                    $("#layout").hide();
                }else{
                    $("#"+old_page).hide();
                }
                if(history != 0){
                    var id_user_profile="@if( auth()->guard('users_test')->check() ){{ auth()->guard('users_test')->user()->id}}@endif";
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
                    history.pushState(null, null, window.history.replaceState(null, null, "/tt?page="+page_name));
                if (page_name=="layout") {
                    history.pushState(null, null, window.history.replaceState(null, null, "/tt?page="+page_name+"_"+res_id));
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

            function case_page(page_name, res_id){
                switch(page_name) {
                    case "home":
                    break;
                    case "login":
                    break;
                    case "action":
                    break;
                    default:
                }
                $("html, body").animate({ scrollTop: 0 }, "slow");
                if($(".navbar-collapse").hasClass("show")==true){
                    $(".navbar-toggler").click();
                }
            }

            function logout_test(){
                $.get("/logout_test",{},
                function(){
                    window.location.replace("/test");
                });
            }

        </script>
    </body>
</html>