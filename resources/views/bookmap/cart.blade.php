<style type="text/css">
  
</style>
<div id="cart_container" class="tab-content col-md-12" style="overflow: auto; flex: 1; position: absolute; right: 0; bottom: 0; left: 0; height: calc(100% - 78px)">  

  <div class="py-5 text-center">
    <h2>@lang('bookmap/lang.my_cart')</h2>
    <p class="lead">@lang('bookmap/lang.desc_cart')</p>
  </div>

  <div class="row">
    <div class="col-md-12 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">@lang('bookmap/lang.my_prefers')</span>
        <span class="badge badge-secondary badge-pill"></span>
      </h4>
      <ul id="list_prod_cart" class="list-group mb-3" style="height: 322px; overflow: overlay;">
      </ul>
    </div>
  </div>

</div>
<script type="text/javascript">
  
function start_function_cart(){
  get_cart_user();
}

//ottieni i prodotti del carrello con tutti i contenuti
  function get_cart_user(){

    $("#list_prod_cart").empty();
    $("#sum_cart").remove();

    $.get('/get_cart_bookmap',{},
      function(data){
        var sum_cart=0;
        var res=jQuery.parseJSON(data);

        if (res!=0) {

          for(var i=0; i<res.length; i++){

            var cat;
            var src;

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


            if (res[i].name_img=="") {

              src="img/bookmap/default_img.png?refresh=<?php echo rand(1,999); ?>";

            } else {

              src="img/bookmap/img_user/"+res[i].id_vendor+"/"+res[i].id+"/"+res[i].name_img.split(",")[0]+"?refresh=<?php echo rand(1,999); ?>";

            }

            if(window.matchMedia("(max-width: 767px)").matches){
              // The viewport is less than 768 pixels wide

              $("#list_prod_cart").append("<li class='list-group-item d-flex justify-content-between lh-condensed'>"+
              "<img src='"+src+"' style='width: 100px; height: 100px; object-fit: cover;' class='img-thumbnail'/>"+
              "<div>"+
              "<h6 class='my-0' style='white-space: nowrap; width: 70px;  overflow: hidden; text-overflow: ellipsis;'>"+res[i].name_prod+"</h6>"+
              "<small class='text-muted'>"+cat+"</small><br>"+
              "<small class='text-muted'>"+res[i].name_vendor+"</small>"+
              "</div>"+
              "<span class='text-muted'>€ "+res[i].price+"</span>"+
              "<i class='bx bx-chat mr-2' style='' onclick='contact_seller(\""+res[i].id_vendor+"\",\""+res[i].name_vendor+"\");'></i>"+
              "<i class='bx bxs-trash mr-2' style='color: #dc3545!important;' onclick='delete_prod_cart(\""+res[i].id+"\")'></i>"+
              "</li>");


            } else{
              // alert("This is a tablet or desktop.");
              $("#list_prod_cart").append("<li class='list-group-item d-flex justify-content-between lh-condensed'>"+
              "<img src='"+src+"' style='width: 100px; height: 100px; object-fit: cover;' class='img-thumbnail'/>"+
              "<div>"+
              "<h6 class='my-0'>"+res[i].name_prod+"</h6>"+
              "<small class='text-muted'>"+cat+"</small><br>"+
              "<small class='text-muted'>"+res[i].name_vendor+"</small>"+
              "</div>"+
              "<span class='text-muted'>€ "+res[i].price+"</span>"+
              "<i class='bx bx-chat mr-2' style='' onclick='contact_seller(\""+res[i].id_vendor+"\",\""+res[i].name_vendor+"\");'></i>"+
              "<i class='bx bxs-trash mr-2' style='color: #dc3545!important;' onclick='delete_prod_cart(\""+res[i].id+"\")'></i>"+
              "</li>");
              
            }  

          

            sum_cart += Number(res[i].price) << 0;

          } 


          $("#list_prod_cart").after("<div class='list-group-item d-flex justify-content-between' id='sum_cart'>"+
            "<span>@lang('bookmap/lang.total') (EUR)</span>"+
            "<strong>€ "+sum_cart+"</strong>"+
            "</div>");

          $("#logo_loading").removeClass("rotate_logo_loading");
        }


      });

  }


function delete_prod_cart(id_prod){

  $.get('/delete_prod_cart_bookmap',{id_prod:id_prod},
    function(data){
     get_cart_user();
     count_get_cart_user();
   });
}

</script>