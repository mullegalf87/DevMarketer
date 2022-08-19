<style type="text/css">
  body {
    background: #f7f7f7;
  }

  .table {
    border-spacing: 0 0.85rem !important;
  }

  .table .dropdown {
    display: inline-block;
  }

  .table td,
  .table th {
    vertical-align: middle;
    margin-bottom: 10px;
    border: none;
  }

  .table thead tr,
  .table thead th {
    border: none;
    font-size: 12px;
    letter-spacing: 1px;
    text-transform: uppercase;
    background: transparent;
  }

  .table td {
    background: #fff;
  }

  .table td:first-child {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }

  .table td:last-child {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .avatar {
    width: 2.75rem;
    height: 2.75rem;
    line-height: 3rem;
    border-radius: 50%;
    display: inline-block;
    background: transparent;
    position: relative;
    text-align: center;
    color: #868e96;
    font-weight: 700;
    vertical-align: bottom;
    font-size: 1rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .avatar-sm {
    width: 2.5rem;
    height: 2.5rem;
    font-size: 0.83333rem;
    line-height: 1.5;
  }

  .avatar-img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
  }

  .avatar-blue {
    background-color: #c8d9f1;
    color: #467fcf;
  }

  table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > td:first-child:before,
  table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > th:first-child:before {
  
    left: 14px;
    border: none;
    box-shadow: none;
  }

  table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
  table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
    padding-left: 5px;
  }

  table.dataTable > tbody > tr.child ul.dtr-details {
    width: 100%;
  }

  table.dataTable > tbody > tr.child span.dtr-title {
    min-width: 50%;
  }

  table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
  table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
  table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
    padding: 0.75rem 1rem 0.125rem;
  }

  div.dataTables_wrapper div.dataTables_length label,
  div.dataTables_wrapper div.dataTables_filter label {
    margin-bottom: 0;
  }

  @media (max-width: 767px) {
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
      -ms-flex-pack: center !important;
      justify-content: center !important;
      margin-top: 1rem;
    }
  }

  #table_product .btn-icon {
    background: #fff;
  }
  #table_product .btn-icon .bx {
    font-size: 20px;
  }

  #table_product .btn .bx {
    vertical-align: middle;
    font-size: 20px;
  }

  #table_product .dropdown-menu {
    padding: 0.25rem 0;
  }

  #table_product .dropdown-item {
    padding: 0.5rem 1rem;
  }

  #table_product .badge {
    padding: 0.5em 0.75em;
  }

  #table_product .badge-success-alt {
    background-color: #d7f2c2;
    color: #7bd235;
  }

  #table_product .table a {
    color: #212529;
  }

  #table_product .table a:hover,
  #table_product .table a:focus {
    text-decoration: none;
  }

  table.dataTable {
    margin-top: 12px !important;
  }

  #table_product .icon > .bx {
    display: block;
    min-width: 1.5em;
    min-height: 1.5em;
    text-align: center;
    font-size: 1.0625rem;
  }

  #table_product .btn {
    font-size: 0.9375rem;
    font-weight: 500;
    padding: 0.5rem 0.75rem;
  }

  .avatar-blue {
    background-color: #c8d9f1;
    color: #467fcf;
  }

  .avatar-pink {
    background-color: #fcd3e1;
    color: #f66d9b;
  }
  .paginate_button{

    padding:0 !important;

  }

  .dataTables_filter input{

    margin-left:0 !important;
  }

  #table_product_filter {
   margin-top: 0.5em !important; 
 } 

 .table {
  border-spacing: 0 0.4rem !important;
}

.dtr-details td{

  background: #fff;

}

.dtr-details tr{

  background: black;
  
}

.td_disabled {
    background-color: lightgray!important;
    color: white!important;
}


</style>

<div id="product_container" class="tab-content col-md-12 p-0" style="overflow: auto; flex: 1; height: calc(100% - 78px); position: absolute; right: 0; bottom: 0; left: 0;">  
  <div class="p-3" id="append_product_user" style="display: grid; grid-template-columns: 1fr 1fr;">
  </div>
</div>

