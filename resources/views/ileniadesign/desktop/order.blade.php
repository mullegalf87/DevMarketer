<style>

</style>
<section class="container-fluid p-0" style="">
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
            <div class="d-flex flex-nowrap w-100 m-3" style="">
                <div class="w-50 m-auto" style="">
                    <p class="p-0 m-0 text-left">Id</p>
                </div>
                <div class="w-50 m-auto" style="">
                    <p class="p-0 m-0 text-left">Order</p>
                </div>
                <div class="w-50 m-auto" style="">
                    <p class="p-0 m-0 text-center">Quantity</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-center">Status</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-center">Delivery</p>
                </div>
                <div class="w-50 m-auto">
                    <p class="p-0 m-0 text-right">Price</p>
                </div>
            </div>
        </div>
        <div class="" id="append_order">
        </div>
    </div>

    <div id="list_prefer" class="d-none">
        <table class="table">
            <thead>
                <th>Order</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</th>
                <th>Info</th>
            </thead>
            <tbody class="" id="append_prefer">
            </tbody>
        </table>
    </div>

    <div id="list_profile" class="d-none">
        <h1>profilo</h1>
        <!-- <table class="table">
            <thead>
                <th>Order</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Date</th>
                <th>Info</th>
            </thead>
            <tbody class="mt-5" id="append_profile">
            </tbody>
        </table> -->
    </div>

</section>

<script>

    function start_function_order(){
        
        get_all_order();
        
    }

    var old_section="list_order";

    function change_vis_order(section){

        $("#"+old_section).addClass("d-none");
        $("."+old_section).css({"text-underline-offset": "5px","text-decoration": ""});

        old_section=section;

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
                '<div class="w-50 m-auto" style="" onclick="show_detail_myorder(\''+res[i].sold_id+'\')">'+
                '<p class="p-0 m-0 text-left">'+num+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" style="">'+
                '<p class="p-0 m-0 text-left" onclick="show_detail_myorder(\''+res[i].sold_id+'\')">'+res[i].sold_id+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" style="">'+
                '<p class="p-0 m-0 text-center">'+res[i].count_prod+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto">'+
                '<p '+url+' class="p-0 m-0 text-center" style="text-decoration: underline;text-underline-offset: 1px;">'+res[i].status+'</p>'+
                '</div>'+
                '<div class="w-50 m-auto" style="">'+
                '<p class="p-0 m-0 text-center">Delivery</p>'+
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
                    '<div class="w-50 m-auto" style="">'+
                    '<img style="width: 55px!important;" class="img-corner mr-4" src="ileniadesign_repo/shopmyart/'+res[i].id_product+'/1.'+res[i].type_img+'">'+
                    '</div>'+
                    '<div class="w-50 m-auto" style="">'+
                    '<p class="p-0 m-0">'+res[i].name_product+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto" style="">'+
                    '<p class="p-0 m-0 text-center">'+res[i].qnt+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto">'+
                    '<p class="p-0 m-0 text-center">'+format+'</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto">'+
                    '<p class="p-0 m-0 text-center">Gift</p>'+
                    '</div>'+
                    '<div class="w-50 m-auto">'+
                    '<p class="p-0 m-0 text-right">€ '+parseFloat(res[i].price*res[i].qnt).toFixed(2)+'</p>'+
                    '</div>'+
                    '</div>'+
                    '</div>');

                }

            });
        
        }

    }
</script>