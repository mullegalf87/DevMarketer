<style type="text/css">

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

/*tablet legend level*/
@-webkit-keyframes invalid {
  from { background-color: #e9ecef; }
  to { background-color: inherit; }
}
@-moz-keyframes invalid {
  from { background-color: #e9ecef; }
  to { background-color: inherit; }
}
@-o-keyframes invalid {
  from { background-color: #e9ecef; }
  to { background-color: inherit; }
}
@keyframes invalid {
  from { background-color: #e9ecef; }
  to { background-color: inherit; }
}
.invalid {
  -webkit-animation: invalid 1s infinite; /* Safari 4+ */
  -moz-animation:    invalid 1s infinite; /* Fx 5+ */
  -o-animation:      invalid 1s infinite; /* Opera 12+ */
  animation:         invalid 1s infinite; /* IE 10+ */
}

td {
    padding: 1em;
}
}

/*style chat*/
/*body {
  background-image: url("https://images.unsplash.com/photo-1560568082-c15188aa6510?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80");
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}*/

.container {
  margin: 60px auto;
  background: #fff;
  padding: 0;
  border-radius: 7px;
}

.profile-image {
  width: 50px;
  height: 50px;
  border-radius: 40px;
}

.settings-tray {
  background: #eee;
  padding: 10px 15px;
  /*border-radius: 7px;*/
}
.settings-tray .no-gutters {
  padding: 0;
}
.settings-tray--right {
  float: right;
}
.settings-tray--right i {
  margin-top: 10px;
  font-size: 25px;
  color: grey;
  margin-left: 14px;
  transition: 0.3s;
}
.settings-tray--right i:hover {
  color: #74b9ff;
  cursor: pointer;
}

.search-box {
  background: #fafafa;
  padding: 10px 13px;
}
.search-box .input-wrapper {
  background: #fff;
  border-radius: 40px;
}
.search-box .input-wrapper i {
  color: grey;
  margin-left: 7px;
  vertical-align: middle;
}

#container_allies input {
  border: none;
  border-radius: 30px;
  width: 80%;
}
#container_allies input::placeholder {
  color: #e3e3e3;
  font-weight: 300;
  margin-left: 20px;
}
#container_allies input:focus {
  outline: none;
}


#container_congress input {
  border: none;
  border-radius: 30px;
  width: 80%;
}
#container_congress input::placeholder {
  color: #e3e3e3;
  font-weight: 300;
  margin-left: 20px;
}
#container_congress input:focus {
  outline: none;
}

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

#container_allies hr {
  margin: 5px auto;
  /*width: 60%;*/
}

.chat-bubble {
  padding: 10px 14px;
  background: #eee;
  margin: 10px 30px;
  border-radius: 9px;
  position: relative;
  animation: fadeIn 1s ease-in;
}
.chat-bubble:after {
  content: "";
  position: absolute;
  top: 50%;
  width: 0;
  height: 0;
  border: 20px solid transparent;
  border-bottom: 0;
  margin-top: -10px;
}
.chat-bubble--left:after {
  left: 0;
  border-right-color: #eee;
  border-left: 0;
  margin-left: -20px;
}
.chat-bubble--right:after {
  right: 0;
  border-left-color: #74b9ff;
  border-right: 0;
  margin-right: -20px;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.offset-md-9 .chat-bubble {
  background: #74b9ff;
  color: #fff;
}

.chat-box-tray {
  background: #eee;
  display: flex;
  align-items: baseline;
  padding: 10px 15px;
  align-items: center;
  margin-top: 19px;
  bottom: 0;
}
.chat-box-tray input {
  margin: 0 10px;
  padding: 6px 6px;
}
.chat-box-tray i {
  color: grey;
  font-size: 30px;
  vertical-align: middle;
}
.chat-box-tray i:last-of-type {
  margin-left: 25px;
}

/*style badge_notify*/
.badge_notify{
  position: absolute;
  right: 15px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

/*style table*/

 #container_access table tbody {
  display: block;
  max-height: 300px;
  overflow-y: scroll;
}

  #container_access table thead, #container_access table tbody tr {
  display: table;
  width: 100%;
  table-layout: fixed;
}

