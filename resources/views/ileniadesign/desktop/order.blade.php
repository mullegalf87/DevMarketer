<style>

</style>
<section class="container-fluid p-0" >
    <div class="col-md-12 p-0 mt-5 mb-5">
        <h4 class="text-center" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;">MY &amp; PROFILE</h4>
    </div>
    <div class="d-flex flex-nowrap w-100 mb-3">
        <h4 class="text-center flex-grow-1 list_order" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;text-underline-offset:5px; text-decoration:underline" onclick="change_vis_order('list_order')">ORDER</h4>
        <h4 class="text-center flex-grow-1 list_prefer" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_order('list_prefer')">PREFERS</h4>
        <h4 class="text-center flex-grow-1 list_profile" style="font-family: 'Futura PT', sans-serif;font-size: 13px!important;display: flex;align-items: center;justify-content: center;width: 5%;" onclick="change_vis_order('list_profile')">PROFILE</h4>
    </div>
    <div id="list_order" class="p-5">
        <div class="d-flex mb-3">
            <div class="d-flex flex-nowrap w-100 m-3" >
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-left">Id</p>
                </div>
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-center">Date</p>
                </div>
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-center">Order</p>
                </div>
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-center">Quantity</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-center">Status</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-center">Gift</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-center">Discount</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-center">Delivery</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-right">Total</p>
                </div>
            </div>
        </div>
        <div class="" id="append_order">
        </div>
    </div>

    <div id="list_prefer" class="d-none p-5">
        <div class="d-flex mb-3">
            <div class="d-flex flex-nowrap w-100 m-3" >
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-left">Image</p>
                </div>
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-left">Name</p>
                </div>
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-center"></p>
                </div>
                <div class="w-50 m-auto" >
                    <p class="p-0 m-0 text-right">Price</p>
                </div>
            </div>
        </div>
        <div class="" id="append_prefer">
        </div>
    </div>

    <div id="list_profile" class="d-none p-5">
        <div class="d-flex flex-nowrap h-100">
            <div class="col-md-5 p-0">
                <div class="text-center" style="position: absolute;">
                    <img class="m-auto" src="ileniadesign_repo/1.jpeg" style="width: 60%;">
                    <img class="img-corner" src="ileniadesign_repo/2.jpeg" style="width: 190px; object-fit: contain; pointer-events: none;position: absolute; bottom:-50px;right: 0;">
                </div>
                <div class="emblem" style="position: absolute;right: 0;bottom: 25px;">Ileniazitodesign-Ileniazitodesign-</div>
            </div>
            <div class="col-md-7 p-5">
                @if( auth()->guard('users_ileniadesign')->check() )
                <div class="d-flex flex-nowrap">
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="name" id="name_setting" placeholder="Name"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="lastname" id="lastname_setting"  placeholder="Lastname"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->lastname }}" required>
                    </div>
                </div>
                <div class="d-flex flex-nowrap">
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="email" id="email_setting"  placeholder="Email"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->email }}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="cell" id="cell_setting"  placeholder="Cell"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->cell }}" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control p-0" name="address" id="address_setting"  placeholder="Address"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->address }}" required>
                </div>
                <div class="d-flex flex-nowrap">
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0 locator_state" name="state" id="state_setting"  placeholder="State"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->state }}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="region" id="region_setting"  placeholder="Region"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->region }}" required>
                    </div>
                </div>
                <div class="d-flex flex-nowrap">
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="city" id="city_setting"  placeholder="City"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->city }}" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control p-0" name="zip" id="zip_setting"  placeholder="Zip"  style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" value="{{ auth()->guard('users_ileniadesign')->user()->zip }}" required>
                    </div>
                </div>
                @endif
                <div class="col-md-12">
                    <button onclick="send_data_setting()" class="btn btn-primary text-left mt-3 w-100 save_button">SALVA  <img style="position: absolute;right: 15px;top: 50%;transform: translateY(-50%);width: 5%;" src="ileniadesign_repo/long-arrow.png"></button>
                </div>
            </div>
        </div>
    </div>

</section>

