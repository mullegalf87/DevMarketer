<style type="text/css">
  html {
  position: relative;
  min-height: 100%;
}

body {
  overflow-x: hidden;
}

body.sticky-footer {
  margin-bottom: 56px;
}

body.sticky-footer .content-wrapper {
  min-height: calc(100vh - 56px - 56px);
}

body.fixed-nav {
  padding-top: 56px;
}

.content-wrapper {
  min-height: calc(100vh - 56px);
  padding-top: 1rem;
}

.scroll-to-top {
  position: fixed;
  right: 15px;
  bottom: 3px;
  display: none;
  width: 50px;
  height: 50px;
  text-align: center;
  color: white;
  background: rgba(52, 58, 64, 0.5);
  line-height: 45px;
}

.scroll-to-top:focus, .scroll-to-top:hover {
  color: white;
}

.scroll-to-top:hover {
  background: #343a40;
}

.scroll-to-top i {
  font-weight: 800;
}

.smaller {
  font-size: 0.7rem;
}

.o-hidden {
  overflow: hidden !important;
}

.z-0 {
  z-index: 0;
}

.z-1 {
  z-index: 1;
}

#mainNav .navbar-collapse {
  overflow: auto;
  max-height: 75vh;
}

#mainNav .navbar-collapse .navbar-nav .nav-item .nav-link {
  cursor: pointer;
}

#mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  float: right;
  content: '\f107';
  font-family: 'FontAwesome';
}

#mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse.collapsed:after {
  content: '\f105';
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level {
  padding-left: 0;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a {
  display: block;
  padding: 0.5em 0;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a:focus, #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a:hover,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a:focus,
#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a:hover {
  text-decoration: none;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a {
  padding-left: 1em;
}

#mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a {
  padding-left: 2em;
}

#mainNav .navbar-collapse .sidenav-toggler {
  display: none;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
  position: relative;
  min-width: 45px;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  float: right;
  width: auto;
  content: '\f105';
  border: none;
  font-family: 'FontAwesome';
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link .indicator {
  position: absolute;
  top: 5px;
  left: 21px;
  font-size: 10px;
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown.show > .nav-link:after {
  content: '\f107';
}

#mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
  overflow: hidden;
  max-width: none;
  text-overflow: ellipsis;
}

@media (min-width: 992px) {
  #mainNav .navbar-brand {
    width: 250px;
  }
  #mainNav .navbar-collapse {
    overflow: visible;
    max-height: none;
  }
  #mainNav .navbar-collapse .navbar-sidenav {
    position: absolute;
    top: 0;
    left: 0;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-top: 56px;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item {
    width: 250px;
    padding: 0;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
    padding: 1em;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    padding-left: 0;
    list-style: none;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li,
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li {
    width: 250px;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
    padding: 1em;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a {
    padding-left: 2.75em;
  }
  #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
    padding-left: 3.75em;
  }
  #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
    min-width: 0;
  }
  #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
    width: 24px;
    text-align: center;
  }
  #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
    max-width: 300px;
  }
}

#mainNav.fixed-top .sidenav-toggler {
  display: none;
}

@media (min-width: 992px) {
  #mainNav.fixed-top .navbar-sidenav {
    height: calc(100vh - 112px);
  }
  #mainNav.fixed-top .sidenav-toggler {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-top: calc(100vh - 56px);
  }
  #mainNav.fixed-top .sidenav-toggler > .nav-item {
    width: 250px;
    padding: 0;
  }
  #mainNav.fixed-top .sidenav-toggler > .nav-item > .nav-link {
    padding: 1em;
  }
}

#mainNav.fixed-top.navbar-dark .sidenav-toggler {
  background-color: #212529;
}

#mainNav.fixed-top.navbar-dark .sidenav-toggler a i {
  color: #adb5bd;
}

#mainNav.fixed-top.navbar-light .sidenav-toggler {
  background-color: #dee2e6;
}

#mainNav.fixed-top.navbar-light .sidenav-toggler a i {
  color: rgba(0, 0, 0, 0.5);
}

body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler {
  overflow-x: hidden;
  width: 55px;
}

body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-item,
body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-link {
  width: 55px !important;
}