<div style="padding:15px;position: absolute;bottom: 0px; right: 0px;">
  <button class="btn btn-primary btn-circle btn-circle-lg m-1" onclick='open_menu(2)' style="box-shadow: 2px 2px 2px 1px darkslategrey;">
    <i class="bx bx-plus-medical"></i>
  </button>
</div>
    
<script type="text/javascript">

function start_function_product(){

  get_product_user();

}

function get_product_user(){

  $.get("/get_product_user_bookmap",{},
   function(data){  
   
    var numb;
    var cat;
    var src="";
    var visibility;
    var button_edit;

    $("#append_product_user").empty();
    
    var res=jQuery.parseJSON(data);

    for (var i = 0; i < res.length; i++) {

      numb = i+1;

      if (res[i].cat==1) {

        cat="@lang('bookmap/lang.book')";

      }else if(res[i].cat==2){

        cat="@lang('bookmap/lang.vehicles')";

      }else if(res[i].cat==3){

        cat="@lang('bookmap/lang.technology')";

      }else if(res[i].cat==4){

        cat="@lang('bookmap/lang.clothing')";

      }else if(res[i].cat==5){

        cat="@lang('bookmap/lang.medicines')";

      }else if(res[i].cat==6){

        cat="Sport";

      }else if(res[i].cat==7){

        cat="@lang('bookmap/lang.properties')";

      }else if(res[i].cat==8){

        cat="@lang('bookmap/lang.food_and_drink')";

      }else if(res[i].cat==9){

        cat="Multimedia";

      }else if(res[i].cat==10){

        cat="@lang('bookmap/lang.other')";

      }

      //inserire id user Auth::user()->id
      if (res[i].name_img=="") {

        src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>";

      } else {

        src="bookmap_repo/img_user/"+res[i].id_vendor+"/"+res[i].id+"/"+res[i].name_img.split(",")[0]+"?refresh=<?php echo rand(1,999); ?>";

      }

      if (res[i].visibility==1) {

        visibility="td_disabled";
        button_edit="open_menu(4)";

      }else{

        visibility="";
        button_edit='edit_input_prod(\''+numb+'\',\''+res[i].id_vendor+'\',\''+res[i].id+'\',\''+res[i].name_prod+'\',\''+res[i].cat+'\',\''+res[i].desc+'\',\''+res[i].price+'\',\''+res[i].place+'\',\''+res[i].name_img+'\')';

      }

      var content_info_window=
      "<div class='product--blue' style='margin: 3%;'>"+
      "<div class='product_inner'>";

      if (res[i].name_img=="") {

        content_info_window+=
        '<img src="bookmap_repo/default_img.png?refresh=<?php echo rand(1,999); ?>" class="card-img img-fluid" alt="" style="width: 100%; height: 200px !important; object-fit: cover;">';

      }else{

        content_info_window+=      
        '<img src="bookmap_repo/img_user/'+res[i].id_vendor+'/'+res[i].id+'/'+res[i].name_img.split(",")[0]+'?refresh=<?php echo rand(1,999); ?>" class="card-img img-fluid" alt="" style="width: 100%; height: 200px !important; object-fit: cover;">';

      }

      content_info_window+='</div>';

      content_info_window+=
      '<div class="card-body text-center" style="padding: 0.25rem;">'+
          '<div class="mb-0">'+
            '<h6 class="font-weight-semibold mb-0" style="word-wrap: break-word;"> <a class="text-default mb-0" data-abc="true">'+res[i].name_prod+'</a> </h6><label class="font-weight-semibold mb-0" style="word-wrap: break-word;"> <a class="text-muted" data-abc="true" >'+res[i].desc+'</a></label>'+
          '</div>'+
          '<h3 class="mb-0 font-weight-semibold">'+res[i].price+' €</h3>'+
          '<div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>'+
          '<div class="text-muted mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">'+cat+'</div>'+
          '<div class="text-muted mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">@lang("bookmap/lang.seller") '+res[i].name_vendor+'</div>'+ 
          // '<div class="text-muted mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">'+res[i].place+'</div>'+ 
          '<div style="display:flex;">'+
            '<button style="flex-grow:1;margin: 5px;" type="button" class="btn btn-warning" onclick="'+button_edit+'"><i class="bx bx-edit"></i></button>'+
            '<button style="flex-grow:1;margin: 5px;" type="button" class="btn btn-primary" onclick="delete_prod(\''+numb+'\',\''+res[i].id+'\')"><i class="bx bxs-trash"></i></button>'+
          '</div>'+
        '</div>'+
      '</div>';

      $("#append_product_user").append(content_info_window);

    }

    $("#logo_loading").removeClass("rotate_logo_loading");
    
  }); 

}