</style>
@if( auth()->guard('users_comiziamo')->check() )

  <div class="main-body">

    <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb" style="flex-wrap: nowrap;">
        <li class="breadcrumb-item active class_profile" aria-current="page" onclick="change_vis_profile('profile')">@lang('comiziamo/lang.profile')</li>
        <li class="breadcrumb-item class_privilege" aria-current="page" onclick="change_vis_profile('privilege');get_level_legend();">@lang('comiziamo/lang.privileges')</li>
        
        <li class="breadcrumb-item class_allies" aria-current="page" onclick="change_vis_profile('allies');get_list_allies()" id="show_hide_allied" style="display: none;">@lang('comiziamo/lang.allies')</li>
     
        @if( auth()->guard('users_comiziamo')->user()->creation_party != 0 )
        <li class="breadcrumb-item class_congress" aria-current="page" onclick="change_vis_profile('congress');get_list_congress()">@lang('comiziamo/lang.congress')</li>
        @endif
        @if( auth()->guard('users_comiziamo')->user()->id ==98 )
        <li class="breadcrumb-item class_access" aria-current="page" onclick="change_vis_profile('access');get_access();">Accessi</li>
        <li class="breadcrumb-item class_abuse" aria-current="page" onclick="change_vis_profile('abuse');get_abuse();">Abusi</li>
        <li class="breadcrumb-item class_user" aria-current="page" onclick="change_vis_profile('user');get_user();">Utenti</li>
        @endif
      </ol>
    </nav>

    <div id="container_profile">
      <div class="row gutters-sm">
        <div class="col-sm-4 mb-3" style="">
          <div class="card h-100">
            <div class="card-body">
              <input type="file" name="image-file" id="imgupload" onchange="previewFile()" style="opacity: 0;display: none">
              <div class="d-flex flex-column align-items-center text-center">
                <div onclick="$('#imgupload').trigger('click'); return false;">
                  @if( auth()->guard('users_comiziamo')->user()->img =="" )
                  <img id="image_profile" src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                  @else
                  <img id="image_profile" src="comiziamo_repo/img_user/{{ auth()->guard('users_comiziamo')->user()->img}}?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                  @endif
                </div>
                <div class="mt-3">
                  <h4>{{ auth()->guard('users_comiziamo')->user()->nickname }}</h4>
                  <p class="text-secondary mb-1" style="color: red!important;">@lang('comiziamo/lang.level') {{ auth()->guard('users_comiziamo')->user()->level_char }}</p>
                  <p class="text-secondary mb-1" style="font-size: small;">{{ auth()->guard('users_comiziamo')->user()->quote }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-8 mb-3" style="">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">Nickname</h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Nickname" value="{{ auth()->guard('users_comiziamo')->user()->nickname }}" maxlength="255">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">@lang('comiziamo/lang.about_me'): <span class="bio"></span></h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <textarea class="form-control sam_notes" name="bio" id="bio" placeholder="@lang('comiziamo/lang.about_me')"  maxlength="255">{{ auth()->guard('users_comiziamo')->user()->bio }}</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">@lang('comiziamo/lang.quote'): <span class="quote"></span></h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <textarea class="form-control sam_notes" name="quote" id="quote" placeholder="@lang('comiziamo/lang.quote')"  maxlength="100">{{ auth()->guard('users_comiziamo')->user()->quote }}</textarea>
                </div>
              </div>
              <p style="float: right; padding-top: 15px;" onclick="edit_data_profile()">
                <a class="btn btn-secondary" target="_blank" role="button" id="">@lang('comiziamo/lang.save_data') <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>

      @if( auth()->guard('users_comiziamo')->user()->follower != 0 )
      <div class="row gutters-sm">

        <div class="col-sm-8 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">@lang('comiziamo/lang.name_party')</h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <input type="text" class="form-control sam_notes" name="name_party" id="name_party" placeholder="@lang('comiziamo/lang.name_party')" value="" maxlength="255">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">@lang('comiziamo/lang.political_orientation'): <span class="direction_party"></span></h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <textarea class="form-control sam_notes" name="direction_party" id="direction_party" placeholder="@lang('comiziamo/lang.political_orientation')" maxlength="255"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">@lang('comiziamo/lang.description_party'): <span class="desc_party"></span></h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <textarea class="form-control sam_notes" name="desc_party" id="desc_party" placeholder="@lang('comiziamo/lang.description_party')"  maxlength="255"></textarea>
                </div>
              </div>
              <p style="float: right; padding-top: 15px;" onclick="edit_data_party()">
                <a class="btn btn-secondary" target="_blank" role="button" id="">@lang('comiziamo/lang.save_data') <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <input type="file" name="image-file" id="party_upload" onchange="previewFile_party()" style="opacity: 0;display: none">
              <div class="d-flex flex-column align-items-center text-center">
                <div onclick="$('#party_upload').trigger('click'); return false;">
                  <div id="img_party_append">
                    
                  </div>
                </div>
                <div class="mt-3">
                  <h4 id="name_party_created">@lang('comiziamo/lang.name_party')</h4>
                  <p class="text-secondary mb-1" style="font-size: small;" id="direction_party_created">@lang('comiziamo/lang.political_orientation')</p>
                  <p class="text-secondary mb-1" style="font-size: small;" id="numb_party_created">@lang('comiziamo/lang.subscribers')</p>
                </div>
              </div>  
            </div>
          </div>
        </div>

      </div>
      @endif

      <header class="header mb-3">
        <div class="container">
          <h5>@lang('comiziamo/lang.party_allies')</h5>
          <div class="row" style="margin-top:20px;">
            <div class="col-sm-12" style="text-align: center;padding-bottom: 15px"> 
              <ul data-component data-padding-unset class="smol-avatar-list" id="append_party_profile">
              </ul>
            </div>
          </div>
        </div>
      </header>

      <div class="card col-md-12" style="flex-grow: 1;">
        <div class="card-body">
          <h6 class="d-flex align-items-center mb-3"><i class="">@lang('comiziamo/lang.argument_comiziati_votes')</i></h6>
          <div id="get_argument_partecipant_profile"></div>
        </div>
      </div>

      <header class="header col-md-12 mt-3" id="header_comment_profile" style="display: none">
        <div class="container">
          <div class="row main-body">
            <div class="col-6">
              <h3 class="mb-3">@lang('comiziamo/lang.votes')</h3>
            </div>
            <div class="col-6 text-right" style="">
              <a class="btn btn-secondary mb-3 mr-1" href="#carousel_profile_CommentControls" role="button" data-slide="prev" id="">
                <i class="fa fa-arrow-left"></i>
              </a>
              <a class="btn btn-secondary mb-3 " href="#carousel_profile_CommentControls" role="button" data-slide="next" id="">
                <i class="fa fa-arrow-right"></i>
              </a>
            </div>
            <div class="col-12">
              <div id="carousel_profile_CommentControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner carousel_inner_comment_profile">
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

    </div>
    
    <div id="container_privilege" style="display: none;">
      <table class="card-table table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">@lang('comiziamo/lang.level')</th>
            <th scope="col">@lang('comiziamo/lang.privileges')</th>
          </tr>
        </thead>
        <tbody id="append_list_legend">
        </tbody>
      </table>
    </div>

    <div id="container_allies" style="display: none;">

      <div class="row no-gutters" style="">

        <div class="col-md-4 border-right" id="subcontainer_allies" style=""> 
          <div class="search-box" style=" height: 70px;">
            <div style="display: flex;flex-wrap: nowrap; ">
              <div class="input-wrapper" style="flex-grow: 1;">
                <i class="bx bx-search" style=""></i>
                <input placeholder="@lang('comiziamo/lang.search')" type="text" id="search_input" onkeyup="search_function()">
              </div>
              <div style="position: relative;">
                <div style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);margin-left: 5px;">
                  <i class="bx bx-reset" onclick="change_vis_profile('allies');get_list_allies();">
                  </i>
                </div>
              </div>
            </div>
          </div>
          <div id="append_list_allies" class="box-height-allies" style="overflow: auto; ">
          </div>
        </div>

        <div class="col-md-8" id="subcontainer_chat" style="">
          <div class="settings-tray settings-tray-allies">
            <div class="friend-drawer no-gutters friend-drawer--grey">
              <img class="profile-image img_user_chat" src="" alt="">
              <div class="text">
                <div class="nickname_after_return"></div>
                <h6 class="nickname_user_chat"></h6>
              </div>
             
            </div>
          </div>
          <div class="chat-panel">
            <div id="append_chat" class="box-height-chat" style="overflow: auto; ">
            </div>
            <div class="row chat_box_tray chat_box_tray_allies">
              <div class="col-12">
                <div class="chat-box-tray">
                  <i class="bx bx-sitemap send_request_party"></i>
                  <input type="text" id="content_message_chat" placeholder="@lang('comiziamo/lang.write_message')...">
                 
                  <i class="bx bx-send send_message_chat"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div id="container_congress" style="display: none;">

      <div class="row no-gutters" style="">


        <div class="col-md-4 border-right" id="subcontainer_congress" style=""> 
          <div class="search-box" style=" height: 70px;">
            <div style="display: flex;flex-wrap: nowrap; ">
              <div class="input-wrapper" style="flex-grow: 1;">
                <i class="bx bx-search" style=""></i>
                <input placeholder="@lang('comiziamo/lang.search')" type="text" id="search_input_congress" onkeyup="search_function_congress()">
              </div>
              <div style="position: relative;">
                <div style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);margin-left: 5px;">
                  <i class="bx bx-reset" onclick="change_vis_profile('congress');get_list_congress();">
                  </i>
                </div>
              </div>
            </div>
          </div>
          <div id="append_list_congress" class="box-height-congress" style="overflow: auto; ">
          </div>
        </div>

        <div class="col-md-8" id="subcontainer_chat_congress" style="">
          <div class="settings-tray settings-tray-congress">
            <div class="friend-drawer no-gutters friend-drawer--grey">
              <img class="profile-image img_user_chat_congress" src="" alt="">
              <div class="text">
                <div class="nickname_after_return"></div>
                <h6 class="nickname_user_chat_congress"></h6>
              </div>
            </div>
          </div>
          <div class="chat-panel">
            <div id="append_chat_congress" class="box-height-chat-congress" style="overflow: auto; ">
            </div>
            <div class="row chat_box_tray chat_box_tray_congress">
              <div class="col-12">
                <div class="chat-box-tray">
                  <input type="text" id="content_message_chat_congress" placeholder="@lang('comiziamo/lang.write_message')...">
                  <i class="bx bx-send send_message_chat_congress"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div id="container_access" style="display: none;">
      <table class="card-table table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ip</th>
            <th scope="col">Ultimo accesso</th>
            <th scope="col">Numero visite</th>
          </tr>
        </thead>
        <tbody id="append_list_access">
        </tbody>
      </table>
      <div id="container_chart_access"></div>
    </div>

    <div id="container_abuse" style="display: none;">
      <table class="card-table table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Argomento</th>
            <th scope="col">Utente</th>
            <th scope="col">Commento</th>
          </tr>
        </thead>
        <tbody id="append_list_abuse">
        </tbody>
      </table>
    </div>

    <div id="container_user" style="display: none;">
      <table class="card-table table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nickname</th>
            <th scope="col">Data Creazione</th>
          </tr>
        </thead>
        <tbody id="append_list_user">
        </tbody>
      </table>
    </div>

  </div>
  