body.sidenav-toggled #mainNav.fixed-top #sidenavToggler i {
  -webkit-transform: scaleX(-1);
  -moz-transform: scaleX(-1);
  -o-transform: scaleX(-1);
  transform: scaleX(-1);
  filter: FlipH;
  -ms-filter: 'FlipH';
}

#mainNav.static-top .sidenav-toggler {
  display: none;
}

@media (min-width: 992px) {
  #mainNav.static-top .sidenav-toggler {
    display: flex;
  }
}

body.sidenav-toggled #mainNav.static-top #sidenavToggler i {
  -webkit-transform: scaleX(-1);
  -moz-transform: scaleX(-1);
  -o-transform: scaleX(-1);
  transform: scaleX(-1);
  filter: FlipH;
  -ms-filter: 'FlipH';
}

.content-wrapper {
  overflow-x: hidden;
  background: white;
}

@media (min-width: 992px) {
  .content-wrapper {
    
  }
}

#sidenavToggler i {
  font-weight: 800;
}

.navbar-sidenav-tooltip.show {
  display: none;
}

@media (min-width: 992px) {
  body.sidenav-toggled .content-wrapper {
    margin-left: 55px;
  }
}

body.sidenav-toggled .navbar-sidenav {
  width: 55px;
}

body.sidenav-toggled .navbar-sidenav .nav-link-text {
  display: none;
}

body.sidenav-toggled .navbar-sidenav .nav-item,
body.sidenav-toggled .navbar-sidenav .nav-link {
  width: 55px !important;
}

body.sidenav-toggled .navbar-sidenav .nav-item:after,
body.sidenav-toggled .navbar-sidenav .nav-link:after {
  display: none;
}

body.sidenav-toggled .navbar-sidenav .nav-item {
  white-space: nowrap;
}

body.sidenav-toggled .navbar-sidenav-tooltip.show {
  display: flex;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
  color: #adb5bd;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
  color: #868e96;
}

#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
#mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
  color: #adb5bd;
}

#mainNav.navbar-dark .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  color: #adb5bd;
}

@media (min-width: 992px) {
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
    background: #343a40;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a {
    color: white !important;
    background-color: #495057;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:hover {
    color: white;
  }
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
  #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    background: #343a40;
  }
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
  color: rgba(0, 0, 0, 0.7);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
  color: rgba(0, 0, 0, 0.5);
}

#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
#mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
  color: rgba(0, 0, 0, 0.7);
}

#mainNav.navbar-light .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
  color: rgba(0, 0, 0, 0.5);
}

@media (min-width: 992px) {
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav {
    background: #f8f9fa;
  }
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a {
    color: #000 !important;
    background-color: #e9ecef;
  }
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:hover {
    color: #000;
  }
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
  #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
    background: #f8f9fa;
  }
}

.card-body_highcart {
    
  padding: 1.25rem 0;

}

.card-body-icon {
  position: absolute;
  z-index: 0;
  top: -25px;
  right: -25px;
  font-size: 5rem;
  -webkit-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  transform: rotate(15deg);
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 1;
  }
}

@media (min-width: 768px) {
  .card-columns {
    column-count: 2;
  }
}

@media (min-width: 1200px) {
  .card-columns {
    column-count: 2;
  }
}

.card-login {
  max-width: 25rem;
}

.card-register {
  max-width: 40rem;
}

footer.sticky-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 56px;
  background-color: #e9ecef;
  line-height: 55px;
}

@media (min-width: 992px) {
  footer.sticky-footer {
    width: calc(100% - 250px);
  }
}

