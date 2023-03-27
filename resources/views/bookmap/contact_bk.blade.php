<style type="text/css">
 
/*---------chat window---------------*/
#container_contact .container{
    max-width:900px;
}
#container_contact .inbox_people {
  background: #fff;
  float: left;
  overflow: hidden;
  /*width: 30%;*/
  border-right: 1px solid #ddd;
}

#container_contact .inbox_msg {
  border-top: 1px solid #ddd;
  clear: both;
  overflow: hidden;
}

#container_contact .top_spac {
  margin: 20px 0 0;
}

#container_contact .recent_heading {
  float: left;
  width: 40%;
}

#container_contact .srch_bar {
  display: inline-block;
  width: 100%;
  padding:
}

#container_contact .headind_srch {
  height: 70px;
  padding: 10px 15px 10px 15px;
  overflow: hidden;
  border-bottom: 1px solid #c4c4c4;
}

#container_contact .recent_heading h4 {
  color: #0465ac;
    font-size: 16px;
    margin: auto;
    line-height: 29px;
}

#container_contact .srch_bar input {
  outline: none;
  border: 1px solid #cdcdcd;
  border-width: 0 0 1px 0;
  width: 100%;
  padding: 2px 0 4px 6px;
  background: none;
}

#container_contact .srch_bar #container_contact .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}

#container_contact .srch_bar #container_contact .input-group-addon {
  margin: 0 0 0 -27px;
}

#container_contact .chat_ib h5 {
  font-size: 15px;
  color: #464646;
  margin: 0 0 8px 0;
}

#container_contact .chat_ib h5 span {
  font-size: 13px;
  float: right;
}

#container_contact .chat_ib p {
    font-size: 12px;
    color: #989898;
    margin: auto;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

#container_contact .chat_img {
  float: left;
  width: 11%;
}

#container_contact .chat_img img {
  width: 100%
}

#container_contact .chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

#container_contact .chat_people {
  overflow: hidden;
  clear: both;
}

#container_contact .chat_list_contact {
  border-bottom: 1px solid #ddd;
  margin: 0;
  padding: 10px 15px 10px;
}

#container_contact .inbox_chat {
  overflow: scroll;
}

#container_contact .active_chat {
  background: #e8f6ff;
}

#container_contact .incoming_msg_img {
  display: inline-block;
  width: 6%;
}

#container_contact .incoming_msg_img img {
  width: 100%;
}

#container_contact .received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
}

#container_contact .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 0 15px 15px 15px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

#container_contact .time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}

#container_contact .received_withd_msg {
  width: 57%;
}

#container_contact .mesgs{
  float: left;
  padding: 15px;
  /*width:70%;*/
}

#container_contact .sent_msg p {
  background:#0465ac;
  border-radius: 12px 15px 15px 0;
  font-size: 14px;
  margin: 0;
  color: #fff;
  padding: 5px 10px 5px 12px;
  width: 100%;
}

#container_contact .outgoing_msg {
  overflow: hidden;
  margin: 15px 0 15px;
}

#container_contact .incoming_msg {
  overflow: hidden;
  margin: 15px 0 15px;
}

#container_contact .sent_msg {
  float: right;
  width: 46%;
}

#container_contact .input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
  outline:none;
}

#container_contact .type_msg {
  border-top: 1px solid #c4c4c4;
  position: relative;
}

#container_contact .msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border:none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 15px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}

#container_contact .msg_history {
  overflow: scroll;
}

/*style avatar*/
.friend-drawer {
  padding: 10px 15px;
  display: flex;
  vertical-align: baseline;
  background: #fff;
  transition: 0.3s ease;
}
.friend-drawer--grey {
  background: #eee;
}
.friend-drawer .text {
  margin-left: 12px;
  width: 70%;
}
.friend-drawer .text h6 {
  /*margin-top: 6px;*/
  margin-bottom: 0;
}
.friend-drawer .text p {
  margin: 0;
}
.friend-drawer .time {
  color: grey;
}
.friend-drawer--onhover:hover {
  background: #74b9ff;
  cursor: pointer;
}
.friend-drawer--onhover:hover p,
.friend-drawer--onhover:hover h6,
.friend-drawer--onhover:hover .time {
  color: #fff !important;
}

.profile-image {
  width: 50px;
  height: 50px;
  border-radius: 40px;
}

/*style badge*/

/*style badge_notify*/
.badge_notify{
  position: absolute;
  right: 15px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}


</style>