@endif
<script type="text/javascript">

function start_function_profile(){
  var id_user_profile="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";
  get_argument_partecipant_user("undefined","profile");
  get_data_party();
  get_list_allies();
  get_data_user_comiziamo(id_user_profile, "profile");


}

function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {

    $("#image_profile").attr("src",reader.result)

  }

  if (file) {
    reader.readAsDataURL(file);

     new ImageCompressor(file, {
            quality: 0.6,
            success(result) {
              var id_user="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";
              var ext_file=result.name.split(".")[1];
              const formData = new FormData();
              formData.append('file', result, result.name);
              formData.append('id_user', id_user);
              formData.append('ext_file', ext_file);


              setTimeout(function(){
                $.ajax({
                  url : "comiziamo_repo/upload_img_profile.php",
                  type: 'POST',
                  data : formData,
                  processData: false, 
                  contentType: false,  
                  cache:false,
                  success : function(file_name) {
                    $.get("/upload_img_profile_comiziamo",{file_name:file_name},
                      function(data){
                        window.location.replace("/co?page=profile");
                    });

                  },
                  error: function (data, textStatus, errorThrown) {

                  },
                });
              },2000);

            },
            error(e) {
              console.log(e.message);
            },
          });

  } else {
    preview.src = "";
  }
}


function previewFile_party() {


  var preview = $("#image_party")[0];
  var file=$('#party_upload')[0].files[0];

  var reader  = new FileReader();
  
  reader.onloadend = function () {
    
    $("#image_party").attr("src",reader.result)

  }

  if (file) {
    reader.readAsDataURL(file);

     new ImageCompressor(file, {
            quality: 0.6,
            success(result) {



              var id_user="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";
              var ext_file=result.name.split(".")[1];
              const formData = new FormData();
              formData.append('file', result, result.name);
              formData.append('id_user', id_user);
              formData.append('ext_file', ext_file);


              setTimeout(function(){
                $.ajax({
                  url : "comiziamo_repo/upload_img_party.php",
                  type: 'POST',
                  data : formData,
                  processData: false, 
                  contentType: false,  
                  cache:false,
                  success : function(file_name) {
                    $.get("/upload_img_party_comiziamo",{file_name:file_name},
                      function(data){
                        window.location.replace("/co?page=profile");
                    });

                  },
                  error: function (data, textStatus, errorThrown) {

                  },
                });
              },2000);

            },
            error(e) {
              console.log(e.message);
            },
          });

  } else {
    preview.src = "";
  }
}


function get_argument_partecipant_user(id_user, from){

  $.get("/get_argument_partecipant_user_comiziamo",{id_user:id_user},
    function(data){
      $("#get_argument_partecipant_"+from).empty();
      var res=jQuery.parseJSON(data); 
      var state;
      var winner;
      
      for (var i = 0; i < res.length; i++) {

        if (res[i].state==0) {

          state="@lang('comiziamo/lang.open')";

        }else{

          state="@lang('comiziamo/lang.close')";

        }

        if (res[i].winner=="") {

          winner="";

        }else{
          
          winner=" - @lang('comiziamo/lang.winner'): "+res[i].winner;

        }

        var vote_percent=res[i].vote/parseInt(res[i].total_vote)*100;

        $("#get_argument_partecipant_"+from).append(
          '<div onclick="get_comment_profile(\''+res[i].id_arg+'\',\''+from+'\',\''+id_user+'\')">'+
            '<small>'+res[i].argument+'</small>'+
            '<div class="progress mb-3" style="height: 5px">'+
              '<div class="progress-bar bg-primary" role="progressbar" style="width: '+vote_percent+'%" aria-valuenow="'+vote_percent+'" aria-valuemin="0" aria-valuemax="100">'+
              '</div>'+
            '</div>'+
            '<p>@lang("comiziamo/lang.your_vote"): '+res[i].vote+'/'+parseInt(res[i].total_vote)+' - @lang("comiziamo/lang.state_comizio"): '+state+winner+'</p>'+
          '</div>');

        
      } 
    });



}