var prod_file=[];
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
      prod_file=[];
      $(".append_image_clear").remove();
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
       
                var reader = new FileReader();

                reader.onload = function(event) {
                  
                    $($.parseHTML('<img class="append_image_clear" style="width: 100%; height: 200px; object-fit: cover;margin-bottom: 3px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);  

                }

                reader.readAsDataURL(input.files[i]);

                prod_file.push(input.files[i]);

            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
        
    });


});


function open_table_my_product(){


var num_height_body;
var num_height_div_exp;
var num_height_div_start;  
var num_height;

$("#table_product").DataTable({
  aaSorting: [],
  // responsive: true,
  responsive: {
            details: false
        },
  "bPaginate": true,
  "bLengthChange": false,
  "bFilter": true,
  "bInfo": true,
  "bAutoWidth": false,
  //appena carica la tabella esegue le funzioni dentro l'initicomplete
  "initComplete": function(settings, json) {


   num_height_div = $("#product_container").height();
   num_height_div_start = $("#start_product_container").height();
   num_height_body = $(".dataTables_scrollBody").height();
   num_height=num_height_div-num_height_div_start+num_height_body;
   num_height = parseFloat(num_height).toFixed(2)+"px";
   $(".dataTables_scrollBody").css("max-height",num_height);
   $(".dataTables_scrollBody").css("height",num_height);

  //permette di cambiare il testo del label
  $("#table_product_filter label").contents().eq(0).replaceWith('');
  $("#table_product_filter input").attr("placeholder","Search...");
  $("#table_product_filter").css({'display':'flex', 'flex-wrap':'nowrap', 'padding':'0'}).addClass("col-md-12 col-sm-12");
  $("#table_product_filter label").css("flex","1");

  $("#logo_loading").removeClass("rotate_logo_loading");
 
 },

 "scrollY":"0px",
 dom: 'Bfrtip',
 retrieve: true, 
 columnDefs: [
 {
  responsivePriority: 1,
  targets: 0
},
{
  responsivePriority: 2,
  targets: -1
}
]
});

// $("#navbar_searh_mobile_home .container").hide();
// $("#navbar_searh_desktop_home .container").hide();
// $("#map").css("height", "calc(100% - 78px)");

}




//autocomplete indirizzo
var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete(numb) {

  if (numb == undefined) {

    autocomplete = new google.maps.places.Autocomplete(

      (document.getElementById('prod_place')), {
        types: ['geocode']
      });

   
  } else{

    autocomplete = new google.maps.places.Autocomplete(

      (document.getElementById('autocomplete_'+numb)), {
        types: ['geocode']
      });

  }
  
}



//modifica prodotto desktop/cell
//numb=>serve per modificare html, id_prod per salvare i prodotti modificati
// function edit_input_prod(numb, id_vendor, id_prod, name, cat, desc, ean, qnt, price, place, name_img){

//   open_menu(3, numb, id_vendor, id_prod, name, cat, desc, ean, qnt, price, place, name_img); 

// }

function edit_input_prod(numb, id_vendor, id_prod, name, cat, desc, price, place, name_img){

  open_menu(3, numb, id_vendor, id_prod, name, cat, desc, price, place, name_img); 

}