<div id="container_contact">

  <div class="inbox_msg col-md-12" style="padding:0">

    <div class="inbox_people col-md-3" style="padding:0">
      <div class="headind_srch">
        <div class="srch_bar">
          <div class="stylish-input-group">
            <input type="text" class="form-control"  placeholder="@lang('bookmap/lang.search_user')" id="search_input" style="border-radius: 0!important;">
          </div>
        </div>
      </div>
      <div class="inbox_chat scroll" id="append_list_user_chat_box">

      </div>
    </div>

    <div class="headind_srch" style="background-color: white;padding:0;">
      <div class="srch_bar">
        <div class="stylish-input-group" style="">
          <div class="friend-drawer no-gutters">
            <img class="profile-image img_user_chat" src="" alt="">
            <div class="text">
              <div class="nickname_after_return"></div>
              <h6 class="nickname_user_chat"></h6>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="mesgs col-md-9">
      <div class="msg_history">

      </div>
      <div class="type_msg">
        <div class="input_msg_write">
          <input type="text" class="write_msg" placeholder="@lang('bookmap/lang.write_message')" />
          <button class="msg_send_btn bx bx-send" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>

  </div>

</div>
<script type="text/javascript">

   //apre connessione socket con condivisione dati
    var connection = new RTCMultiConnection();
    connection.socketURL = 'https://muazkhan.com:9001/';
    connection.session = {
      data: true
    };
  
  function start_function_contact(){

    height_position();
    get_user_bookmap();

  }

  function height_position(){

    var height_page=$(window).height();
    var height_inbox_chat=height_page-78-70;
    var height_msg_history=height_page-78-70-15-48-15;

    $("#container_contact .inbox_chat").css("height",height_inbox_chat+"px");
    $("#container_contact .msg_history").css("height",height_msg_history+"px");

  }


  function get_user_bookmap(from){
    $("#append_list_user_chat_box").empty();
    $.get('/get_user_chat_box_bookmap', {}, 
      function (data){
       var res=jQuery.parseJSON(data);

     var arr1=res.get_user;
     var arr2=res.count_message;

     console.log(res)

      if (arr1==undefined && arr2==undefined) {

        window.location.replace("/bookmap");
        
      }else{

        const map = new Map();
        arr1.forEach(item => map.set(item.id_room, item));
        arr2.forEach(item => map.set(item.id_room, {...map.get(item.id_room), ...item}));
        const arr_list_user = Array.from(map.values());

        var active_chat;
        var src;
        var count_message;

        for (var i = 0; i < arr_list_user.length; i++) {

          if (i==0) {
            active_chat="active_chat";
          }else{
            active_chat="";
          }

          if (arr_list_user[i].image_user_send=="") {

            src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"
          }else{
            src="bookmap_repo/img_profile/"+arr_list_user[i].image_user_send+"?refresh=<?php echo rand(1,999); ?>";

          }

          if (arr_list_user[i].count_message==undefined) {
            count_message=0;
          }else{
            count_message=arr_list_user[i].count_message;
          }



          $("#append_list_user_chat_box").append(
            '<div class="chat_list_contact '+active_chat+' list_user_box" onclick="open_chat(\''+arr_list_user[i].id_room+'\', \''+arr_list_user[i].id_user+'\', \''+arr_list_user[i].name_user+'\', \''+arr_list_user[i].image_user_send+'\')" id="'+arr_list_user[i].id_user+'">'+
            '<div class="chat_people">'+
            '<div class="chat_img">'+
            '<img src='+src+' alt="sunil">'+
            '</div>'+
            '<div class="chat_ib">'+
            '<h6>'+arr_list_user[i].name_user+'</h6>'+
            '</div>'+
            '<span class="badge badge_notify badge_'+arr_list_user[i].id_user+'">'+count_message+'</span>'+
            '</div>'+
            '</div>');

        }

        //detect mobile device
          if(window.matchMedia("(max-width: 767px)").matches){
               
          } else{

              open_chat(arr_list_user[0].id_room, arr_list_user[0].id_user, arr_list_user[0].name_user, arr_list_user[0].image_user_send);

          }  

        // if (from==undefined) {

        //   open_chat(arr_list_user[0].id_room, arr_list_user[0].id_user, arr_list_user[0].name_user, arr_list_user[0].image_user_send);

        // }

        var search = document.getElementById("search_input");
        var els = document.querySelectorAll(".chat_list_contact");

        search.addEventListener("keyup", function() {
          Array.prototype.forEach.call(els, function(el) {
            if (el.textContent.toLowerCase().trim().indexOf(search.value) > -1){
              el.style.display = '';
            }else{ 
              el.style.display = 'none';
            }
          });

        });

      }

    });

  }

function contact_seller(id_user_receive, name_user_receive, image_user_receive){

  open_menu(5);
  $("#name_form_contact").text("@lang('bookmap/lang.contact_seller') "+name_user_receive);
  $("#fab_send").attr("onclick","send_chat_bookmap(\""+id_user_receive+"\",\""+name_user_receive+"\",\"contact_seller\",\""+image_user_receive+"\")");

}

