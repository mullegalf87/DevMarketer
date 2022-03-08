
<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap 4.5 bootstrap-->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" onclick="change_vis('home')">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if( auth()->guard('users_test')->check() )
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ciao {{ auth()->guard('users_test')->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div id="login" class="page" style="display: none;">
            @include("test.login")
        </div>
        <div id="action" class="page" style="display: none;">
            @include("test.action")
        </div>
        <script>

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
                
                // if (page_name=="layout") {
                    
                //     history.pushState(null, null, window.history.replaceState(null, null, "/pm?page="+page_name+"_"+res_id));
                    
                // } else{
                    
                //     history.pushState(null, null, window.history.replaceState(null, null, "/pm?page="+page_name));
                    
                // }
                
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
                        start_test();
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