<style type="text/css">


/***
 🟣 SmolCSS Snippet Styles
 */
.smol-avatar-list {
  --avatar-size: 3rem;
  --avatar-count: 3;
  display: flex;
  flex-wrap: wrap;
  /* Default to displaying most of the avatar to
  enable easier access on touch devices, ensuring
  the WCAG touch target size is met or exceeded */
  grid-template-columns: repeat(var(--avatar-count), max(44px, calc(var(--avatar-size) / 1.15)));
  /* `padding` matches added visual dimensions of
  the `box-shadow` to help create a more accurate
  computed component size */
  padding: 0.08em;
  font-size: var(--avatar-size);
}

@media (any-hover: hover) and (any-pointer: fine) {
  .smol-avatar-list {
    /* We create 1 extra cell to enable the computed 
    width to match the final visual width */
    grid-template-columns: repeat(calc(var(--avatar-count) + 1), calc(var(--avatar-size) / 1.75));
  }
}
.smol-avatar-list li {
  width: var(--avatar-size);
  height: var(--avatar-size);
}

.smol-avatar-list li:hover ~ li a,
.smol-avatar-list li:focus-within ~ li a {
  transform: translateX(33%);
}

.smol-avatar-list img,
.smol-avatar-list a {
  display: block;
  border-radius: 50%;
}

.smol-avatar-list a {
  transition: transform 180ms ease-in-out;
}

.smol-avatar-list img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  background-color: #fff;
  box-shadow: 0 0 0 0.05em #fff, 0 0 0 0.08em rgba(0, 0, 0, 0.15);
}

.smol-avatar-list a:focus {
  outline: 2px solid transparent;
  /* Double-layer trick to work for dark and light backgrounds */
  box-shadow: 0 0 0 0.08em #29344b, 0 0 0 0.12em white;
}

/* Additional demo styles from SmolCSS.dev
   Not all styles may be needed for this pen */
ul {
  list-style: none;
  margin: 0;
}
ul:not([data-padding-unset]) {
  padding: 0;
}

[class*=smol]:not([data-component]) > *:not([data-unstyled]) {
  display: grid;
  padding: 1rem;
  background-color: #e0d4f6;
  color: #675883;
  font-size: clamp(1.5rem, 4vw, 2rem);
  font-weight: bold;
  text-align: center;
  border-radius: 0.15em;
  border: 1px dashed;
}
[class*=smol]:not([data-component]) > *:not([data-unstyled]):not([data-text]) {
  place-content: center;
}
[class*=smol]:not([data-component]) > *:not([data-unstyled])[data-text] {
  font-size: 1.15rem;
  text-align: left;
}

[data-container-style] {
  outline: 2px dotted #29344b;
}


/*style circle button vote*/
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}


/*style zoom image*/
/* Styles the thumbnail */

a.lightbox img {
height: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
/*margin: 94px 20px 20px 20px;*/
object-fit: cover; 
}

video {
height: 150px;
width: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
/*margin: 94px 20px 20px 20px;*/
object-fit: cover; 
}

/* Styles the lightbox, removes it from sight and adds the fade-in transition */

.lightbox-target {
position: fixed;
top: -100%;
width: 100%;
background: rgba(0,0,0,.7);
width: 100%;
opacity: 0;
-webkit-transition: opacity .5s ease-in-out;
-moz-transition: opacity .5s ease-in-out;
-o-transition: opacity .5s ease-in-out;
transition: opacity .5s ease-in-out;
overflow: hidden;
}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