function send_chat_bookmap(id_user_receive, name_user_receive, from, image_user_receive){

  var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
  console.log(id_user)
  if (id_user=="") {

    open_menu(1);

  } else{

    var message;

    if (from=="contact_seller") {

      message=$(".chatSend").val();

    }else{

      message=$(".write_msg").val();

    }

    if (message!="") {

     $.get('/send_chat_bookmap', {id_user_receive:id_user_receive, name_user_receive:name_user_receive, message:message, image_user_receive:image_user_receive}, 
      function (data){
       var res=jQuery.parseJSON(data);

       var dt = new Date();
       var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

       $(".msg_history").append(
        "<div class='outgoing_msg'>"+
        "<div class='sent_msg'>"+
        "<p>"+$(".write_msg").val()+"</p>"+
        "<span class='time_date'>"+time+"</span>"+
        "</div>");  

       if (from!="contact_seller") {

        connection.send($(".write_msg").val());
        get_user_bookmap("send_msg_socket");

      }else{
        change_vis('contact')
      }
      $(".write_msg").val("");
      $('.msg_history').scrollTop($('.msg_history')[0].scrollHeight);

    });

   }
   
 }

}  


 function open_chat(id_room, id_user_receive, name_user_receive, image_user_receive){
  connection.closeSocket();
  connection.openOrJoin(id_room);
  $("#logo_loading").addClass("rotate_logo_loading");

  $(".notify_chat").css("color","black");
  $(".badge_"+id_user_receive).text(0);
  $(".badge_"+id_user_receive).addClass("userid_"+connection.userid);
  $(".msg_history").empty();
  $(".list_user_box").removeClass("active_chat");
  $("#"+id_user_receive).addClass('active_chat');
  $(".nickname_user_chat").text(name_user_receive);
  $(".msg_send_btn").attr("onclick","send_chat_bookmap(\""+id_user_receive+"\",\""+name_user_receive+"\",\""+image_user_receive+"\")");
  if (image_user_receive=="") {
    $(".img_user_chat").attr("src","bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>");
  }else{
    $(".img_user_chat").attr("src","bookmap_repo/img_profile/"+image_user_receive+"?refresh=<?php echo rand(1,999); ?>");
  }


  if(window.matchMedia("(max-width: 767px)").matches){
        // The viewport is less than 768 pixels wide
        $(".inbox_people").hide();
        $(".mesgs").show();
        $(".nickname_after_return").show();
        $(".nickname_after_return").html('<div style="position: absolute;flex-grow: 1;right: 15px;"><i class="bx bx-arrow-back" onclick="back_inbox_people()"></i></div>');

      } 

      $.get('/get_chat_bookmap', {id_room:id_room}, 
        function (data){
         var res=jQuery.parseJSON(data);
         var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id }}@endif";
         var src;
         for (var i = 0; i < res.length; i++) {

          if (res[i].image_user_send=="") {

            src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"
          }else{
            src="bookmap_repo/img_profile/"+res[i].image_user_send+"?refresh=<?php echo rand(1,999); ?>";

          }

          if (res[i].id_user_send==id_user) {

           $(".msg_history").append(
            '<div class="outgoing_msg">'+
              '<div class="sent_msg">'+
                '<p>'+res[i].message+'</p>'+
                '<span class="time_date">'+res[i].date+'</span>'+
              '</div>'+
            '</div>');

         }else{

          $(".msg_history").append(
            '<div class="incoming_msg">'+
              // '<div class="incoming_msg_img"> <img src="'+src+'" alt="sunil">'+
              '</div>'+
              '<div class="received_msg">'+
                '<div class="received_withd_msg">'+
                  '<p>'+res[i].message+'</p>'+
                  '<span class="time_date">'+res[i].date+'</span>'+
                '</div>'+
              '</div>'+
            '</div>');

        }

      }

      $('.msg_history').scrollTop($('.msg_history')[0].scrollHeight);
      $("#logo_loading").removeClass("rotate_logo_loading");

    });  

    }

function back_inbox_people(){

  if(window.matchMedia("(max-width: 767px)").matches){
        // The viewport is less than 768 pixels wide
        $(".inbox_people").show();
        $(".mesgs").hide();
        $(".nickname_after_return").hide();
  
    } 

}


//riceve i messaggi
connection.onmessage = function(event) {
  var dt = new Date();
  var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();

   get_user_bookmap("receive_msg_socket");
   $(".notify_chat").css("color","red");

  $(".msg_history").append("<div class='incoming_msg'>"+
    "<div class='received_msg'>"+
    "<div class='received_withd_msg'>"+
    "<p>"+event.data+"</p>"+
    "<span class='time_date'>"+time+"</span>"+
    "</div>"+
    "</div>"+
    "</div>");

  $('.msg_history').scrollTop($('.msg_history')[0].scrollHeight);

};


</script>
