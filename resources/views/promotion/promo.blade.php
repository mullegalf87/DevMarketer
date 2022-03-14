<style>
* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

/*#grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
}*/

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f040"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f108"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}

#promo .card{
  border-radius: 0;
}

[contenteditable]:focus {
    outline: 0px solid transparent;
  }
</style>

<div class="container-fluid" id="grad1" style="background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)">
  <div class="row justify-content-center mt-0">
    <div class="w-100">
      <div class="card px-0">
        <div class="">
          <div class="">
            <form id="msform">
              <ul id="progressbar">

                <div class="d-flex flex-nowrap">
                  <li class="active" id="account" style="flex-grow: 1;"><strong>Crea</strong></li>
                  <li id="personal" style="flex-grow: 1;"><strong>Anteprima</strong></li>
                  <!-- <li id="payment"><strong>Check out</strong></li> -->
                  <li id="confirm" style="flex-grow: 1;"><strong>Finish</strong></li>
                </div>
                <fieldset class="pb-0" id="fieldset_1">
                  <div class="row col-md-12 p-0 m-0" style="justify-content:center">
                    <div class="mt-3 ml-0 mr-0 col-md-6 group_tool_layout text-left">
                      <h2 class="fs-title">Crea promozione</h2>
                      <div class="form-group">
                        <label>Layout</label> 
                        <div class="d-flex flex-nowrap">
                          <select class="form-control mr-3" id="section_category_layout" name="section_category_layout">
                            <option value="" disabled="" selected="">Scegli categoria layout</option>
                            <option value="category_layout_1">Hair/Beauty</option>
                            <option value="category_layout_2">Barber</option>
                            <option value="category_layout_3">Miscellanea</option>
                          </select>
                          <select class="form-control section_edit_layout" id="select_layout">
                            <option value="" disabled="">Scegli layout</option>
                            <option value="1_1" data-pub="category_layout_1" selected="">Hair/beauty 1</option>
                            <option value="1_2" data-pub="category_layout_1">Hair/beauty 2</option>
                            <option value="1_3" data-pub="category_layout_1">Hair/beauty 3</option>
                            <option value="2_1" data-pub="category_layout_2">Barber 1</option>
                            <option value="2_2" data-pub="category_layout_2">Barber 2</option>
                            <option value="2_3" data-pub="category_layout_2">Barber 3</option>
                            <option value="3_1" data-pub="category_layout_3">Miscellanea 1</option>
                            <option value="3_2" data-pub="category_layout_3">Miscellanea 2</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Colore sezioni</label>
                        <div class="d-flex flex-nowrap">
                          <select class="form-control mr-3" id="select_section_color" name="">
                            <option value="" disabled="">Scegli sezione layout</option>
                          </select>
                          <select class="form-control section_edit_layout" id="select_colour">
                            <option value="" disabled="" selected="">Scegli colore</option>
                            <option value="#007bff">blue</option>
                            <option value="#6610f2">indigo</option>
                            <option value="#6f42c1">purple</option>
                            <option value="#e83e8c">pink</option>
                            <option value="#dc3545">red</option>
                            <option value="#fd7e14">orange</option>
                            <option value="#ffc107">yellow</option>
                            <option value="#28a745">green</option>
                            <option value="#20c997">teal</option>
                            <option value="#17a2b8">cyan</option>
                            <option value="#fff">white</option>
                            <option value="#6c757d">gray</option>
                            <option value="#343a40">gray-dark</option>
                            <option value="#007bff">primary</option>
                            <option value="#6c757d">secondary</option>
                            <option value="#28a745">success</option>
                            <option value="#ffc107">warning</option>
                            <option value="#dc3545">danger</option>
                            <option value="#f8f9fa">light</option>
                            <option value="#343a40">dark</option>
                          </select>
                        </div>  
                      </div>
                      <div class="form-group">
                        <label>Fine promozione</label> 
                        <input class="form-control section_edit_layout" type="date" id="end_promotion" name="name" placeholder=""> 
                      </div>
                      <div class="form-group">
                        <label>Max persone raggiungibili</label> 
                        <select class="form-control section_edit_layout" id="select_people_received">
                          <option value="999999" selected="">Nessun limite</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Social</label> 
                        <div class="d-flex flex-nowrap">
                          <div class="p-0">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Scegli Social</button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" onclick="select_social('facebook')">Facebook</a>
                                  <a class="dropdown-item" onclick="select_social('pinterest')">Pinterest</a>
                                  <a class="dropdown-item" onclick="select_social('instagram')">Instagram</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="p-0 w-100">
                            <input type="text" class="form-control input_social section_edit_layout" placeholder="Inserisci social">
                          </div>
                        </div>
                        <!-- <div class="btn-group d-flex">
                          <button type="button" class="btn btn-outline-primary"><i class="fa fa-share-alt"></i></button>
                          <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-social">
                            <a class="dropdown-item social-facebook mb-1 rounded"><i class="fab fa-facebook-f"></i></a>
                            <input class="form-control social mb-1 section_edit_layout" type="text" name="facebook" placeholder="Facebook" id="input_facebook">
                            <a class="dropdown-item social-pinterest mb-1 rounded"><i class="fab fa-pinterest"></i></a>
                            <input class="form-control social mb-1 section_edit_layout" type="text" name="pinterest" placeholder="Pinterest" id="input_pinterest">
                            <a class="dropdown-item social-instagram mb-1 rounded"><i class="fab fa-instagram"></i></a>
                            <input class="form-control social mb-1 section_edit_layout" type="text" name="instagram" placeholder="Instagram" id="input_instagram">
                          </div>
                        </div> -->
                      </div>
                    </div>
                    <div class="mt-3 ml-0 mr-0 col-md-6 group_iframe_layout">
                      <h2 class="fs-title">Anteprima</h2>
                      <iframe frameBorder="0" id="iframe_layout" class="w-100" src="" style="height: 90%"></iframe>
                    </div>
                  </div>
                  <button type="button" class="action-button btn btn-danger" onclick="reset_layout()"><i class="fas fa-trash-alt"></i></button>
                  <button type="button" name="next" class="next action-button btn btn-primary" value="Next Step">Avanti</button>
                </fieldset>

                <fieldset id="fieldset_2" style="">
                  <div class="p-3 mt-3">
                    <h2 class="fs-title">Anteprima promozione</h2>
                    <div id="card_preview_layout" class="card col-md-12 p-0">
                      <h5 class="card-header">
                        <select class="form-control" id="layout_send_chosen">
                          <option value="" selected="" disabled>Scegli layout</option>
                        </select>
                      </h5>
                      <div id="card_body_height" class="card-body p-0">
                        <iframe frameBorder="0" id="iframe_layout_preview" class="w-100" src="" style="height: 90%"></iframe>
                      </div>
                    </div>
                  </div>
                  <button type="button" name="previous" class="previous action-button-previous btn btn-secondary" value="Next Step">Indietro</button>
                  <button type="button" name="next" class="next action-button btn btn-primary" value="Next Step">Avanti</button>
                </fieldset>

                <!-- <fieldset id="fieldset_3">
                  <div class="mt-3 p-3">
                    <h2 class="fs-title">Check out</h2>
                    <div class="radio-group">
                      <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                      <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                    </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                    <div class="row">
                      <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                      <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                    </div>
                    <div class="row">
                      <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                      <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                        <option selected>Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                      </select> <select class="list-dt" id="year" name="expyear">
                        <option selected>Year</option>
                      </select> </div>
                    </div>
                  </div>
                  <button type="button" name="previous" class="previous action-button-previous btn btn-secondary" value="Next Step">Indietro</button>
                  <button type="button" name="next" class="next action-button btn btn-primary" value="Next Step">Avanti</button>
                </fieldset> -->

                @if( auth()->guard('users_promotion')->check() )
                <fieldset id="fieldset_3">
                  <div class="mt-3 p-3">
                    <h2 class="fs-title text-center">Success !</h2>
                    <div class="row justify-content-center">
                      <div class="mt-3 mb-3">
                        <img style="" src="https://img.icons8.com/color/96/000000/ok--v2.png" class="" style="max-width: 100%; object-fit: cover;">
                      </div>
                    </div>
                    <div class="row justify-content-center">
                      <div class="text-center">
                        <h5>Copia e incolla il tuo link sui social!</h5>
                        <p id="url_layout_preview" class="text_cut m-0 p-0" data-toggle="tooltip" title="Copiato!" onclick="copy_text('#url_layout_preview')" style="text-decoration: underline;color: blue"></p>
                      </div>
                    </div>
                    @if(auth()->guard('users_promotion')->user()->level!=0)
                    <div class="row text-left">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Scegli modalità invio *</label> 
                          <select class="form-control" id="type_send_chosen">
                            <option value="" selected="" disabled>Tipo invio</option>
                            <!-- <option value="email">Email</option>
                            <option value="sms">Sms</option> -->
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Upload lista clienti <a href="http://localhost:8000/promotion_repo/download_example_file/listclient.xlsx"><i class="fa fa-download"></i></a></label> 
                          <div class="custom-file mr-3">
                            <input type="file" name="file" class="custom-file-input" id="file-btn">
                            <label class="custom-file-label" for="file-btn">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row text-left">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Nome *</label> 
                          <input class="form-control" type="text" id="name_client_send" name="name" placeholder="Nome cliente">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Cognome *</label> 
                          <input class="form-control" type="text" id="lastname_client_send" name="name" placeholder="Cognome cliente">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Cellulare *</label> 
                          <input class="form-control" type="text" id="cell_client_send" name="name" placeholder="Cellulare cliente">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Email *</label> 
                          <input class="form-control" type="mail" id="email_client_send" name="name" placeholder="Email cliente">
                        </div>
                      </div>
                       <div class="col-md-12">
                        <div class="form-group">
                          <label>Messaggio *</label> 
                          <textarea class="form-control" id="message_client_send" placeholder="Messaggio"></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-secondary float-left" onclick="add_client()">Add</button>
                    <button type="button" class="btn btn-danger float-right" onclick="reset_list_client()">Reset</button>
                    <div class="table-responsive">
                      <table id="table_client" class="table mt-3 table-hover responsive nowrap">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Cellulare</th>
                            <th>Email</th>
                            <th>Comandi</th>
                          </tr>
                        </thead>
                        <tbody id="append_client_send">
                        </tbody>
                      </table>
                    </div>
                    @endif
                  </div>
                  <button type="button" name="previous" class="previous action-button-previous btn btn-secondary" value="Next Step">Indietro</button>
                  @if(auth()->guard('users_promotion')->user()->level!=0)
                  <button type="button" class="action-button btn btn-success" onclick="send_all_client()">Invia</button>
                  @endif
                </fieldset>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">

  // funzione per andare avanti
  $(document).ready(function(){

    var current_fs, next_fs, previous_fs;
    var opacity;

    $(".next").click(function(){

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      next_fs.show();

      if(next_fs[0].id=="fieldset_2") {

        var id_layout=$("#select_layout").val();

        get_layout_send(id_layout);

        $("#iframe_layout_preview" ).attr("src","");

      }else if(next_fs[0].id=="fieldset_3"){

        get_list_client_send();

        get_type_message();

      }

      current_fs.animate({opacity: 0}, {
        step: function(now) {

          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          next_fs.css({'opacity': opacity});
        },
        duration: 600
      });
    });

    $(".previous").click(function(){

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      previous_fs.show();

      current_fs.animate({opacity: 0}, {
        step: function(now) {

          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          previous_fs.css({'opacity': opacity});
        },
        duration: 600
      });
    });

    $('.radio-group .radio').click(function(){
      $(this).parent().find('.radio').removeClass('selected');
      $(this).addClass('selected');
    });

    $(".submit").click(function(){
      return false;
    })

  });

  $('#section_category_layout').on('change', function(e) {

    var selector = $(this).val();

    $("#select_layout > option").hide();

    $("#select_layout > option").filter(function(){return $(this).data('pub') == selector}).show();

  });

  var object_color={};

  $(".section_edit_layout").change(function(data){

    var id_select=$(this)[0].id;
    var id_layout=$("#select_layout").val();

    console.log(id_layout)

    switch(id_select){
      case "select_layout":
        create_element(id_layout);
      break;
      case "select_colour":
        var key_section_color="section_color_"+$("#select_section_color").val();
        var value_section_color=$("#select_colour").val();
        var newSection_color = new section_color(key_section_color, value_section_color);
        object_color[newSection_color.key_section_color] = newSection_color.value_section_color;
        save_setting_promotion();
      break;
      case "end_promotion":
        save_setting_promotion();
      break;
      case "select_people_received":
        save_setting_promotion();
      break;
      default:
        save_setting_promotion(id_select);
    }

    $("#iframe_layout").attr("src","http://localhost:8000/layout_"+id_layout);

  });

  function section_color(key_section_color,value_section_color){

    this.key_section_color=key_section_color;

    this.value_section_color=value_section_color;

  }   

  function create_element(id_layout){

    var name_layout=$("#select_layout").find('option:selected').text();

    $.get("create_element_promotion",{id_layout:id_layout, name_layout:name_layout},
      function(data){

        get_data_layout(id_layout);

        $("#iframe_layout").attr("src","http://localhost:8000/layout_"+id_layout);

      });

  }

  function get_data_layout(id_layout){

    $("#iframe_layout").on('load', function(){

      $.get("get_data_layout_promotion",{id_layout:id_layout},
        function(data){

          $("#select_section_color").empty();

          var res=jQuery.parseJSON(data);

          var num_section_color;

          for (var i = 0; i < res[0].qnt_section_color; i++) {

            num_section_color=i+1;

            $("#select_section_color").append('<option value="'+num_section_color+'">Sezione '+num_section_color+'</option>');

          }

          $("#select_carousel").val(res[0].carousel);
          $("#end_promotion").val(res[0].end_date);
          $("#select_people_received").val(res[0].max_people_received);
          $("#input_facebook").val(res[0].facebook);
          $("#input_pinterest").val(res[0].pinterest);
          $("#input_instagram").val(res[0].instagram);


        });

    });

  }

  // funzione di inserimento data fine
  var tomorrow=new Date();

  tomorrow.setDate(tomorrow.getDate()+1);

  var dt = tomorrow.getFullYear() + '-' + ("0" + (tomorrow.getMonth() + 1)).slice(-2) + '-' + ("0" + tomorrow.getDate()).slice(-2);

  $('#end_promotion').attr('min' , dt);

  $('#end_promotion').change(function(){

    var post_year_date=$('#end_promotion').val().split("-")[0];
    var post_month_date=$('#end_promotion').val().split("-")[1];
    var post_day_date=("0" + $('#end_promotion').val().split("-")[2]).slice(-2);
    var complete_date=post_year_date+"-"+post_month_date+"-"+post_day_date;

    var day_after_tomorrow = new Date(complete_date);

    day_after_tomorrow.setDate(day_after_tomorrow.getDate()+1);

    var dat = day_after_tomorrow.getFullYear() + '-' + ("0" + (day_after_tomorrow.getMonth() + 1)).slice(-2) + '-' + ("0" + day_after_tomorrow.getDate()).slice(-2);

  });

  function select_social(social){

    $(".input_social").val("");

    $(".input_social").attr("placeholder", "Inserisci "+social);

    $(".input_social").attr("id", "input_"+social);

  }

  function save_setting_promotion(column_input_social){

    var id_layout=$("#iframe_layout").attr("src").split("layout_")[1];
    var url_layout=$("#iframe_layout").attr("src");
    var  section_color=JSON.stringify(object_color).replaceAll('"',"").replaceAll('{',"").replaceAll('}',"");
    var date_end=$("#end_promotion").val();
    var select_people_received=$("#select_people_received").val();
    var select_type_send=$("#select_type_send").val();
    var input_social=$("#"+column_input_social).val();
    var select_carousel=$("#select_carousel").val();

    if (input_social==undefined) {

      input_social=$("#input_facebook").val();
      column_input_social="input_facebook";

    }

    $.get("save_setting_promotion",{id_layout:id_layout, section_color:section_color, select_people_received:select_people_received, select_type_send:select_type_send, date_end:date_end, column_input_social:column_input_social,input_social:input_social, select_carousel:select_carousel},
      function(data){

      });

  }

  function copy_text(element) {

    var temp = $("<input>");

    $("body").append(temp);

    temp.val($(element).text()).select();

    document.execCommand("copy");

    temp.remove();

    $(document).ready(function() {

      $('[data-toggle="tooltip"]').tooltip();

      setTimeout(function(data){

        $('[data-toggle="tooltip"]').tooltip("hide");

      },5000);

    });

  }

  function get_layout_send(id_layout){

    $("#layout_send_chosen").empty();

    $.get("get_layout_send_promotion",{},
      function(data){

        var res=jQuery.parseJSON(data);
        var selected;
        var opened_closed;

        for (var i = 0; i < res.length; i++) {

          if (res[i].id_layout==id_layout && res[i].closed!=1) {

            selected="selected";

          }else{

            selected="";

          }

          if (res[i].closed==0) {

            opened_closed="Non inviata";

          }else{

            opened_closed="Inviata";

          }

          $("#layout_send_chosen").append('<option value="'+res[i].id_layout+'#'+res[i].token_layout+'" '+selected+'>Campagna '+res[i].name_layout+' - '+formatDate(res[i].creation_date)+' - '+opened_closed+'</option>');

        } 

        get_token_layout_promotion($("#layout_send_chosen").val().split("#")[1]);
        
      });

  }

  function get_token_layout_promotion(token_layout){

    $.get("get_token_layout_promotion",{token_layout:token_layout},
      function(data){

        var res=jQuery.parseJSON(data);

        var url_generator='http://localhost:8000/layout_'+res[0].id_layout+'?layout='+res[0].token_layout+"#";

        $("#url_layout_preview").attr("href",url_generator).text(url_generator);

        $("#message_client_send").text("Ciao, clicca sul link seguente: "+url_generator);

        $("#iframe_layout_preview").attr("src",url_generator);

      });

  }

  $("#layout_send_chosen").change(function(data){

    var token_layout=$(this).val().split("#")[1];

    get_token_layout_promotion(token_layout);

  });

  function get_type_message(){

    $("#type_send_chosen").empty();

    $.get("get_type_message_promotion",{},
      function(data){

        var res=jQuery.parseJSON(data);

        $("#type_send_chosen").append('<option value="" selected="" disabled>Tipo invio</option>'+
          '<option value="email" selected>'+res[0].qnt_email+' Email</option>'+
          '<option value="sms">'+res[0].qnt_sms+' Sms</option>');

      });
  
  }

  function get_list_client_send(){

    $("#append_client_send").empty();

    // var token_layout=$("#url_layout_preview").text().split("?layout=")[1];
    var token_layout = $("#url_layout_preview").text().substring(
    $("#url_layout_preview").text().indexOf("=") + 1, 
    $("#url_layout_preview").text().lastIndexOf("#")
    );

    $.get("get_client_send_promotion",{token_layout:token_layout},
      function(data){

        var res=jQuery.parseJSON(data);
        var num;

        for (var i = 0; i < res.length; i++) {

          num=i+1;

          $("#append_client_send").append(
            '<tr id="tr_'+num+'">'+
            '<td id="td_id_'+num+'">'+num+'</td>'+
            '<td id="td_name_'+num+'">'+res[i].name+'</td>'+
            '<td id="td_lastname_'+num+'">'+res[i].lastname+'</td>'+
            '<td id="td_cell_'+num+'">'+res[i].cell+'</td>'+
            '<td id="td_email_'+num+'">'+res[i].email+'</td>'+
            '<td><button class="btn btn-danger" onclick="delete_tr_client_send('+num+','+res[i].id+')">Delete</button></td>'+
            '</tr>');

        }

      });

  }

  var num=0;
  function add_client(){

    var name_client_send=$("#name_client_send").val();
    var lastname_client_send=$("#lastname_client_send").val();
    var cell_client_send=$("#cell_client_send").val();
    var email_client_send=$("#email_client_send").val();

    num=$("#append_client_send").find("tr").length+1;

    $("#append_client_send").append(
      '<tr id="tr_'+num+'">'+
      '<td id="td_id_'+num+'">'+num+'</td>'+
      '<td id="td_name_'+num+'">'+name_client_send+'</td>'+
      '<td id="td_lastname_'+num+'">'+lastname_client_send+'</td>'+
      '<td id="td_cell_'+num+'">'+cell_client_send+'</td>'+
      '<td id="td_email_'+num+'">'+email_client_send+'</td>'+
      '<td><button class="btn btn-danger" onclick="delete_tr_client_send('+num+')">Delete</button></td>'+
      '</tr>');
  }


  function send_all_client(){

    // var token_layout=$("#url_layout_preview").text().split("?layout=")[1];

    var type_send_chosen=$("#type_send_chosen").val();
    var qnt_type_message=$("#type_send_chosen option:selected").text().split(" ")[0];

    var token_layout = $("#url_layout_preview").text().substring(
    $("#url_layout_preview").text().indexOf("=") + 1, 
    $("#url_layout_preview").text().lastIndexOf("#")
    );

    var name_client_send=[];
    var lastname_client_send=[];
    var cell_client_send=[];
    var email_client_send=[];

    $("#append_client_send").find("tr").each(function(index){

      var num=$(this)[0].id.split("_")[1];

      if ($("#td_name_"+num).text()=="") {
        $("#td_name_"+num).css("border","1px solid red").addClass("text_edit").attr('contenteditable', 'true');
      }else{
        $("#td_name_"+num).css("border","1px solid #dee2e6").removeClass("text_edit").removeAttr('contenteditable', 'true');
      }
      if ($("#td_lastname_"+num).text()=="") {
        $("#td_lastname_"+num).css("border","1px solid red").addClass("text_edit").attr('contenteditable', 'true');
      }else{
        $("#td_lastname_"+num).css("border","1px solid #dee2e6").removeClass("text_edit").removeAttr('contenteditable', 'true');
      }
      if ($("#td_cell_"+num).text()=="") {
        $("#td_cell_"+num).css("border","1px solid red").addClass("text_edit").attr('contenteditable', 'true');
      }else{
        $("#td_cell_"+num).css("border","1px solid #dee2e6").removeClass("text_edit").removeAttr('contenteditable', 'true');
      }
      if ($("#td_email_"+num).text()=="") {
        $("#td_email_"+num).css("border","1px solid red").addClass("text_edit").attr('contenteditable', 'true');
      }else{
        $("#td_email_"+num).css("border","1px solid #dee2e6").removeClass("text_edit").removeAttr('contenteditable', 'true');
      }

      name_client_send.push($("#td_name_"+num).text());
      lastname_client_send.push($("#td_lastname_"+num).text());
      cell_client_send.push($("#td_cell_"+num).text());
      email_client_send.push($("#td_email_"+num).text());

    });
    
    var new_name_client_send = name_client_send.filter(function(v){return v!==''});
    var true_false_name_client_send = name_client_send.length==new_name_client_send.length;

    var new_lastname_client_send = lastname_client_send.filter(function(v){return v!==''});
    var true_false_lastname_client_send = lastname_client_send.length==new_lastname_client_send.length;

    var new_cell_client_send = cell_client_send.filter(function(v){return v!==''});
    var true_false_cell_client_send = cell_client_send.length==new_cell_client_send.length;

    var new_email_client_send = email_client_send.filter(function(v){return v!==''});
    var true_false_email_client_send = email_client_send.length==new_email_client_send.length;

    if (type_send_chosen=="email") {

      if (true_false_name_client_send && true_false_lastname_client_send && true_false_email_client_send) {

        send_message_ok(token_layout, name_client_send, lastname_client_send, cell_client_send, email_client_send, email_client_send, type_send_chosen, qnt_type_message);

      }else{

        $("#table_client").before('<div class="alert alert-danger mt-3" role="alert">Mancano dati obbligatori nella lista clienti!</div>');

        setTimeout(function(data){

          $(".alert").remove();

        },3000);

      }

    }else if(type_send_chosen=="sms"){

      if (true_false_name_client_send && true_false_lastname_client_send && true_false_cell_client_send) {

        send_message_ok(token_layout, name_client_send, lastname_client_send, cell_client_send, email_client_send, email_client_send, type_send_chosen, qnt_type_message);

      }else{

        $("#table_client").before('<div class="alert alert-danger mt-3" role="alert">Mancano dati obbligatori nella lista clienti!</div>');

        setTimeout(function(data){

          $(".alert").remove();

        },3000);

      }

    }

  }

  function send_message_ok(token_layout, name_client_send, lastname_client_send, cell_client_send, email_client_send, email_client_send, type_send_chosen, qnt_type_message){

    var message_client_send=$("#message_client_send").text();

    if ($("#append_client_send").find("tr").length!=0 && $("#append_client_send").find("tr").length<=qnt_type_message && message_client_send!="") {

      $.get("add_client_send_promotion",{token_layout:token_layout, name_client_send:name_client_send, lastname_client_send:lastname_client_send, cell_client_send:cell_client_send, email_client_send:email_client_send, type_send_chosen:type_send_chosen, message_client_send
        :message_client_send},
      function(data){

        get_list_client_send();

        $("#table_client").before('<div class="alert alert-success mt-3" role="alert">Messaggi inviati correttamente!</div>');

        setTimeout(function(data){

          $(".alert").remove();

          location.reload();

        },3000);

      });

    }else{

      $("#table_client").before('<div class="alert alert-danger mt-3" role="alert">Forse Non hai inserito clienti, oppure i clienti sono superiori ai messaggi disponibili, oppure non hai inserito il messaggio!</div>');

      setTimeout(function(data){

        $(".alert").remove();

      },3000);

    }

  }

  function delete_tr_client_send(num, id){

    $("#tr_"+num).remove();

    if (id!=undefined) {

      delete_client_send(id);

    }

  }

  function delete_client_send(id){

    $.get("delete_client_send_promotion",{id:id},
      function(data){

      });

  }

  $("#file-btn").change(function(event){

    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = readSuccess;

    function readSuccess(evt) {                      
          var fileContent = evt.target.result;     
          var workbook = XLSX.read(fileContent, { type: 'binary' }); 

          workbook.SheetNames.forEach(sheetname => {

        const data = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetname]);
        
        for (var i = 0; i < data.length; i++) {

          var num=$("#append_client_send").find("tr").length+1;

          $("#append_client_send").append(
            '<tr id="tr_'+num+'">'+
            '<td id="td_nid_'+num+'">'+num+'</td>'+
            '<td id="td_name_'+num+'">'+data[i].Nome+'</td>'+
            '<td id="td_lastname_'+num+'">'+data[i].Cognome+'</td>'+
            '<td id="td_cell_'+num+'">'+data[i].Cellulare+'</td>'+
            '<td id="td_email_'+num+'">'+data[i].Email+'</td>'+
            '<td><button class="btn btn-danger" onclick="delete_tr_client_send('+num+')">Delete</button></td>'+
            '</tr>');
        }

      });   

      };

      reader.readAsBinaryString(file);

  });

  function reset_layout(){

    var id_layout=$("#select_layout").val();

    $.get("reset_layout_promotion",{id_layout:id_layout},
      function(data){

        $("#select_layout").val("1_1");

      });

  }

  function reset_list_client(){

    $("#append_client_send").empty();

    $("#file-btn").val("");

  }

</script>