.lightbox-target img {
margin: auto;
position: absolute;
top: 0;
left:0;
right:0;
bottom: 0;
max-height: 0%;
max-width: 0%;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
box-sizing: border-box;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Styles the close link, adds the slide down transition */

a.lightbox-close {
display: block;
width:50px;
height:50px;
box-sizing: border-box;
background: white;
color: black;
text-decoration: none;
position: absolute;
top: -80px;
right: 0;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:before {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-o-transform:rotate(45deg);
transform:rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:after {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(-45deg);
-moz-transform:rotate(-45deg);
-o-transform:rotate(-45deg);
transform:rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
z-index: 100;
opacity: 1;
top: 56px;
bottom: 0;
left: 0;
}

.lightbox-target:target img {
max-height: 100%;
max-width: 100%;
}

.lightbox-target:target a.lightbox-close {
top: 0px;
}


/*style mylink*/
.my-link{
  padding: 5px 5px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  vertical-align: middle;
  line-height: normal;
}
</style>

<div id="display_vote" style="display: none;">
  <header class="header">
    <div class="container">
      <div class="row" style="">
        <div class="col-sm-12" style="text-align: center;padding-bottom: 15px"> 
          <ul data-component data-padding-unset class="smol-avatar-list" id="append_list_avatar_vote">
          </ul>
        </div>
      </div>
    </div>
  </header>
  <header class="header" style="background: #fff;">
    <div class="container">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-3" style="text-align: center;padding-bottom: 15px"> 
          <a> <img id="img_profile_vote" class="rounded-circle" src="" alt="Rick" style="width: 150px; height: 150px;"></a>
          <div class="button-email">
            <div class="teacher-name">
              <div class="row">
                <div class="col-sm-12" style="text-align: center;">
                  <h5><strong id="nickname_profile_vote"></strong></h5>
                </div>
              </div>
            </div>
            <span class="number">@lang('comiziamo/lang.level') <strong id="level_char_profile_vote"></strong><div id="button_allied"></div></span>
          </div> 
        </div>
        <div class="col-sm-9">
          <div class="col mb-3 card column" style="">
            <div class="row g-0">
              <div class="col-md-4" style="padding: 0!important;">
                <img id="image_arg_vote" src="" alt="..." class="" style="height: 100%; width: 100%;object-fit: cover;"/>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5><i class="fa-fw" id="append_social_share_vote"></i>
                  </h5>
                  <p class="card-text" id="argument_vote">
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="card card-block text-xs-left" style="padding: 15px">
            <div id="">
              <h5><i class="bx bx-bookmark-minus fa-fw" id="append_social_share_vote"></i><label id="argument_title_vote"></label></h5>
              <p id="argument_vote" style="text-align: justify;text-justify: inter-word;">
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </header>
  <header class="header">
    <div class="container">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-12" style="padding-bottom: 15px"> 
          <div class="card card-block text-xs-left" style="padding: 15px">
            <div style="display: flex; flex-wrap: nowrap;">
              <h5 style="flex-grow: 1">Preview Comizio</h5>
              <button style="margin-bottom: .5rem;margin-right: .5rem;" type="button" class="btn btn-danger btn-circle down_button"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="font-size: x-large;"></i>
              </button>
              <button style="margin-bottom: .5rem;" type="button" class="btn btn-success btn-circle prefer_button"><i class="fa fa-thumbs-o-up " aria-hidden="true" style="font-size: x-large;"></i>
              </button>
            </div>
            <div class="form-group">
              <div class="card" style="background-color: lightgrey;">
                <div class="row">
                  <div id="card_preview_vote" style="display: flex;flex-wrap: nowrap; padding: 15px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="comment_user_vote" class="col-sm-12" style="padding-bottom: 15px; display: none;">
          <div class="card card-block text-xs-left" style="padding: 15px">
            <div>
              <h5 id="title_comment"></h5>
              <textarea maxlength="255" class="form-control sam_notes" rows="5" id="comment_text_area_vote" placeholder=""></textarea>
              <p style="float: left; padding-top: 15px;">
              <a class="btn btn-secondary" target="_blank" role="button" id="button_send_bad_comment" style="display: none"><i class="fa fa-chevron-left" aria-hidden="true"></i> @lang('comiziamo/lang.send_abuse')
              </a>
              </p>
              <p style="float: right; padding-top: 15px;">
              <a class="btn btn-secondary" target="_blank" role="button" id="button_send_comment" style="display: none">@lang('comiziamo/lang.send_comment') <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>

<script type="text/javascript">
  
  function start_function_vote(res_id){

    get_argument_vote(res_id);
    
  }

  function get_argument_vote(res_id){

    $.get("/get_argument_vote_comiziamo",{res_id:res_id},
      function(data){
        var res=jQuery.parseJSON(data);

        if (res.length==0 || res[0].timer_start_rally=="0000-00-00" || res[0].partecipant==0 ) {

          window.location.replace("/comiziamo");

        } else{
          $("#arg_share_vote").empty();
          $(".share-btn-more").remove();
          var pageUrl = encodeURIComponent(document.URL);
          $("#append_social_share_vote").after('<label id="arg_share_vote">'+res[0].title_argument+'</label> <a class="share-btn share-btn-more" href="https://www.addtoany.com/share_save?linkurl='+pageUrl+'" target="_blank" title="More share options">'+
            '<span class="share-btn-icon"></span>'+
            '<span class="share-btn-text-sr">More</span>'+
            '</a>');
          
          $("#display_vote").show();
          $("#argument_vote").text(res[0].argument);

          if (res[0].img_arg=="") {
            $("#image_arg_vote").attr("src","uploads/default_img.png?refresh=<?php echo rand(1,999); ?>");
          }else{
            $("#image_arg_vote").attr("src","uploads/img_argument/"+res[0].img_arg);
          }
          // $("#argument_title_vote").text(res[0].title_argument);
          get_partecipant_rally(res_id);
        }
        
      });

  }

  function get_partecipant_rally(res_id){
    $("#append_list_avatar_vote").empty();
    $(".follow_button").remove();

    $.get("/get_partecipant_rally_comiziamo",{res_id:res_id},
      function(data){

        var res=jQuery.parseJSON(data);
        var src;
        var name_user_party;
        var id_party;

        for (var i = 0; i < res.length; i++) {
         

          if (res[i].type_user_party==1) {

            if (res[i].img_party=="") {

              src="uploads/default_img.png?refresh=<?php echo rand(1,999); ?>";

            }else{

              src="uploads/img_party/"+res[i].img_party+"?refresh=<?php echo rand(1,999); ?>";
              $("#img_profile_vote").attr("src","uploads/img_party/"+res[i].img_party+"?refresh=<?php echo rand(1,999); ?>");
              
            }

            name_user_party=res[i].name_party;
            id_party=res[i].id_party;

          }else{

            if (res[i].img_profile=="") {

              src="uploads/default_img.png?refresh=<?php echo rand(1,999); ?>";

            }else{

              src="uploads/img_user/"+res[i].img_profile+"?refresh=<?php echo rand(1,999); ?>";
              $("#img_profile_vote").attr("src","uploads/img_user/"+res[i].img_profile+"?refresh=<?php echo rand(1,999); ?>");
              
            }
            
            name_user_party=res[i].nickname_profile;
          }


          $("#append_list_avatar_vote").append('<li>'+
            '<a onclick="show_profile_vote(\''+res[i].id_user+'\',\''+res[i].type_user_party+'\',\''+res[i].img_party+'\',\''+res[i].img_profile+'\',\''+name_user_party+'\',\''+res[i].level_char_profile+'\',\''+res_id+'\',\''+id_party+'\')">'+
              '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
              '<p style="font-size: small;" class="my-link">'+name_user_party+'</p>'+
            '</a>'+
          '</li>');
      
        }

        var name_user_party_2;
        if (res[0].type_user_party==1) {

          $("#nickname_profile_vote").html(res[0].name_party);
          name_user_party_2=res[0].name_party;
        }else{

          $("#nickname_profile_vote").html(res[0].nickname_profile);
          name_user_party_2=res[0].nickname_profile;

        }

        
        
        $("#level_char_profile_vote").html(res[0].level_char_profile);

          show_profile_vote(res[0].id_user, res[0].type_user_party, res[0].img_party, res[0].img_profile,  name_user_party_2, res[0].level_char_profile, res_id, id_party);
      
      });

  }

  $('.carousel').carousel({
  interval: false
  });

  function show_profile_vote(id_user, type_user_party, img_party, img_profile, nickname_profile, level_char_profile, res_id, id_party){
    $("#comment_user_vote").hide();
    $("#card_preview_vote").empty();
    $("#button_allied").empty();

    var id_user_profile="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";

    if (id_user_profile!="") {

      if (type_user_party==1) {

        if (img_party=="") {
          $("#img_profile_vote").attr("src","uploads/default_img.png?refresh=<?php echo rand(1,999); ?>");
        }else{
          $("#img_profile_vote").attr("src","uploads/img_party/"+img_party+"?refresh=<?php echo rand(1,999); ?>");
        }

        if (id_user_profile!=id_user) {


            $("#button_allied").append('<br><button id="user_party_vote_'+id_party+'" class="btn btn-outline-secondary follow_button" onclick="follow_party('+id_party+',\'vote\')">@lang("comiziamo/lang.allies")</button>');
            
          }

      read_button_follow_party(id_party, "vote");  

      }else{

        if (img_profile=="") {
          $("#img_profile_vote").attr("src","uploads/default_img.png?refresh=<?php echo rand(1,999); ?>");
        }else{
          $("#img_profile_vote").attr("src","uploads/img_user/"+img_profile+"?refresh=<?php echo rand(1,999); ?>");
        }


        if (id_user_profile!=id_user) {


            $("#button_allied").append('<br><button id="user_vote_'+id_user+'" class="btn btn-outline-secondary follow_button" onclick="follow('+id_user+',\'vote\')">@lang("comiziamo/lang.allies")</button>');
            
          }

      read_button_follow("vote"); 

      }

      $("#img_profile_vote").attr("onclick","change_vis(\"user_"+id_user+"\")");

    }else{

      if (type_user_party==1) {

        if (img_party=="") {
          $("#img_profile_vote").attr("src","uploads/default_img.png?refresh=<?php echo rand(1,999); ?>");
        }else{
          $("#img_profile_vote").attr("src","uploads/img_party/"+img_party+"?refresh=<?php echo rand(1,999); ?>");
        }

        if (id_user_profile!=id_user) {


            $("#button_allied").append('<br><button id="user_party_vote_'+id_party+'" class="btn btn-outline-secondary follow_button" onclick="follow_party('+id_party+',\'vote\')">@lang("comiziamo/lang.allies")</button>');
            
          } 

      }else{

        if (img_profile=="") {
          $("#img_profile_vote").attr("src","uploads/default_img.png?refresh=<?php echo rand(1,999); ?>");
        }else{
          $("#img_profile_vote").attr("src","uploads/img_user/"+img_profile+"?refresh=<?php echo rand(1,999); ?>");
        }


        if (id_user_profile!=id_user) {


            $("#button_allied").append('<br><button id="user_vote_'+id_user+'" class="btn btn-outline-secondary follow_button" onclick="follow('+id_user+',\'vote\')">@lang("comiziamo/lang.allies")</button>');
            
          }

      }

    }

    
    
    $(".prefer_button").attr("onclick","open_comment(\""+res_id+"\", \""+id_user+"\", \"prefer\")");
    $(".down_button").attr("onclick","open_comment(\""+res_id+"\", \""+id_user+"\", \"down\")");
    $("#nickname_profile_vote").html(nickname_profile);
    $("#level_char_profile_vote").html(level_char_profile);

    $.get("/get_preview_vote_comiziamo",{id_user:id_user, res_id:res_id},
      function(data){

        var res=jQuery.parseJSON(data);
        var directory=res.directory;
        var numb_img;
        

        if (res.preview==2) {
          
          for (var i = 0; i < res.file.length; i++) {

            numb_img=i+1;    

            if(window.matchMedia("(max-width: 767px)").matches){
              //cell
              $("#card_preview_vote").css("flex-wrap","wrap")
               
            } else if(window.matchMedia("(max-width: 992px)").matches){
              //tablet
             
            } else{
           
              //desktop
            }        

            $("#card_preview_vote").append(
              '<div class="card-body" style="text-align:center">'+
              '<a class="lightbox" onclick="zoom_img(\''+directory+'\',\''+res.file[i]+'\',\'vote_'+numb_img+'\',\''+numb_img+'\', vote)">'+
              '<img class="myImg" id="myImg_vote_'+numb_img+'" src="'+directory+res.file[i]+'?refresh=<?php echo rand(1,999); ?>">'+
              '</a>'+ 
              '<div id="myModal_vote_'+numb_img+'" class="modal" style="">'+
              '<span class="close_modal" onclick="close_modal(\'vote_'+numb_img+'\',\''+numb_img+'\',vote)">&times;</span>'+
              '<img class="modal-content test" id="vote_'+numb_img+'">'+
              '</div>'+
              '</div>');

          } 

        }else if (res.preview==1){

          $("#card_preview_vote").html(
            '<div class="card-body">'+
              '<p class="card-text">'+res.preview_comment+'</p>'+
            '</div>');

        }else{

          $("#card_preview_vote").html(
            '<div class="card-body" style="text-align:center">'+
              '<video  controls>'+
                '<source src="'+directory+res.file[0]+'" type="video/ogg">'+
                '<source src="'+directory+res.file[0]+'" type="video/mp4">'+
                '<source src="'+directory+res.file[0]+'" type="audio/ogg">'+
                '<source src="'+directory+res.file[0]+'" type="audio/mpeg">'+
              '</video>'+
            '</div>');

        }


        $("html, body").animate({ scrollTop: $(document).height() }, 1000);

      });

  }

  function open_comment(res_id, id_user, from){


    var id_user_profile="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";


    $("#comment_user_vote").show();
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    if (from=="prefer") {
      $("#button_send_comment").show();
      $("#button_send_bad_comment").hide();
      if (id_user_profile!="") {
        $("#button_send_comment").attr("onclick","send_comment_vote(\""+res_id+"\",\""+id_user+"\")");
      }else{
        $("#button_send_comment").attr("onclick","change_vis(\"login\")");
      }
      $("#title_comment").html("@lang('comiziamo/lang.comment_preference') <span class='comment_text_area_vote'></span>");
      $("#comment_text_area_vote").attr("placeholder","@lang('comiziamo/lang.sub_comment_preference')");
    }else{
      $("#button_send_bad_comment").show();
      $("#button_send_comment").hide();
      if (id_user_profile!="") {
        $("#button_send_bad_comment").attr("onclick","send_bad_comment_vote(\""+res_id+"\",\""+id_user+"\")");
      }else{
        $("#button_send_bad_comment").attr("onclick","change_vis(\"login\")");
      }
      $("#title_comment").html("@lang('comiziamo/lang.signal_abuse') <span class='comment_text_area_vote'></span>");
      $("#comment_text_area_vote").attr("placeholder","@lang('comiziamo/lang.signal_abuse')");
    }
    
    

  }

  function send_comment_vote(res_id, id_user){

    var comment=$("#comment_text_area_vote").val();
    $.get("/send_comment_vote_comiziamo",{res_id:res_id, comment:comment, id_user:id_user},
      function(data){
  
        var res=jQuery.parseJSON(data);
        if (res=="myself") {
          alert("@lang('comiziamo/lang.not_vote_yourself')")
        }else{
          change_vis('argument');
        }

      });

  }

  function send_bad_comment_vote(res_id, id_user){

    var comment=$("#comment_text_area_vote").val();
    $.get("/send_bad_comment_vote_comiziamo",{res_id:res_id, comment:comment, id_user:id_user},
      function(data){

        var res=jQuery.parseJSON(data);
        if (res=="myself") {
          alert("@lang('comiziamo/lang.not_abuse_yourself')")
        }else{
          change_vis('argument');
        }

      });

  }
  



  

</script>