<style type="text/css">
.highcharts-credits{
  display: none;
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
</style>

<!-- highchart -->
@if( auth()->guard('users_comiziamo')->check() )
<div id="display_chart" style="display: none;">
  <div id="container"></div>
  <header class="header" id="header_winner" style="">
    <div class="container">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-12">
          <div class="card card-block text-xs-left" style="padding: 15px">
            <div id="">
              <h5><i class="bx bx-star fa-fw"></i>@lang('comiziamo/lang.results')</h5>
              <p id="winner_chart" style="text-align: justify;text-justify: inter-word;">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <header class="header" id="header_argument" style="display: none;">
    <div class="container">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-12">
          <div class="col mb-3 card column" style="">
            <div class="row g-0">
              <div class="col-md-4" style="padding: 0!important;">
                <img id="image_arg_chart" src="" alt="..." class="" style="height: 100%; width: 100%;object-fit: cover;"/>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5><i class="fa-fw"></i><label id="argument_title_chart"></label></h5>
                  <p class="card-text" id="argument_chart">
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="card card-block text-xs-left" style="padding: 15px">
            <div id="">
              <h5><i class="bx bx-bookmark-minus fa-fw"></i><label id="argument_title_chart"></label></h5>
              <p id="argument_chart" style="text-align: justify;text-justify: inter-word;">
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </header>
  <header class="header" id="header_preview" style="display: none">
    <div class="container">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-12" style="padding-bottom: 15px"> 
          <div class="card card-block text-xs-left" style="padding: 15px">
            <div style="display: flex; flex-wrap: nowrap;">
              <h5 style="flex-grow: 1" >Preview Comizio<h5 id="preview_title_user"></h5></h5>
            </div>
            <div class="form-group">
              <div class="card" style="background-color: lightgrey;">
                <div class="row">
                  <div id="card_preview_chart" style="display: flex;flex-wrap: nowrap; padding: 15px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <header class="header" id="header_comment" style="display: none">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3 class="mb-3">@lang('comiziamo/lang.comments')</h3>
        </div>
        <div class="col-6 text-right" style="">
          <a class="btn btn-secondary mb-3 mr-1" href="#carouselChartCommentControls" role="button" data-slide="prev" id="left_button">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="btn btn-secondary mb-3 " href="#carouselChartCommentControls" role="button" data-slide="next" id="right_button">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="col-12">
          <div id="carouselChartCommentControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carousel_inner_comment_chart">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</div>
@else
@include("comiziamo.login")
@endif
<script type="text/javascript">

  var array_comment_page = [];
  
  function start_function_chart(res_id){

    get_charts(res_id);
    get_argument_chart(res_id);
    get_winner_chart(res_id);

  }

  function get_argument_chart(res_id){

    $.get("/get_argument_chart_comiziamo",{res_id:res_id},
      function(data){
        var res=jQuery.parseJSON(data);

        if (res.length==0 || res[0].partecipant==0) {

          window.location.replace("/comiziamo");

        } else{
          
          $("#display_chart").show();
          $("#argument_chart").text(res[0].argument);
          $("#argument_title_chart").text(res[0].title_argument);
          if (res[0].img_arg=="") {
            $("#image_arg_chart").attr("src","uploads/default_img.png?refresh=<?php echo rand(1,999); ?>");
          }else{
            $("#image_arg_chart").attr("src","uploads/img_argument/"+res[0].img_arg);
          }
        }

      });

  }

  function get_charts(res_id){ 
    var categories=[];
    var data_perc=[];
    var series=[];
    var res;
    var name;

    $.get('/get_statistics_comiziamo', {res_id:res_id},
      function(data){ 
        res =jQuery.parseJSON(data);

        for (var i = 0; i < res.length; i++) {

          if (res[i].type_user_party==1) {

            name=res[i].name_party;

          }else{

            name=res[i].nickname;

          }

          data_perc=[{y:res[i].vote, id_user:res[i].id_user}];
          series.push({ data:data_perc, name:name});

        }

      Highcharts.chart('container', {
        chart: {
          renderTo: 'container',
          type: 'column'
        },
        plotOptions: {
          series: {
            cursor: 'pointer',
            point: {
              events: {
                click: function () {

                  $(".carousel_inner_comment_chart").empty();

                  $(".block_comment").empty();
                  
                  var size = 3;
                  var id_user=this.series.data[0].id_user;

                  $("#preview_title_user").text(this.series.name);

                  $("#header_argument").show();

                  $("#header_preview").show();

                  get_preview_chart(res_id, id_user);

                  $.get('/get_comment_chart_comiziamo', {res_id:res_id, id_user:id_user},
                    function(data){ 
                      var res =jQuery.parseJSON(data);  
                      var numb_comment;         
                      var array_comment_page=[];
                      var array_comment_post_page=[];
                      var id_user_profile="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";
                      for (var i=0; i<res.length; i+=size) {
                           array_comment_page.push(res.slice(i,i+size));
                      }     
                       
                      for (var i = 0; i < array_comment_page.length; i++) {

                        numb_comment=i+1;

                        if (i==0) {

                          act="active";

                        } else{

                          act="";

                        }

                        $(".carousel_inner_comment_chart").append(
                          '<div class="carousel-item '+act+'">'+
                            '<div class="row item_comment_'+numb_comment+'">'+
                            '</div>'+
                          '</div>');
                        
                        for (var y = 0; y < array_comment_page[i].length; y++) {

                          if (array_comment_page[i][y].comment=="") {

                            var comment="nessun commento";

                          } else{

                            var comment=array_comment_page[i][y].comment;
                          }

                          if (array_comment_page[i][y].img=="") {

                            var src="uploads/default_img.png?refresh=<?php echo rand(1,999); ?>";

                          }else{

                            var src="uploads/img_user/"+array_comment_page[i][y].img+"?refresh=<?php echo rand(1,999); ?>"
                          }

                          if (id_user_profile!=array_comment_page[i][y].id_user) {

                            var button='<button id="user_chart_'+array_comment_page[i][y].id_user+'" class="btn btn-outline-secondary" onclick="follow('+array_comment_page[i][y].id_user+',\'chart\')">@lang("comiziamo/lang.allies")</button>';

                          }else{
                            var button="";
                          }
                          

                          $(".item_comment_"+numb_comment).append(
                            '<div class="col-md-4 mb-3">'+
                            '<div class="card">'+
                            '<div class="d-flex flex-column align-items-center text-center" style="padding: 15px;">'+
                            '<img id="image_profile" src="'+src+'" alt="Admin" class="rounded-circle" width="150" height="150" onclick="change_vis(\'user_'+array_comment_page[i][y].id_user+'\')">'+
                            '<div class="mt-3">'+
                            '<h4>'+array_comment_page[i][y].nickname+'</h4>'+
                            '<p class="text-secondary mb-1">@lang("comiziamo/lang.level") '+array_comment_page[i][y].level_char+'</p>'+button+
                            '</div>'+
                            '</div>'+
                            '<div class="card-body" style="background-color:lightgray">'+
                            '<p class="card-text">'+comment+'</p>'+
                            '</div>'+
                            '</div>');

                          }

                      }
                      read_button_follow("chart");

                       $("html, body").animate({ scrollTop: $(document).height() }, 1000);
                      
                    });
                  }
                }
              }
            },
          },
          title: {
            text: '@lang("comiziamo/lang.votes")'
          },
          xAxis: {
           categories: ['@lang("comiziamo/lang.users")']
          },
          yAxis: {
            min: 0,
            title: {
              text: '@lang("comiziamo/lang.votes")'
            }
          },
          series: series
        });

      });
  }


  $('.carousel').carousel({
  interval: false
  }); 


  function get_preview_chart(res_id, id_user){

    $("#card_preview_chart").empty();

    $.get("/get_preview_chart_comiziamo",{id_user:id_user, res_id:res_id},
      function(data){

        var res=jQuery.parseJSON(data);
        var directory=res.directory;
        var numb_img;

        if (res.preview==2) {
          
          for (var i = 0; i < res.file.length; i++) {

            numb_img=i+1;    

            if(window.matchMedia("(max-width: 767px)").matches){
              //cell
              $("#card_preview_chart").css("flex-wrap","wrap")
               
            } else if(window.matchMedia("(max-width: 992px)").matches){
              //tablet
             
            } else{
           
              //desktop
            }      

            $("#card_preview_chart").append(
              '<div class="card-body" style="text-align:center">'+
              '<a class="lightbox" onclick="zoom_img(\''+directory+'\',\''+res.file[i]+'\',\'chart_'+numb_img+'\',\''+numb_img+'\',chart)">'+
              '<img class="myImg" id="myImg_chart_'+numb_img+'" src="'+directory+res.file[i]+'?refresh=<?php echo rand(1,999); ?>">'+
              '</a>'+ 
              '<div id="myModal_chart_'+numb_img+'" class="modal" style="">'+
              '<span class="close_modal" onclick="close_modal(\'chart_'+numb_img+'\',\''+numb_img+'\',chart)">&times;</span>'+
              '<img class="modal-content test" id="chart_'+numb_img+'">'+
              '</div>'+
              '</div>');

          } 

        }else if (res.preview==1){

          $("#card_preview_chart").html(
            '<div class="card-body">'+
              '<p class="card-text">'+res.preview_comment+'</p>'+
            '</div>');

        }else{

          $("#card_preview_chart").html(
            '<div class="card-body">'+
              '<video  controls class="">'+
                '<source src="'+directory+res.file[0]+'" type="video/mp4">'+
                '<source src="'+directory+res.file[0]+'" type="video/ogg">'+
                '<source src="'+directory+res.file[0]+'" type="audio/ogg">'+
                '<source src="'+directory+res.file[0]+'" type="audio/mpeg">'+
              '</video>'+
            '</div>');


        }

        $("#header_comment").show();

      });

  }

  function get_winner_chart(res_id){

    $.get("/get_winner_chart_comiziamo",{res_id:res_id},
      function(data){

        var res=jQuery.parseJSON(data);
        var name_winner;
        if (res=="") {
          name_winner="@lang('comiziamo/lang.name_winner_1')";
        }else{
          if (res.length>1) {

            name_winner="@lang('comiziamo/lang.congratulation') "+res+"! @lang('comiziamo/lang.name_winner_2')";

          }else{
            name_winner="@lang('comiziamo/lang.congratulation') "+res+"! @lang('comiziamo/lang.name_winner_3')";

          }
          
        }
        $("#winner_chart").text(name_winner);

        
      });

    
  }



</script>