@media (min-width: 992px) {
  body.sidenav-toggled footer.sticky-footer {
    width: calc(100% - 55px);
  }
}
</style>
@if( auth()->guard('users_promotion')->check() )
@if(auth()->guard('users_promotion')->user()->level!=0)
<div class="content-wrapper">
  <div class="container-fluid">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a style="display: flex; align-items: center;">Dashboard</a>
      </li>
    </ol>
    
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5" id="text_campaign_1"></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" onclick="desc_button(1)">
            <span class="float-left" id="desc_button_1">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-comments"></i>
            </div>
            <div class="mr-5" id="text_campaign_2"></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" onclick="desc_button(2)">
            <span class="float-left" id="desc_button_2">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
            <div class="mr-5" id="text_campaign_3"></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" onclick="desc_button(3)">
            <span class="float-left" id="desc_button_3">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-support"></i>
            </div>
            <div class="mr-5" id="text_campaign_4"></div>
          </div>
          <a class="card-footer text-white clearfix small z-1" onclick="desc_button(4)">
            <span class="float-left" id="desc_button_4">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-bar-chart"></i> Bar Chart 
      </div>
      <div class="card-body card-body_highcart">
        <div class="row">
          <div class="col-sm-8 my-auto">
            <div id="report_barchart"></div>
          </div>
          <div class="col-sm-4 text-center my-auto" id="append_percentage">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-area-chart"></i> Line chart 
          </div>
          <div class="card-body card-body_highcart">
            <div id="report_linearchart"></div>
          </div>
          <div class="card mt-3">
            <div class="card-header d-flex flex-nowrap">
              <i class="fa fa-table mr-3" style="display: flex; align-items: center;"></i>
            <select class="form-control" id="choose_campaign">
            </select>
            </div>
            <div class="card-body card-body_highcart">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Cognome</th>
                      <th>Email</th>
                      <th>Cell</th>
                      <th>Registrato</th>
                      <th>Data</th>
                    </tr>
                  </thead>
                  <tbody id="append_people_registered">
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-pie-chart"></i> Pie Chart 
          </div>
          <div class="card-body card-body_highcart">
            <div id="report_piechart"></div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-bell-o"></i> Campagne in scadenza
          </div>
          <div class="list-group list-group-flush small" id="append_expiration_campaign">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@else
<script type="text/javascript">
  console.log("sono qui")
</script>
@endif
@endif