//salva prodotto solo per desktop
//numb=>serve per modificare html, id_prod per salvare i prodotti modificati
function save_input_prod(numb, id_prod){

  var cat;
  var name_prod;
  var cat_prod;
  var desc_prod;
  // var ean_prod;
  // var qnt_prod;
  var price_prod;
  var place_prod;
  var prod_lat;
  var prod_lng;

  if (cat_prod==1) {

        cat="@lang('bookmap/lang.book')";

      }else if(cat_prod==2){

        cat="@lang('bookmap/lang.vehicles')";

      }else if(cat_prod==3){

        cat="@lang('bookmap/lang.technology')";

      }else if(cat_prod==4){

        cat="@lang('bookmap/lang.clothing')";

      }else if(cat_prod==5){

        cat="@lang('bookmap/lang.medicines')";

      }else if(cat_prod==6){

        cat="Sport";

      }else if(cat_prod==7){

        cat="@lang('bookmap/lang.properties')";

      }else if(cat_prod==8){

        cat="@lang('bookmap/lang.food_and_drink')";

      }else if(cat_prod==9){

        cat="Multimedia";

      }else if(cat_prod==10){

        cat="@lang('bookmap/lang.other')";

      }

     name_prod=$("#prod_name").val();
     cat_prod=$("#prod_cat").val();
     desc_prod=$("#prod_desc").val();
     // ean_prod=$("#prod_ean").val();
     // qnt_prod=$("#prod_giac").val();
     price_prod=$("#prod_price").val();
     place_prod=$("#prod_place").val();

     $(".prod_name_"+numb).text(name_prod);

  // $(".edit_button_"+numb).attr("onclick","edit_input_prod(\""+numb+"\",\""+id_prod+"\",\""+name_prod+"\",\""+cat_prod+"\",\""+desc_prod+"\",\""+ean_prod+"\",\""+qnt_prod+"\",\""+price_prod+"\",\""+place_prod+"\")");

  $(".edit_button_"+numb).attr("onclick","edit_input_prod(\""+numb+"\",\""+id_prod+"\",\""+name_prod+"\",\""+cat_prod+"\",\""+desc_prod+"\",\""+price_prod+"\",\""+place_prod+"\")");


  var geocoder = new google.maps.Geocoder();
  geocoder.geocode({address:place_prod,region:'no'},function(results,status){
    if(status.toLowerCase() == 'ok'){
      var coords = new google.maps.LatLng(results[0]['geometry']['location'].lat(),results[0]['geometry']['location'].lng());
      prod_lat=coords.lat();
      prod_lng=coords.lng();

      // $.get("/save_product_bookmap",{id_prod:id_prod, name_prod:name_prod, cat_prod:cat_prod, desc_prod:desc_prod, ean_prod:ean_prod, qnt_prod:qnt_prod, price_prod:price_prod, place_prod:place_prod, lat_prod:prod_lat, lng_prod:prod_lng},

      $.get("/save_product_bookmap",{id_prod:id_prod, name_prod:name_prod, cat_prod:cat_prod, desc_prod:desc_prod, price_prod:price_prod, place_prod:place_prod, lat_prod:prod_lat, lng_prod:prod_lng},
       function(data){

        var id_user="@if( auth()->guard('users_bookmap')->check() ){{ auth()->guard('users_bookmap')->user()->id}}@endif";
              
        const formData = new FormData();

        if (prod_file.length!=0) {

          for (var i = 0; i < prod_file.length; i++) {
            
            formData.append('prod_file[]', prod_file[i]);
            
          }

          formData.append('id_user', id_user);
          formData.append('id_prod', id_prod);
          setTimeout(function(){
            $.ajax({
              url : "bookmap_repo/add_product.php",
              type: 'POST',
              data : formData,
              processData: false, 
              contentType: false,  
              cache:false,
              success : function(e) {
                prod_file.name=0;
                
                $.get('/add_image_product_bookmap',{id_prod:id_prod, image_prod:e},
                function(data){
                  
                });
                
              },
              error: function (data, textStatus, errorThrown) {
              },
            });
          },2000);
          
        }

        $.notify({
          
          title: '<strong>Info</strong>',
          message: "<br>@lang('bookmap/lang.prod_updated')",
          
        },{
          
          element: 'body',
          type: "info",
          width: 'auto',
          allow_dismiss: true,
          offset: 20,
          placement: {
            from: "bottom",
            align: "center",
          }
        });

        change_vis('products');

      });

    }
    
  });

}




//cancellare prodotto utente
function delete_prod(numb, id_prod){

  if (confirm("Are you sure?")) {
    $.get("/delete_product_bookmap",{id_prod:id_prod},
     function(data){

      $(".tr_"+numb).remove();

      change_vis('products');

    });
  }
  return false;

}

</script>