<script>

    function start_function_order(){
        
        get_all_order();
        get_all_prefer();
        
    }

    var old_section_order="list_order";

    function change_vis_order(section){

        $("#"+old_section_order).addClass("d-none");
        $("."+old_section_order).css({"text-underline-offset": "5px","text-decoration": ""});

        old_section_order=section;

        $("#"+section).removeClass("d-none");
        $("."+section).css({"text-underline-offset": "5px","text-decoration": "underline"});
       
    }

    function get_all_order(){
    
        $("#append_order").empty();
        
        $.get("get_product_user_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            var format;
            var url;
            var num;

            for (let i = 0; i < res.length; i++) {

                num=i+1;
                format=res[i].format;

                if (res[i].status!="processing") {
                    url="href='https://www.poste.it/cerca/index.html?#/risultati-spedizioni/"+res[i].status+"'";
                }else{
                    url="";
                }

                $("#append_order").append('<div class="d-flex mb-3 tr_'+res[i].sold_id+'" style="background-color: #dbd3d3;">'+
                '<div class="d-flex flex-nowrap w-100 m-3">'+
                '<div class="w-50 m-auto"  onclick="show_detail_myorder(\''+res[i].sold_id+'\')">'+
                '<p class="p-0 m-0 text-left">'+num+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto"  onclick="show_detail_myorder(\''+res[i].sold_id+'\')">'+
                '<p class="p-0 m-0 text-center">'+formatDate(res[i].sold_date)+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" >'+
                '<p class="p-0 m-0 text-center" onclick="show_detail_myorder(\''+res[i].sold_id+'\')">'+res[i].sold_id+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" >'+
                '<p class="p-0 m-0 text-center">'+res[i].count_prod+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto">'+
                '<a '+url+' class="p-0 m-0 text-center" style="text-decoration: underline;text-underline-offset: 1px;">'+res[i].status+'</a>'+
                '</div>'+
                '<div class="w-50 m-auto" >'+
                '<p class="p-0 m-0 text-center">'+res[i].gift_applied+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" >'+
                '<p class="p-0 m-0 text-center">'+res[i].disc_applied+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" >'+
                '<p class="p-0 m-0 text-center">€ '+res[i].delivery_cost+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto">'+
                '<p class="p-0 m-0 text-right">€ '+parseFloat(res[i].sum_price).toFixed(2)+'</p>'+
                '</div>'+
                '</div>'+
                '</div>');

            }
        
        });

    }

    function show_detail_myorder(sold_id){

        $(".new_tr_"+sold_id).empty();

        if ($(".new_tr_"+sold_id).is(":visible")) {

            $(".new_tr_"+sold_id).hide();
            $(".new_tr_"+sold_id).remove();

        }else{

            $(".new_tr_"+sold_id).show();

            $.get("/show_detail_myorder_ileniadesign",{sold_id:sold_id},
            function(data){

                var res=jQuery.parseJSON(data);
                var format;
                var gift_applied;
                var gift_price_applied;
                var total_price_applied;

                for (var i = 0; i < res.length; i++) {

                    if (res[i].format==1) {
                        format="A4";
                    }else if(res[i].format==2){
                        format="A3";
                    }else{
                        format="A5";
                    }

                    $(".tr_"+res[i].sold_id).after('<div class="d-flex mb-3 new_tr_'+res[i].sold_id+'">'+
                    '<div class="d-flex flex-nowrap w-100 mr-3 ml-3">'+
                    '<div class="w-50 m-auto" >'+
                    '<img style="width: 55px!important;" class="img-corner mr-4" src="ileniadesign_repo/shopmyart/'+res[i].id_product+'/1.'+res[i].type_img+'">'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-center">'+res[i].name_product+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-center">€ '+parseFloat(res[i].price).toFixed(2)+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-center">'+res[i].qnt+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-center">'+format+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto">'+
                    '<p class="p-0 m-0 text-center"></p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-center"></p>'+
                    '</div>'+
                    '<div class="w-50 m-auto">'+
                    '<p class="p-0 m-0 text-center"></p>'+
                    '</div>'+
                    '<div class="w-50 m-auto">'+
                    '<p class="p-0 m-0 text-right">€ '+parseFloat(res[i].price_applied).toFixed(2)+'</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>');

                }

            });
        
        }

    }

    function get_all_prefer(){
        
        $("#append_prefer").empty();
        
        $.get("get_prefer_user_ileniadesign",{},
        function(data){
            
            var res=jQuery.parseJSON(data);
            
            for (let i = 0; i < res.length; i++) {
                
                $("#append_prefer").append('<div class="d-flex mb-3 tr_prefer_'+res[i].id_product+'">'+
                '<div class="d-flex flex-nowrap w-100 mr-3 ml-3">'+
                    '<div class="w-50 m-auto" >'+
                    '<img onclick="change_vis(\'shopdetail_'+res[i].id_product+'\')" style="width: 55px!important;" class="img-corner" src="ileniadesign_repo/shopmyart/'+res[i].id_product+'/1.'+res[i].type_img+'">'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-left">'+res[i].name_product+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p onclick="delete_prefer('+res[i].id_product+')" class="p-0 m-0 text-center" style="text-decoration: underline;text-underline-offset: 1px;color: #dbd3d3;">Remove</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" >'+
                    '<p class="p-0 m-0 text-right">€ '+parseFloat(res[i].price).toFixed(2)+'</p>'+
                    '</div>'+
                '</div>'+
                '</div>');
                
            }
            
        });
        
    }

    function delete_prefer(id_product){

        $.get("delete_prod_prefer_ileniadesign",{id_product:id_product},
        function(data){

            $(".bx-heart").css("color","black");
            $(".tr_prefer_"+id_product).remove();

        });

    }

    //invio dati user al db
    function send_data_setting(){

        var name_setting=$("#name_setting").val();
        var lastname_setting=$("#lastname_setting").val();
        var address_setting=$("#address_setting").val();
        var state_setting=$("#state_setting").val();
        var region_setting=$("#region_setting").val();
        var city_setting=$("#city_setting").val();
        var zip_setting=$("#zip_setting").val();
        var email_setting=$("#email_setting").val();
        var cell_setting=$("#cell_setting").val();

        $.get("/send_data_setting_ileniadesign",{name_setting:name_setting, lastname_setting:lastname_setting, address_setting:address_setting,state_setting:state_setting,region_setting:region_setting,city_setting:city_setting, zip_setting:zip_setting, email_setting:email_setting, cell_setting:cell_setting},
        function(data){
        
            $('.save_button').text("Saved!");

            setTimeout(function(){ 

            $('.save_button').text("Save");

            }, 2000);

        })
    }

</script>