$('.carousel').carousel({
  interval: false
  }); 

function get_comment_profile(res_id, from, id_user){

  $(".carousel_inner_comment_"+from).empty();

  var size = 3;

  $.get('/get_comment_profile_comiziamo', {res_id:res_id, id_user:id_user},
    function(data){ 
      var res =jQuery.parseJSON(data);  
      var numb_comment;         
      var array_comment_page=[];
      var array_comment_post_page=[];
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

      $(".carousel_inner_comment_"+from).append(
        '<div class="carousel-item '+act+'">'+
        '<div class="row item_'+from+'_comment_'+numb_comment+'">'+
        '</div>'+
        '</div>');

      for (var y = 0; y < array_comment_page[i].length; y++) {



        if (array_comment_page[i][y].comment=="") {

          var comment="@lang('comiziamo/lang.no_comment')";

        } else{

          var comment=array_comment_page[i][y].comment;
        }


        if (array_comment_page[i][y].img=="") {

          var src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>";

        }else{

          var src="comiziamo_repo/img_user/"+array_comment_page[i][y].img+"?refresh=<?php echo rand(1,999); ?>"
        }

       

        $(".item_"+from+"_comment_"+numb_comment).append(
          '<div class="col-md-4 mb-3">'+
          '<div class="card">'+
          '<div class="d-flex flex-column align-items-center text-center" style="padding: 15px;">'+
          '<img id="image_profile" src="'+src+'" alt="Admin" class="rounded-circle" width="150" height="150" onclick="change_vis(\'user_'+array_comment_page[i][y].id_user+'\')">'+
          '<div class="mt-3">'+
          '<h4>'+array_comment_page[i][y].nickname+'</h4>'+
          '<p class="text-secondary mb-1">@lang("comiziamo/lang.level") '+array_comment_page[i][y].level_char+'</p>'+
          '<button id="user_'+from+'_'+array_comment_page[i][y].id_user+'" class="btn btn-outline-secondary" onclick="follow('+array_comment_page[i][y].id_user+',\''+from+'\')">@lang("comiziamo/lang.allies")</button>'+
          '</div>'+
          '</div>'+
          '<div class="card-body" style="background-color:lightgray">'+
          '<p class="card-text">'+comment+'</p>'+
          '</div>'+
          '</div>');

      }

    }
    read_button_follow(from);
    $("#header_comment_"+from).show();
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);

  });
}

function edit_data_profile(){

  var nickname=$("#nickname").val();
  var bio=$("#bio").val();
  var quote=$("#quote").val();

  $.get('/edit_data_profile_comiziamo', {nickname:nickname, bio:bio, quote:quote},
    function(data){ 

      window.location.replace("/co?page=profile");

    });
}

function edit_data_party(){

  var name_party=$("#name_party").val();
  var direction_party=$("#direction_party").val();
  var desc_party=$("#desc_party").val();

  $.get('/edit_data_party_comiziamo', {name_party:name_party, direction_party:direction_party, desc_party:desc_party},
    function(data){ 

      var res =jQuery.parseJSON(data); 

      if (res=="exist") {
        alert("@lang('comiziamo/lang.exist_name_party')!")
      }
      
      get_data_party();

    });

}

var data_party=[];
function get_data_party(){
  $("#img_party_append").empty();

  $.get('/get_data_party_comiziamo', {},
    function(data){ 

      var res =jQuery.parseJSON(data); 

      if (res.length==0) {

        $("#img_party_append").append('<img id="image_party" src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">');

      }else{

        if (res[0].img_party=="") {


          $("#img_party_append").append('<img id="image_party" src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">');

        }else{

          $("#img_party_append").append('<img id="image_party" src="comiziamo_repo/img_party/'+res[0].img_party+'?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">');

        }
        
        data_party.push({id_party:res[0].id, img_party:res[0].img_party})


        $("#name_party_created").text(res[0].name_party);
        $("#direction_party_created").html(res[0].direction_party);
        $("#numb_party_created").text("Numero iscritti: "+res[0].count_allied);
        $("#name_party").val(res[0].name_party);
        $("#direction_party").val(res[0].direction_party);
        $("#desc_party").val(res[0].desc_party);

      }

    });

}

var visible_page="profile";
function change_vis_profile(type){
  $("#container_"+visible_page).css("display","none");
  $(".class_"+visible_page).removeClass("active");
  visible_page=type;
  $("#container_"+type).css("display","");
  $(".class_"+type).addClass("active");

}

function get_level_legend(){
  $("#append_list_legend").empty();
  $.get('/get_level_legend_comiziamo', {},
    function(data){ 
      var res =jQuery.parseJSON(data); 
      var id_level;
      var class_level_invalid;
      for (var i = 0; i < res.length; i++) {

        id_level="@if( auth()->guard('users_comiziamo')->check() ){{auth()->guard('users_comiziamo')->user()->level}}@endif";

        if (res[i].id_level==id_level) {

          class_level_invalid="invalid";

        }else{
          class_level_invalid="";
        }
        $("#append_list_legend").append('<tr>'+
          '<td class="'+class_level_invalid+'">'+res[i].id_level+'</td>'+
          '<td class="'+class_level_invalid+'">'+res[i].level+'</td>'+
          '<td class="'+class_level_invalid+'"><span class="fa-stack">'+
          '<i class="fa fa-circle fa-stack-2x" ></i>'+
          '<i class="fa fa-stack-1x fa-inverse bx '+res[i].box_icon+'"></i>'+
          '</span> '+res[i].desc_privilege+'</td>'+
          '</tr>');
      }
    });
}


height_page=$(document).height();
function get_height_pc_tablet(from){

  var height_navbar=$(".navbar").innerHeight();
  var height_breadcrumb=$(".breadcrumb").innerHeight();
  var height_settings_tray=$(".settings-tray-"+from).innerHeight();
  var height_chat_box_tray=$(".chat_box_tray_"+from).innerHeight();
  var num_height_div_chat=height_page-height_breadcrumb-height_settings_tray-height_chat_box_tray-16-15-60;
  var num_height_div_allies=height_page-height_breadcrumb-height_settings_tray-16-15-60;
 

  $(".box-height-chat").css("height", num_height_div_chat+"px");
  $(".box-height-chat-congress").css("height", num_height_div_chat+"px");
  $(".box-height-allies").css("height", num_height_div_allies+"px");
  $(".box-height-congress").css("height", num_height_div_allies+"px");

}

