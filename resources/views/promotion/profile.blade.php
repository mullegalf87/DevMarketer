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

@if( auth()->guard('users_promotion')->check() )
<div class="content-wrapper">
  <div class="container-fluid">
    <nav aria-label="breadcrumb" class="main-breadcrumb">
      <ol class="breadcrumb" style="flex-wrap: nowrap;">
        <li class="breadcrumb-item active class_profile" aria-current="page" onclick="change_vis_profile('profile')">Profilo</li>
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
                  @if( auth()->guard('users_promotion')->user()->img =="" )
                  <img id="image_profile" src="promotion_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                  @else
                  <img id="image_profile" src="promotion_repo/img_user/{{ auth()->guard('users_promotion')->user()->img}}?refresh=<?php echo rand(1,999); ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                  @endif
                </div>
                <div class="mt-3">
                  <h4>{{ auth()->guard('users_promotion')->user()->nickname }}</h4>
                  <p class="text-secondary mb-1" style="color: red!important;">@lang('promotion/lang.level') {{ auth()->guard('users_promotion')->user()->level_char }}</p>
                  <p class="text-secondary mb-1" style="font-size: small;">{{ auth()->guard('users_promotion')->user()->quote }}</p>
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
                  <input type="text" class="form-control" name="nickname" id="nickname" placeholder="Nickname" value="{{ auth()->guard('users_promotion')->user()->nickname }}" maxlength="255">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">Email: </h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <label class="form-control" id="qnt_email"></label>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3" style="padding-top: 10px; padding-bottom: 10px;">
                  <h6 style="text-align: left;" class="mb-0">Sms: </h6>
                </div>
                <div class="col-sm-9 mb-3">
                  <label class="form-control" id="qnt_sms"></label>
                </div>
              </div>
              <p style="float: right; padding-top: 15px;" onclick="edit_data_profile()">
                <a class="btn btn-secondary" target="_blank" role="button" id="">Salva <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mb-3" style="">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card bg-success mb-5 mb-lg-0 rounded-lg shadow">
                    <div class="card-header">
                      <h5 class="card-title text-white-50 text-uppercase text-center">Basic</h5>
                      <h6 class="h1 text-white text-center">€0<span class="h6 text-white-50">/Free</span></h6>
                    </div>
                    <div class="card-body bg-light rounded-bottom">
                      <ul class="list-unstyled mb-4">
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span><strong>Software</strong></li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-success"></i></span><strong>Creazione promo</strong></li>
                        <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times"></i></span>Report</li>
                        <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times"></i></span>Email</li>
                        <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times"></i></span>Sms</li>
                      </ul>
                      <a class="btn btn-block btn-primary text-uppercase rounded-lg py-3" disabled>Attiva</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card bg-warning mb-5 mb-lg-0 rounded-lg shadow">
                    <div class="card-header">
                      <h5 class="card-title text-white-50 text-uppercase text-center">Plus</h5>
                      <h6 class="h1 text-white text-center">€50<span class="h6 text-white-50">/1000 email</span></h6>
                    </div>
                    <div class="card-body bg-light rounded-bottom">
                      <ul class="list-unstyled mb-4">
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-warning"></i></span><strong>Software</strong></li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-warning"></i></span><strong>Creazione promo</strong></li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-warning"></i></span><strong>Report</strong></li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-warning"></i></span><strong>Email</strong></li>
                        <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times"></i></span>Sms</li>
                      </ul>
                      <a onclick="buy_now('email')" class="btn btn-block btn-primary text-uppercase rounded-lg py-3">Buy now</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card bg-danger mb-5 mb-lg-0 rounded-lg shadow">
                    <div class="card-header">
                      <h5 class="card-title text-white-50 text-uppercase text-center">Pro</h5>
                      <h6 class="h1 text-white text-center">€100<span class="h6 text-white-50">/1000 sms</span></h6>
                    </div>
                    <div class="card-body bg-light rounded-bottom">
                      <ul class="list-unstyled mb-4">
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-danger"></i></span><strong>Software</strong></li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-danger"></i></span><strong>Creazione promo</strong></li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-danger"></i></span><strong>Report</strong></li>
                        <li class="text-muted mb-3"><span class="mr-3"><i class="fas fa-times"></i></span>Email</li>
                        <li class="mb-3"><span class="mr-3"><i class="fas fa-check text-danger"></i></span><strong>Sms</strong></li>
                      </ul>
                      <a onclick="buy_now('sms')" class="btn btn-block btn-primary text-uppercase rounded-lg py-3">Buy now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-12 mb-3" style="">
          <div class="card h-100">
            <div class="card-body">
              <div class="form-group">
                <input text class="form-control"/>               
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
@endif
  
<script type="text/javascript">

  start_function_profile();

  function start_function_profile(){

    var height_navbar=$("#ftco-navbar").outerHeight()+"px";

    $(".container_page").css("height", "calc(100% - "+height_navbar+")");

    get_data_type_message();

  }

  function buy_now(type_message){

    $.get("buy_now_promotion",{type_message:type_message},
      function(data){

        location.reload();

      });

  }

  function get_data_type_message(){

    $.get("get_data_type_message_promotion",{},
      function(data){

        var res=jQuery.parseJSON(data);

        $("#qnt_email").text(res[0].qnt_email+"/1000");
        
        $("#qnt_sms").text(res[0].qnt_sms+"/1000");

      });

  }

</script>