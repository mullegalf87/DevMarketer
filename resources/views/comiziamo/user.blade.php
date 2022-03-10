<style type="text/css">
  
</style>

<div class="main-body">

  <nav aria-label="breadcrumb" class="main-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a>@lang('comiziamo/lang.welcome_my_profile')</a></li>
    </ol>
  </nav>

  <div class="row gutters-sm">

    <div class="col-sm-4 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h6 class="d-flex align-items-center mb-3"><!-- <i class="material-icons text-info mr-2"></i> --></h6>
          <div class="d-flex flex-column align-items-center text-center">
            <img src="" alt="Admin" class="rounded-circle" width="150" height="150" id="image_profile_user">
            <div class="mt-3">
              <h4 id="nickname_user_header"></h4>
              <p class="text-secondary mb-1" id="level_user_header"></p>
              <div id="level_user_header_append"></div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-8 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h6 class="d-flex align-items-center mb-3"><!-- <i class="material-icons text-info mr-2"></i> --></h6>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Nickname</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="nickname_user">             
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.about_me')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="bio_user">          
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.quote')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="quote_user">            
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>

  </div>

  <div class="row gutters-sm" id="card_party" style="display: none;">

    <div class="col-sm-8 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i></h6>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.name_party')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="name_party_user">

            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.political_orientation')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="dir_party_user">
    
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.description_party')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="desc_party_user">
   
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.leader_party')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="leader_party_user">
   
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">@lang('comiziamo/lang.subscribers')</h6>
            </div>
            <div class="col-sm-9 text-secondary" id="numb_party_user">
   
            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i></h6>
          <div class="d-flex flex-column align-items-center text-center">
            <img src="" alt="Admin" class="rounded-circle" width="150" height="150" id="image_profile_party_user">
            <div class="mt-3">
              <h4 id="name_party_user_header"></h4>
              <p class="text-secondary mb-1" id="level_party_user_header"></p>
              <div id="level_party_user_header_append"></div>
            
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <header class="header mb-3">
    <div class="container">
      <h5>@lang('comiziamo/lang.party_allies')</h5>
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-12" style="text-align: center;padding-bottom: 15px"> 
          <ul data-component data-padding-unset class="smol-avatar-list" id="append_party_user">
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="card col-md-12" style="flex-grow: 1;">
    <div class="card-body">
      <h6 class="d-flex align-items-center mb-3"><i class="">@lang('comiziamo/lang.argument_comiziati_votes')</i></h6>
      <div id="get_argument_partecipant_user"></div>
    </div>
  </div>

  <header class="header col-md-12 mt-3" id="header_comment_user" style="display: none">
    <div class="container">
      <div class="row main-body">
        <div class="col-6">
          <h3 class="mb-3">@lang('comiziamo/lang.votes')</h3>
        </div>
        <div class="col-6 text-right" style="">
          <a class="btn btn-secondary mb-3 mr-1" href="#carousel_user_CommentControls" role="button" data-slide="prev" id="">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-secondary mb-3 " href="#carousel_user_CommentControls" role="button" data-slide="next" id="">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12">
          <div id="carousel_user_CommentControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carousel_inner_comment_user">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</div>


<script type="text/javascript">

  function start_function_user(id_user){

    var id_user_profile="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";

    if (id_user_profile==id_user) {

      change_vis("profile");

    }else{

      get_data_user_comiziamo(id_user, "user");
      get_argument_partecipant_user(id_user, "user");

    }

  }

  function get_data_user_comiziamo(id_user, from){
    $("#append_party_"+from).empty();
    $("#card_party").hide();
    $("#header_comment_user").hide();
    $.get("/get_data_user_comiziamo",{id_user:id_user},
      function(data){

        var res=jQuery.parseJSON(data);
        var src;
        var src_user;
        var src_party;

        if (res.data_user[0].img=="") {

          src_user="uploads/default_img.png?refresh=<?php echo rand(1,999); ?>";

        }else{

          src_user="uploads/img_user/"+res.data_user[0].img;

        }
        $("#image_profile_"+from).attr("src",src_user);
        $("#nickname_"+from+"_header").text(res.data_user[0].nickname);
        $("#level_"+from+"_header").text("@lang('comiziamo/lang.level') "+res.data_user[0].level_char);
        $("#nickname_"+from).text(res.data_user[0].nickname);
        $("#bio_"+from).text(res.data_user[0].bio);
        $("#quote_"+from).text(res.data_user[0].quote);

        $("#level_"+from+"_header_append").html('<button id="user_'+from+'_'+res.data_user[0].id_user+'" class="btn btn-outline-secondary follow_button" onclick="follow('+res.data_user[0].id_user+',\'user\')">@lang("comiziamo/lang.allies")</button>');
  
 
        if (res.data_user_party!=0) {

          $("#card_party").show();
          if (res.data_user[0].img_party=="") {

          src_party="uploads/default_img.png?refresh=<?php echo rand(1,999); ?>";

          }else{

            src_party="uploads/img_party/"+res.data_user[0].img_party;

          }

          $("#image_profile_party_"+from).attr("src",src_party);
          $("#name_party_"+from+"_header").text(res.data_user[0].name_party);
          $("#level_party_"+from+"_header").text("@lang('comiziamo/lang.level') "+res.data_user[0].level_char);
          $("#name_party_"+from).text(res.data_user[0].name_party);
          $("#dir_party_"+from).text(res.data_user[0].direction_party);
          $("#desc_party_"+from).text(res.data_user[0].desc_party);
          $("#leader_party_"+from).text(res.data_user[0].nickname);
          $("#numb_party_"+from).text(res.data_user[0].count_allied);


          $("#level_party_"+from+"_header_append").html('<button id="user_party_'+from+'_'+res.data_user[0].id+'" class="btn btn-outline-secondary follow_button" onclick="follow_party('+res.data_user[0].id+',\''+from+'\')">@lang("comiziamo/lang.allies")</button>');

        }

        for (var i = 0; i < res.data_user_party.length; i++) {

          if (res.data_user_party[i].img_party=="") {

            src="uploads/default_img.png?refresh=<?php echo rand(1,999); ?>"

          }else{

            src="uploads/img_party/"+res.data_user_party[i].img_party+"?refresh=<?php echo rand(1,999); ?>"

          }


          $("#append_party_"+from).append('<li>'+
            '<img onclick="change_vis(\'user_'+res.data_user_party[i].creator_party+'\')" alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
            '<p style="font-size: small;" class="my-link">'+res.data_user_party[i].name_party+'</p>'+
            '</a>'+
            '</li>');
        }


        read_button_follow(from);
        read_button_follow_party(res.data_user[0].id, from);
        

      });

  }
</script>