var height_page_chat=$(document).height();
var height_navbar_chat=0;
var height_breadcrumb_chat=0;
var height_settings_tray_chat=0;
var height_chat_box_tray_chat=0;
var num_height_div_chat=0;

var height_page_allies=$(document).height();
var height_page_allies=0;
var height_navbar_allies=0;
var height_breadcrumb_allies=0;
var height_search_box_allies=0;
var height_chat_box_tray_allies=0;
var new_from;
function get_height_cell(from){

  if (from=="allies") {

    $(".nickname_after_return").html('<div style="position: absolute;flex-grow: 1;right: 15px;"><i class="bx bx-arrow-back" onclick="change_vis_profile(\'allies\');get_list_allies()"></i></div>');

  } else if(from=="congress" || from=="chat_congress"){

    $(".nickname_after_return").html('<div style="position: absolute;flex-grow: 1;right: 15px;"><i class="bx bx-arrow-back" onclick="change_vis_profile(\'congress\');get_list_congress()"></i></div>');
  }

  
  if (from=="allies" || from=="congress") {
    height_page_allies=$(document).height();
    height_navbar_allies=$(".navbar").innerHeight();
    height_breadcrumb_allies=$(".breadcrumb").innerHeight();
    height_search_box_allies=$(".search-box").innerHeight();
    height_chat_box_tray_allies=0;
    $("#subcontainer_chat").hide();
    $("#subcontainer_allies").show();
    $("#subcontainer_chat_congress").hide();
    $("#subcontainer_congress").show();
    var num_height_div_allies=height_page_allies-height_navbar_allies-15-height_breadcrumb_allies-16-height_search_box_allies-height_chat_box_tray_allies;

  $(".box-height-allies").css("height", num_height_div_allies+"px");
  $(".box-height-congress").css("height", num_height_div_allies+"px");
  }else{
    
    height_navbar_chat=$(".navbar").innerHeight();
    height_breadcrumb_chat=$(".breadcrumb").innerHeight();
    if (from=="allies" || from=="chat") {
      new_from="allies";
    } else if(from=="congress" || from=="chat_congress"){
      new_from="congress";
    }
    height_settings_tray_chat=$(".settings-tray-"+new_from).innerHeight();
    height_chat_box_tray_chat=$(".chat_box_tray_"+new_from).innerHeight();
    $("#subcontainer_chat").show();
    $("#subcontainer_allies").hide();
    $("#subcontainer_chat_congress").show();
    $("#subcontainer_congress").hide();
    num_height_div_chat=height_page_chat-height_breadcrumb_chat-height_settings_tray_chat-height_chat_box_tray_chat-16-15-60;
    $(".box-height-chat").css("height", num_height_div_chat+"px");
    $(".box-height-chat-congress").css("height", num_height_div_chat+"px");
  }

 
}




function get_list_allies(){


  if(window.matchMedia("(max-width: 767px)").matches){
      //cell
      get_height_cell("allies");
    } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet
      get_height_pc_tablet('allies')
    } else{
      //desktop
      get_height_pc_tablet('allies')
    }

  $("#append_list_allies").empty();
  $.get('/get_list_allies_comiziamo', {},
    function(data){ 
      var res =jQuery.parseJSON(data);

      var src;
      var src_0;
      var numb;
      var background_color;
      var button_blocked;
      var onclick;
      var delete_allied;
      var text_blocked;

      if (res.length!=0) {

        $("#show_hide_allied").show();
        for (var i = 0; i < res.length; i++) {

        if (res[i].img=="") {

          src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"

        }else{

          src="comiziamo_repo/img_user/"+res[i].img+"?refresh=<?php echo rand(1,999); ?>"

        }

        if (res[i].delete_allied==1) {
          text_blocked="@lang('comiziamo/lang.not_allies_yet')!";
          background_color="background-color:lightgrey;";
          onclick='open_chat(\''+src+'\',\''+res[i].nickname+'\',\''+res[i].id_user+'\',\''+res[i].id_room+'\',1)';

        } else{
          text_blocked="";
          background_color="";
          onclick='open_chat(\''+src+'\',\''+res[i].nickname+'\',\''+res[i].id_user+'\',\''+res[i].id_room+'\',0)';

        }

        numb=i+1;

        $("#append_list_allies").append(
          '<div class="friend-drawer friend-drawer--onhover chat_list"  onclick="'+onclick+'" style="border-bottom: 1px solid lightgrey;'+background_color+'">'+

              '<div style="display:flex; flex-wrap:nowrap">'+

                '<ul data-component data-padding-unset class="smol-avatar-list" style="justify-content: center;">'+
                  '<li>'+
                    '<a>'+
                      '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
                    '</a>'+
                  '</li>'+
                '</ul>'+
                
                '<div class="text">'+
                  '<h6><li style="list-style-type: none;"><a data-keywords='+res[i].nickname+'>'+res[i].nickname+'<p>'+text_blocked+'</p></a><p><button id="user_chat_'+res[i].id_user+'" class="btn btn-outline-secondary" onclick="follow('+res[i].id_user+',\'chat\')">@lang("comiziamo/lang.allies")</button></p></li></h6>'+
                '</div>'+

              '</div>'+

              '<span class="badge badge_notify badge_'+res[i].id_user+'">'+res[i].count_message+'</span>'+
            
          '</div>');
          // '<hr>');



      }

      if (res[0].img=="") {

        src_0="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"

      }else{

        src_0="comiziamo_repo/img_user/"+res[0].img+"?refresh=<?php echo rand(1,999); ?>"

      }

      if (res[0].delete_allied==1) {

        delete_allied=1;

      }else{

        delete_allied=0;

      }


      if(window.matchMedia("(max-width: 767px)").matches){
      //cell
      
      } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet
      open_chat(src_0, res[0].nickname, res[0].id_user, res[0].id_room, delete_allied);
      } else{
      //desktop
      open_chat(src_0, res[0].nickname, res[0].id_user, res[0].id_room, delete_allied);
      }


      }

      read_button_follow("chat");
      
    });

  
}