<script type="text/javascript">

  start_function_report();

  function start_function_report(){

    var height_navbar=$("#ftco-navbar").outerHeight()+"px";

    $(".container_page").css("height", "calc(100% - "+height_navbar+")");

    get_campaign();

    report_barchart();

  }

  function formatDate_week(date) {

  var weekday = ["Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato"];
  var d = new Date(date);
  var month = '' + (d.getMonth() + 1);
  var day = '' + d.getDate();
  var day_name = '' + weekday[d.getDay()];
  var year = d.getFullYear().toString().substr(-2);
  if (month.length < 2) 
    month = '0' + month;
  if (day.length < 2) 
    day = '0' + day;
  return day_name;

  }  

  function get_campaign(){

    $("#choose_campaign").empty();

    $.get("get_choose_campaign_promotion",{},
      function(data){

        var res=jQuery.parseJSON(data);
        var selected;
        var opened_closed;

        for (var i = 0; i < res.length; i++) {

          $("#choose_campaign").append('<option value="'+res[i].id_layout+'#'+res[i].token_layout+'" '+selected+'>Campagna '+res[i].name_layout+' - '+formatDate(res[i].creation_date)+'</option>');

        } 

        report_linearchart();
        report_datatable(res[0].token_layout);
        report_expiration_campaign();
        
      });

  }

  $("#choose_campaign").change(function(data){

    var token_layout=$(this).val().split("#")[1];

    report_datatable($("#choose_campaign").val().split("#")[1]);

  });

  function report_barchart(){

    $("#append_percentage").empty();

    var categories=[];
    var series=[];
    var percentage;
    var series_pie=[];

    $.get('/get_report_barchart_promotion', {},
      function(data){

        var res=jQuery.parseJSON(data);
        var sum_message_send=0;
        var sum_message_registered=0;

        $("#text_campaign_1").text(res.length+" Campagne registrate");

        for (var i=0; i<res.length; i++){

          categories.push(res[i].name_layout);
          series.push(res[i].people_registered);
          percentage=res[i].people_registered/res[i].people_send*100;
          percentage=parseFloat(percentage.toFixed(2));
          series_pie.push({ name:res[i].name_layout, y:percentage});
          sum_message_send+=res[i].people_send;
          sum_message_registered+=res[i].people_registered;

        }

        $("#text_campaign_2").text(sum_message_send+" Messaggi inviati");

        $("#text_campaign_3").text(sum_message_registered+" Clienti registrati");

        $("#text_campaign_4").text(parseFloat(sum_message_registered/sum_message_send*100).toFixed(2)+"% Rapporto euro/registrazioni");

        var top_three;

        for (var y=0; y<res.length; y++){

        top_three='<div class="h4 mb-0 text-danger">'+res[y].people_registered+'/'+res[y].people_send+'</div>'+
        '<div class="small text-muted">'+res[y].name_layout+'</div>'+
        '<hr>';

        $("#append_percentage").append(top_three);

      }

        $('#report_barchart').highcharts({
          title: {
            text: 'Clienti registrati'
          },
          chart: {

            type: 'column'
          },
          xAxis: {
            categories: categories
          },

          yAxis: {
            min: 0,
            title: {
              text: 'Clienti'
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
                  click: function () {

                  }
                }
              }
            },
          },

          series: [{

            data: series,
            name: "Campagne"

          }]
        });

        $('#report_piechart').highcharts({
          title: {
            text: 'Rapporto euro/registrazioni'
          },
          chart: {

            type: 'pie'
          },

          plotOptions: {

            column: {
              colorByPoint: true
            },

            series: {
              cursor: 'pointer',
              point: {
                events: {
                  click: function () {

                  }
                }
              }
            },
          },

          series: [{
            name: 'Campagne',
            colorByPoint: true,
            data: series_pie
          }]  

        });

      });

    $( document ).ready(function() {
      $("#append_percentage").css("height",$('#report_barchart').height()+"px");
      $("#append_percentage").css("overflow","scroll");
    });

  }

  function report_linearchart(){

    var categories=[];
    var series_registered_current=[];
    var series_registered_previous=[];

    $.get('/get_report_linearchart_promotion', {},
      function(data){

        var res=jQuery.parseJSON(data);

        for (var i = 0; i < res.result_current.length; i++) {

          categories.push(formatDate_week(res.result_current[i].date));

          series_registered_current.push(res.result_current[i].count_registered);

        }

        for (var i = 0; i < res.result_previous.length; i++) {

          series_registered_previous.push(res.result_previous[i].count_registered);

        }


        $('#report_linearchart').highcharts({
          title: {
            text: 'Clienti registrati settimana'
          },
          chart: {
            renderTo: 'container',
            marginBottom: 80
          },
          xAxis: {
            categories: categories
          },
          yAxis: {
            min: 0,
            title: {
              text: 'Clienti'
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

            data: series_registered_current,
            name: "settimana corrente"

          },{

            data: series_registered_previous,
            name: "settimana precedente"

          }]

        });

      });

  }

  function report_datatable(token_layout){

    $("#append_people_registered").empty();

    $.get('/get_report_datatabel_promotion', {token_layout:token_layout},
      function(data){

        var res=jQuery.parseJSON(data);
        var status;

        for (var i = 0; i < res.length; i++) {

          if (res[i].registered==0) {

            status='<span class="badge badge-warning">In attesa</span>';

          }else{

            status='<span class="badge badge-success">Registrato</span>';

          }

          $("#append_people_registered").append('<tr><td>'+res[i].name+'</td><td>'+res[i].lastname+'</td><td>'+res[i].email+'</td><td>'+res[i].cell+'</td><td>'+status+'</td><td>'+formatDate(res[i].date)+'</td></tr>');

        }

      });

  }

  function report_expiration_campaign(){

    $("#append_expiration_campaign").empty();

    $.get('/report_expiration_campaign_promotion', {},
      function(data){

        var res=jQuery.parseJSON(data);

        for (var i = 0; i < res.length; i++) {

          $("#append_expiration_campaign").append('<a class="list-group-item list-group-item-action">'+
            '<div class="media">'+
            '<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">'+
            '<div class="media-body">'+
            '<strong>Campagna '+res[i].name_layout+'</strong> creata il '+
            '<strong>'+formatDate(res[i].creation_date)+'</strong>'+
            '<div class="text-muted smaller">Scade il '+formatDate(res[i].end_date)+'</div>'+
            '</div>'+
            '</div>'+
            '</a>');

        }

      });

  }

  function desc_button(num){

    var desc;  

    switch(num){
      case 1:
        desc="Campagne registrate";
      break;
      case 2:
        desc="Messaggi inviati";
      break;
      case 3:
        desc="Persone registrate";
      break;
      case 4:
        desc="Rapporto euro/registrazioni";
      break;
      default:
      break;

    }

    $("#desc_button_"+num).text(desc);

    setTimeout(function(data){

       $("#desc_button_"+num).text("View Details");

    },5000);

  }



</script>

