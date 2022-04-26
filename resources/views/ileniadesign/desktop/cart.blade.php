<style>
    #cart .styled-select{
        background-color: transparent;
    }
</style>
<section class="container-fluid" style="padding: 7%;">
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Shopping Cart</h3>
    <div class="d-flex">
        <div class="d-flex" style="width:20%">
        </div>
        <div class="ml-3 d-flex flex-nowrap w-100">
            <div class="flex-grow-1 m-auto" style="width:20%">
            <h5 style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Size</h5>
            </div>
            <div class="flex-grow-1 m-auto" style="width:20%">
            <h5 style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Quantity</h5>
            </div>
            <div class="flex-grow-1 m-auto" style="width:20%">
            </div>
            <div class="flex-grow-2 m-auto" >
            <h5 style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Price</h5>
            </div>
        </div>
    </div>
    <div class="mt-5 append_cart append_cart_cart">
    </div>
    <div class="d-flex flex-nowrap">
        <div class="col-md-6 p-0"></div>
        <div class="col-md-6 p-0">
            <div class="d-flex flex-nowrap">
                <p class="flex-grow-1">Total</p>
                <p class="total_cart">€ 0,00</p>
            </div>
            <div class="d-flex flex-nowrap">
                <button class="btn btn-primary text-left w-100 mr-3" onclick="change_vis('shopmyart')">
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1 m-0">Continue shopping</p>
                        <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                    </div>
                </button>
                <button onclick="change_vis('summary')" class="btn btn-primary text-left w-100" style="background-color:#CDB4B4!important">
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1 m-0">Checkout</p>
                        <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>
<script>

function start_function_cart(){
    
    get_cart("cart");
    
}

function get_cart(page){
    
    $(".append_cart").empty();
    
    $.get("get_prod_cart_ileniadesign",{},
    function(data){
        
        var res=jQuery.parseJSON(data);
        var select_format;
        var format;
        var color_remove;
        var title_image;
        
        for (let i = 0; i < res.length; i++) {

            if (res[i].price_a4==0) {

                format='d-none';

            } else if(res[i].price_a3==0){

                format='d-none';

            } else if(res[i].price_a5==0){

                format='d-none';

            } else {

                format='';

            } 

            if (page=="cart") {
                
                color_remove="#dbd3d3";
                title_image='<h6 class="ellipsis" style="font-family: Silk Serif, sans-serif; white-space: nowrap; margin: auto 0 auto 0;width: 75px;">'+res[i].name_product+'<p class="m-0 p-0" style="font-family: Silk Serif, sans-serif;">In dress</p></h6>';
                
            }else{
                
                color_remove="";
                title_image="";
                
            }
            
            $(".append_cart_"+page).append('<div class="d-flex mb-4" id="tr_'+res[i].id+'">'+
            '<div class="d-flex" style="width:20%">'+
            '<img onclick="change_vis(\'shopdetail_'+res[i].id_product+'\')" style="width: 55px!important;" class="img-corner mr-4" src="ileniadesign_repo/shopmyart/'+res[i].id_product+'/1.'+res[i].type_img+'">'+
            title_image+
            '</div>'+
            '<div class="ml-3 d-flex flex-nowrap w-100" style="border-bottom: 2px #dbd3d3 solid;">'+
            '<div class="flex-grow-1 m-auto" style="width:20%">'+
            '<select class="styled-select" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="select_format_'+res[i].id+'">'+
            '<option price="'+res[i].price_a4+'" value="1" class="'+format+'">A4</option>'+
            '<option price="'+res[i].price_a3+'" value="2" class="'+format+'">A3</option>'+
            '<option price="'+res[i].price_a5+'" value="3" class="'+format+'">A5</option>'+
            '</select>'+
            '</div>'+
            '<div class="flex-grow-1 m-auto" style="width:20%">'+
            '<select class="styled-select" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;" id="select_qnt_'+res[i].id+'">'+
            '<option value="1">1</option>'+
            '<option value="2">2</option>'+
            '<option value="3">3</option>'+
            '<option value="4">4</option>'+
            '<option value="5">5</option>'+
            '<option value="6">6</option>'+
            '<option value="7">7</option>'+
            '<option value="8">8</option>'+
            '<option value="9">9</option>'+
            '<option value="10">10</option>'+
            '<option value="11">11</option>'+
            '<option value="12">12</option>'+
            '<option value="13">13</option>'+
            '<option value="14">14</option>'+
            '<option value="15">15</option>'+
            '<option value="16">16</option>'+
            '<option value="17">17</option>'+
            '<option value="18">18</option>'+
            '<option value="19">19</option>'+
            '<option value="20">20</option>'+
            '</select>'+
            '</div>'+
            '<div class="flex-grow-1 m-auto" style="width:20%">'+
            '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:'+color_remove+'" onclick="delete_cart('+res[i].id+')">Remove</p>'+
            '</div>'+
            '<div class="flex-grow-2 m-auto">'+
            '<p class="p-0 m-0 sum_cart" id="single_sum_cart_'+res[i].id+'">€ '+parseFloat(res[i].price*res[i].qnt).toFixed(2)+'</p>'+
            '</div>'+
            '</div>'+
            '</div>');
            
            //selezionare formato
            $("#select_format_"+res[i].id).val(res[i].format).attr("selected");
            
            //selezionare quantità
            $("#select_qnt_"+res[i].id).val(res[i].qnt).attr("selected");
            
        }
        
        sum_cart();
        
        $(".styled-select").on("change",function(index){
            
            var id_cart=$(this).attr("id").split("_")[2];
            
            var price=$("#select_format_"+id_cart+" :selected").attr("price");
            
            var format=$("#select_format_"+id_cart+" :selected").val();
            
            var qnt=$("#select_qnt_"+id_cart+" :selected").val();
            
            $("#single_sum_cart_"+id_cart).text("€ "+parseFloat(price*qnt).toFixed(2));
            
            sum_cart();
        
            console.log("qnt");
            console.log(qnt);

            $.get("/update_prod_cart_ileniadesign",{id_cart:id_cart, price:price, format:format, qnt:qnt},
            function(data){
                
                console.log(data);

                get_count_cart();
                
            });
            
        });
        
    });
    
}

function sum_cart(){
    
    var sum_cart=0;
    var total_delivery=0;
    
    $(".sum_cart").each(function(data){
        
        sum_cart+=parseFloat($(this).text().split("€ ")[1]);
        
    });
    
    $(".total_cart").text("€ "+sum_cart.toFixed(2));
    total_delivery=parseFloat($(".total_delivery").text().split("€ ")[1]);
    total_definitive=sum_cart+total_delivery;

    $(".total_definitive").text("€ "+total_definitive.toFixed(2));
    
}

function delete_cart(id_product){
    
    $.get('/delete_prod_cart_ileniadesign',{id_product:id_product},
    function(data){
        
        $("#tr_"+id_product).remove();
        
        sum_cart();

        get_count_cart();
        
    });
}

</script>