function get_list_congress(){


  if(window.matchMedia("(max-width: 767px)").matches){
      //cell
      get_height_cell("congress");
    } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet
      get_height_pc_tablet('congress')
    } else{
      //desktop
      get_height_pc_tablet('congress')
    }


  $("#append_list_congress").empty();
  $.get('/get_list_congress_comiziamo', {},
    function(data){ 
      var res =jQuery.parseJSON(data);
      var src;
      var src_0;
      var numb;
      var background_color;
      var button_blocked;
      var onclick;
      var delete_allied;
      var text_blocked;

      for (var i = 0; i < res.length; i++) {


        if (res[i].img_party=="") {

          src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"

        }else{

          src="comiziamo_repo/img_party/"+res[i].img_party+"?refresh=<?php echo rand(1,999); ?>"

        }

        if (res[i].delete_allied==1) {
          text_blocked="";
          background_color="background-color:lightgrey;";
          onclick='open_chat_congress(\''+src+'\',\''+res[i].name_party+'\',\''+res[i].creator_party+'\',\''+res[i].id+'\',\''+numb+'\',1)';

        } else{
          text_blocked="";
          background_color="";
          onclick='open_chat_congress(\''+src+'\',\''+res[i].name_party+'\',\''+res[i].creator_party+'\',\''+res[i].id+'\',\''+numb+'\',0)';

        }

        numb=i+1;

        $("#append_list_congress").append(
          '<div class="friend-drawer friend-drawer--onhover chat_list_congress"  onclick="'+onclick+'" style="border-bottom: 1px solid lightgrey;'+background_color+'">'+

              '<div style="display:flex; flex-wrap:nowrap">'+

              '<ul data-component data-padding-unset class="smol-avatar-list" style="justify-content: center;">'+
                '<li>'+
                  '<a>'+
                    '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
                  '</a>'+
                '</li>'+
              '</ul>'+
              
              '<div class="text">'+
                '<h6><li style="list-style-type: none;"><a data-keywords='+res[i].name_party+'>'+res[i].name_party+'</a><p>'+text_blocked+'</p><p><button id="user_party_chat_'+res[i].id+'" class="btn btn-outline-secondary follow_button" onclick="follow_party('+res[i].id+',\'chat\')">@lang("comiziamo/lang.allies")</button></p></li></h6>'+
              '</div>'+

              '</div>'+

              '<span class="badge badge_notify badge_'+res[i].id+'_congress">'+res[i].count_message+'</span>'+
            
          '</div>');
          // '<hr>');
          read_button_follow_party(res[i].id, "chat");

      }

      if (res[0].img_party=="") {

        src_0="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"

      }else{

        src_0="comiziamo_repo/img_party/"+res[0].img_party+"?refresh=<?php echo rand(1,999); ?>"

      }
    
      if (res[0].delete_allied==1) {

        delete_allied=1;

      }else{

        delete_allied=0;

      }

      if(window.matchMedia("(max-width: 767px)").matches){
      //cell
      
      } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet
      open_chat_congress(src_0, res[0].name_party, res[0].creator_party, res[0].id, numb, delete_allied);
      } else{
      //desktop
      open_chat_congress(src_0, res[0].name_party, res[0].creator_party, res[0].id, numb, delete_allied);
      }

    });
  
}


function open_chat(src, nickname, id_user, id_room, delete_allied){

  if(window.matchMedia("(max-width: 767px)").matches){
      //cell
      $("#subcontainer_allies").hide();
      $("#subcontainer_chat").show();
      get_height_cell("chat");
    } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet

    } else{
      //desktop

    }

  $(".chat-bubble").hide("slow").show("slow");

  $(".img_user_chat").attr("src",src);
  $(".img_user_chat").attr("onclick","change_vis(\"user_"+id_user+"\")");
  $(".nickname_user_chat").text(nickname);

  if (data_party.length!=0) {

    $(".send_request_party").attr("onclick","send_request_party(\""+id_user+"\",\""+id_room+"\",\""+data_party[0].id_party+"\",\""+data_party[0].img_party+"\")");
    $(".send_request_party").show();
  }else{

    $(".send_request_party").hide();
  }

  if (delete_allied==0) {

    $(".send_message_chat").attr("onclick","send_chat_message(\""+id_user+"\",\""+id_room+"\")");
    get_message_chat(id_user, id_room);
  }else{
    $("#append_chat").empty();
    $(".send_message_chat").removeAttr("onclick");
  }
  
  

}

function open_chat_congress(src, name_party, id_user, id_party, numb, delete_allied){

  if(window.matchMedia("(max-width: 767px)").matches){
      //cell
      $("#subcontainer_congress").hide();
      $("#subcontainer_chat_congress").show();
      get_height_cell("chat_congress");
    } else if(window.matchMedia("(max-width: 992px)").matches){
      //tablet

    } else{
      //desktop

    }

  $(".chat-bubble").hide("slow").show("slow");

  $(".img_user_chat_congress").attr("src",src);
  $(".img_user_chat_congress").attr("onclick","change_vis(\"user_"+id_user+"\")");
  $(".nickname_user_chat_congress").text(name_party);


  if (delete_allied==0) {

    $(".send_message_chat_congress").attr("onclick","send_chat_message_congress(\""+id_user+"\",\""+id_party+"\")");
    get_message_chat_congress(id_user, id_party, numb);
  }else{
    $("#append_chat_congress").empty();
    $(".send_message_chat_congress").removeAttr("onclick");
  }

  

}

function send_chat_message(receiver, id_room){

  var message=$("#content_message_chat").val();

  var src='@if( auth()->guard("users_comiziamo")->check() )'+
  '@if( auth()->guard("users_comiziamo")->user()->img =="" )'+
  'comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>'+
  '@else'+
  'comiziamo_repo/img_user/{{ auth()->guard("users_comiziamo")->user()->img}}?refresh=<?php echo rand(1,999); ?>'+
  '@endif'+
  '@endif';


  $("#append_chat").append(
    '<div style="display:flex">'+

      '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
        '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
          '<li>'+
            '<a>'+
              '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
            '</a>'+
          '</li>'+
        '</ul>'+
      '</div>'+

      '<div class="row no-gutters" style="width: 100%; ">'+
        '<div class="col-md-6" style="padding: 0;">'+
          '<div class="chat-bubble chat-bubble--left">'+
          message+
          '</div>'+
        '</div>'+
      '</div>'+

    '</div>');


  $.get('/send_chat_message_comiziamo', {receiver:receiver, id_room:id_room, message:message},
    function(data){
      $("#append_chat").animate({ scrollTop: $("#append_chat").prop("scrollHeight") }, 1000);
      $("#content_message_chat").val("");
     });


}

function send_chat_message_congress(receiver, id_party){


  var message=$("#content_message_chat_congress").val();

  var src='@if( auth()->guard("users_comiziamo")->check() )'+
  '@if( auth()->guard("users_comiziamo")->user()->img =="" )'+
  'comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>'+
  '@else'+
  'comiziamo_repo/img_user/{{ auth()->guard("users_comiziamo")->user()->img}}?refresh=<?php echo rand(1,999); ?>'+
  '@endif'+
  '@endif';


  $("#append_chat_congress").append(
    '<div style="display:flex">'+

      '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
        '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
          '<li>'+
            '<a>'+
              '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
            '</a>'+
          '</li>'+
        '</ul>'+
      '</div>'+

      '<div class="row no-gutters" style="width: 100%; ">'+
        '<div class="col-md-6" style="padding: 0;">'+
          '<div class="chat-bubble chat-bubble--left">'+
          message+
          '</div>'+
        '</div>'+
      '</div>'+

    '</div>');


  $.get('/send_chat_message_congress_comiziamo', {receiver:receiver, id_party:id_party, message:message},
    function(data){
      $("#append_chat_congress").animate({ scrollTop: $("#append_chat_congress").prop("scrollHeight") }, 1000);
      $("#content_message_chat_congress").val("");
     });


}

function send_request_party(receiver, id_room, id_party, img_party){
  var src;
  if (img_party=="") {
    src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>";
  }else{
    src="comiziamo_repo/img_party/"+img_party;
  }
  var message=
  '<div style="display:flex;flex-wrap:nowrap">'+
    '<button id="" class="btn btn-outline-secondary" onclick="follow_party('+id_party+')" style="flex-grow:1">@lang("comiziamo/lang.allies_my_party")</button>'+
    '<div class="" style="padding: 0;margin-left: 10px;">'+
      '<ul data-component data-padding-unset class="smol-avatar-list">'+
        '<li>'+
          '<a>'+
            '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
          '</a>'+
        '</li>'+
      '</ul>'+
    '</div>'+
  '</div>';

  var src='@if( auth()->guard("users_comiziamo")->check() )'+
  '@if( auth()->guard("users_comiziamo")->user()->img =="" )'+
  'comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>'+
  '@else'+
  'comiziamo_repo/img_user/{{ auth()->guard("users_comiziamo")->user()->img}}?refresh=<?php echo rand(1,999); ?>'+
  '@endif'+
  '@endif';

  $("#append_chat").append(
    '<div style="display:flex">'+

      '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
        '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
          '<li>'+
            '<a>'+
              '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
            '</a>'+
          '</li>'+
        '</ul>'+
      '</div>'+

      '<div class="row no-gutters" style="width: 100%; ">'+
        '<div class="col-md-6" style="padding: 0;">'+
          '<div class="chat-bubble chat-bubble--left">'+
          message+
          '</div>'+
        '</div>'+
      '</div>'+

    '</div>');


  $.get('/send_chat_message_comiziamo', {receiver:receiver, id_room:id_room, message:message},
    function(data){
    $("#append_chat").animate({ scrollTop: $("#append_chat").prop("scrollHeight") }, 1000);
     });

}

function get_message_chat(receiver, id_room){

  $("#append_chat").empty();
  var id_user="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";
  $.get('/get_chat_message_comiziamo', {receiver:receiver, id_room:id_room},
    function(data){
    
      var res =jQuery.parseJSON(data); 

      var src;
        for (var i = 0; i < res.length; i++) {
          
          if (res[i].img=="") {

            src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"

          }else{

            src="comiziamo_repo/img_user/"+res[i].img+"?refresh=<?php echo rand(1,999); ?>"

          }

          if (res[i].sender==id_user) {

            $("#append_chat").append(
              '<div style="display:flex">'+

                '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
                  '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
                    '<li>'+
                      '<a>'+
                        '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
                      '</a>'+
                    '</li>'+
                  '</ul>'+
                '</div>'+

                '<div class="row no-gutters" style="width: 100%; ">'+
                  '<div class="col-md-6" style="padding: 0;">'+
                    '<div class="chat-bubble chat-bubble--left">'+
                      res[i].message+
                    '</div>'+
                  '</div>'+
                '</div>'+

              '</div>');

          }else{

            $("#append_chat").append(
              '<div style="display:flex">'+

                '<div class="row no-gutters" style="width: 100%;display:inline-block;">'+
                  '<div class="col-md-6 offset-md-6" style="padding: 0;">'+
                    '<div class="chat-bubble chat-bubble--right" style="background: #74b9ff;color: #fff;">'+
                      res[i].message+
                    '</div>'+
                  '</div>'+
                '</div>'+

                '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
                  '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
                    '<li>'+
                      '<a>'+
                        '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
                      '</a>'+
                    '</li>'+
                  '</ul>'+
                '</div>'+

              '</div>');


          }
       
        }
        
        $(".badge_"+receiver).text("0");
        $("#append_chat").animate({ scrollTop: $("#append_chat").prop("scrollHeight") }, 1000);

     });


}


function get_message_chat_congress(receiver, id_party, numb){

  $("#append_chat_congress").empty();
  var id_user="@if( auth()->guard('users_comiziamo')->check() ){{ auth()->guard('users_comiziamo')->user()->id}}@endif";
  $.get('/get_chat_message_congress_comiziamo', {receiver:receiver, id_party:id_party},
    function(data){
      
      var res =jQuery.parseJSON(data); 

      var src;
        for (var i = 0; i < res.length; i++) {
          
          if (res[i].img=="") {

            src="comiziamo_repo/default_img.png?refresh=<?php echo rand(1,999); ?>"

          }else{

            src="comiziamo_repo/img_user/"+res[i].img+"?refresh=<?php echo rand(1,999); ?>"

          }



          if (res[i].sender==id_user) {

            $("#append_chat_congress").append(
              '<div style="display:flex">'+

                '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
                  '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
                    '<li>'+
                      '<a>'+
                        '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
                      '</a>'+
                    '</li>'+
                  '</ul>'+
                '</div>'+

                '<div class="row no-gutters" style="width: 100%; ">'+
                  '<div class="col-md-6" style="padding: 0;">'+
                    '<div class="chat-bubble chat-bubble--left">'+
                      res[i].message+
                    '</div>'+
                  '</div>'+
                '</div>'+

              '</div>');

          }else{

            $("#append_chat_congress").append(
              '<div style="display:flex">'+

                '<div class="row no-gutters" style="width: 100%;display:inline-block;">'+
                  '<div class="col-md-6 offset-md-6" style="padding: 0;">'+
                    '<div class="chat-bubble chat-bubble--right" style="background: #74b9ff;color: #fff;">'+
                      res[i].message+
                    '</div>'+
                  '</div>'+
                '</div>'+

                '<div class="" style="padding: 0;margin: 10px 10px;position: relative">'+
                  '<ul data-component data-padding-unset class="smol-avatar-list" style="position: inherit; top: 50%; -ms-transform: translateY(-50%);transform: translateY(-50%);">'+
                    '<li>'+
                      '<a>'+
                        '<img alt="Avatar 1" src="'+src+'" style="width: 50px;height: 50px;" />'+
                      '</a>'+
                    '</li>'+
                  '</ul>'+
                '</div>'+

              '</div>');


          }
       
        }
        $("#append_chat_congress").animate({ scrollTop: $("#append_chat_congress").prop("scrollHeight") }, 1000);
        $(".badge_"+id_party+"_congress").text("0");

     });

}


function search_function() {

    var input = document.getElementById('search_input'),
        filter = input.value,
        ul = document.getElementById('append_list_allies'),
        lis = ul.getElementsByClassName('chat_list'),
        searchTerms = filter.match(/[0-9a-zA-Z]+/gi),
        re, index, li, a;

        console.log(lis)
        
    if (searchTerms) {
        searchTerms = searchTerms.map(function(term) {
            return '(?=.*' + term + ')';

        });
        
        re = new RegExp(searchTerms.join(''), 'i');
    } else {
        re = /./;
    }

    for (index = 0; index < lis.length; index++) {
        li = lis[index];
        a = li.firstChild;

        console.log(a)

        if (re.test(a.innerHTML + ' ' + a.getAttribute('data-keywords'))) {
            li.style.display = '';
        } else {
            li.style.display = 'none';

        }
    }
}



function search_function_congress() {

    var input = document.getElementById('search_input_congress'),
        filter = input.value,
        ul = document.getElementById('append_list_congress'),
        lis = ul.getElementsByClassName('chat_list_congress'),
        searchTerms = filter.match(/[0-9a-zA-Z]+/gi),
        re, index, li, a;

    if (searchTerms) {
        searchTerms = searchTerms.map(function(term) {
            return '(?=.*' + term + ')';

        });
        
        re = new RegExp(searchTerms.join(''), 'i');
    } else {
        re = /./;
    }

    for (index = 0; index < lis.length; index++) {
        li = lis[index];
        a = li.firstChild;

        if (re.test(a.innerHTML + ' ' + a.getAttribute('data-keywords'))) {
            li.style.display = '';
        } else {
            li.style.display = 'none';

        }
    }
}


function get_access(){
  
  $("#append_list_access").empty();
  $.get('/get_access_comiziamo', {},
    function(data){ 
      var res =jQuery.parseJSON(data); 
      var data_perc=[];
      var series=[];
      var categories=[];
      var ext_file;
      var sumOf1;
      var array_data_access=[];


      for (var i = 0; i < res.length; i++) {

        ext_file=res[i].last_access.split(" ")[0];

        sumOfId = (last_access) => res.filter(i => i.last_access.toLowerCase().indexOf(last_access) > -1).reduce((a, b) => a + b.numb_access, 0);
       
        sumOf1 = sumOfId(ext_file);

        array_data_access.push({last_access:ext_file, numb_access:sumOf1});

        $("#append_list_access").append('<tr>'+
        '<td>'+res[i].id+'</td>'+
        '<td>'+res[i].ip_address+'</td>'+
        '<td>'+res[i].last_access+'</td>'+
        '<td>'+res[i].numb_access+'</td>'+
        '</tr>');

      }

      var result = array_data_access.filter(function(el, i, x) {
        return x.some(function(obj, j) {
          return obj.last_access === el.last_access && (x = j);
        }) && i == x;
      });


      for (var i = 0; i < result.length; i++) {

        categories.push(formatDate(result[i].last_access));

        series.push(result[i].numb_access);
        
        // data_perc=[{y:result[i].numb_access}];
        // series.push({ data:data_perc, name:result[i].last_access});

      }

      $("#append_list_access").animate({ scrollTop: $("#append_list_access").prop("scrollHeight") }, 1000);
      $("html, body").animate({ scrollTop: $(document).height() }, 1000);

      $(function () {
        $('#container_chart_access').highcharts({
          title: {
            text: 'Visualizzazioni per giorno'
          },
          chart: {
            renderTo: 'container',
            marginBottom: 80
          },
          xAxis: {
            categories: categories,

          },

          yAxis: {
            min: 0,
            title: {
              text: 'Quantità visualizzazioni'
            }
          },

          plotOptions: {

            column: {
              colorByPoint: true
            },

            series: {
              cursor: 'pointer',
              point: {
                events: {

                }
              }
            },
          },

          series: [{

            data: series,
            name: "Comiziamo"

          }]

        });

        var random = 0.5; 
        $('#button').click(function () {
          var chart = $('#container').highcharts();
          chart.series[0].addPoint([
            (random || Math.random()) * 12,
            (random || Math.random()) * 200
            ]);
          random = null;
        });
      });
      
    });

}

function get_abuse(){

  $("#append_list_abuse").empty();
  $.get('/get_abuse_comiziamo', {},
    function(data){ 
      var res =jQuery.parseJSON(data); 

      for (var i = 0; i < res.length; i++) {

        $("#append_list_abuse").append('<tr>'+
        '<td>'+res[i].id+'</td>'+
        '<td>'+res[i].id_arg+'</td>'+
        '<td>'+res[i].id_user+'</td>'+
        '<td>'+res[i].comment+'</td>'+
        '</tr>');

      }
      
    });

}

function get_user(){

  $("#append_list_user").empty();
  $.get('/get_user_comiziamo', {},
    function(data){ 
      var res =jQuery.parseJSON(data); 

      for (var i = 0; i < res.length; i++) {

        $("#append_list_user").append('<tr>'+
        '<td>'+res[i].id+'</td>'+
        '<td>'+res[i].nickname+'</td>'+
        '<td>'+res[i].created_at+'</td>'+
        '</tr>');

      }
      
    });

}


</script>