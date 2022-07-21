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
                <button class="btn btn-primary text-left w-100 mr-3" onclick="change_vis('shopmyart_0');">
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1 m-0">Continue shopping</p>
                        <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                    </div>
                </button>
                <button onclick="{{$_SESSION['id']!='' ? 'change_vis(\'summary\')' : 'change_vis(\'login\'); check_page_from_to_login()'}}" class="btn btn-primary text-left w-100" style="background-color:#CDB4B4!important">
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

            if (res[i].price_a4==0 || res[i].price_a3==0 || res[i].price_a5==0) {

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
            
            $(".append_cart_"+page).append('<div class="d-flex mb-4 row_cart" id_cart='+res[i].id+' id="tr_'+res[i].id+'">'+
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

        //controlla se ci sono immagini da dare in omaggio
        gift_image();
        
        $(".styled-select").on("change",function(index){
            
            var id_cart=$(this).attr("id").split("_")[2];
            
            var price=$("#select_format_"+id_cart+" :selected").attr("price");
            
            var format=$("#select_format_"+id_cart+" :selected").val();
            
            var qnt=$("#select_qnt_"+id_cart+" :selected").val();
            
            $("#single_sum_cart_"+id_cart).text("€ "+parseFloat(price*qnt).toFixed(2));

            $.get("/update_prod_cart_ileniadesign",{id_cart:id_cart, price:price, format:format, qnt:qnt},
            function(data){

                get_count_cart();

                //controlla se ci sono immagini da dare in omaggio
                gift_image();
                
            });
            
        });
        
    });
    
}

//STEP_0)questa funzione ottiene il get del setting degli omaggi
function get_setting_gift(){

    var price_variable;
    var multiple_variable;
     var scriptUrl = "get_setting_gift_ileniadesign";

     $.ajax({
        url: scriptUrl,
        type: 'get',
        dataType: 'html',
        async: false,
        success: function(data) {
            var res=jQuery.parseJSON(data);
            if (res.length!=0) {
                price_variable=res[0].price;
                multiple_variable=res[0].multiple;
                format_variable=res[0].format;
            }
        } 
     });

     return [price_variable, multiple_variable, format_variable];

}

//STEP_1)questa funzione permette di stabilire gli omaggi
function gift_image(){
    
    var sum_cart=0;
    var qnt_gift=0;
    var total_gift=0;
    var setting_gift=get_setting_gift();
    var price_variable=setting_gift[0];
    var multiple_variable=setting_gift[1];
    var format_variable=setting_gift[2];
    var substract_from_multiple_variable=multiple_variable-1;

    $(".sum_cart").each(function(data){
        
        sum_cart+=parseFloat($(this).text().split("€ ")[1]);
        
    });
    
    $(".total_cart").text("€ "+sum_cart.toFixed(2));

    //ottengo di ogni riga nel summary le quantità e il prezzo, controllo se il prezzo è uguale alla variabile dei multipli e se sì aggiungo
    $(".row_cart").each(function(){

        var id_cart=$(this).attr("id_cart");
        var price=$("#select_format_"+id_cart+" :selected").attr("price");

        if (price==price_variable) {
        
            qnt_gift+=parseInt($("#select_qnt_"+id_cart+" :selected").val());

        }

    });
    
    //algoritmo per ottenere che i multipli di 3 e/o inferiori siano in omaggio
    //ottengo la quantità di 3 numeri a partire da quella riportata nel select e sottraggo di 2: es. 8-2=6
    //mi faccio un ciclo for che comprende da 6 a 8= 6-7-8, controllo infine che tra questi numeri ci sia il multiplo di 3
    for (let i = qnt_gift-substract_from_multiple_variable; i <= qnt_gift; i++) {
        
        if (i % multiple_variable == 0){
            
            qnt_gift=i;

            total_gift=price_variable*qnt_gift/multiple_variable;
        
            $(".total_gift").text("- € "+(total_gift).toFixed(2));
            $(".text_total_gift").text("Omaggio "+i/multiple_variable+" "+format_variable);
            
        }
        
    }

    $(".new_total").text("€ "+(sum_cart-total_gift).toFixed(2));

    apply_discount_code();
   
}

//STEP_2:questa funzione permette di applicare i codici sconto
function apply_discount_code(){
    
    var name_discount=$("#discount_code").val();
    var total_discount=0;
    
    $.get("apply_discount_ileniadesign",{name_discount:name_discount},
    function(data){
        total_discount=parseFloat($(".new_total").text().split("€ ")[1])/100*data;
        $(".total_discount").text("- € "+total_discount.toFixed(2));
        sum_cart();
    });
    
}

//STEP_3:questa funzione permette di stabilire il prezzo della spedizione ita o euro
$(document).on("click", ".radioSection",function () {
    $(this).find('input[type=radio]').prop('checked', true);
    $('.radioSection').removeClass('selected');
    $(this).addClass('selected');
    $(".total_delivery").text('€ '+$(this).find('input[type=radio]').val());
    sum_cart();
});

//STEP_4:questa funzione permette di stabilire il prezzo finale che passera su paypal
function sum_cart(){

    var new_total=parseFloat($(".new_total").text().split("€ ")[1]);

    var total_discount=parseFloat($(".total_discount").text().split("€ ")[1]);

    var total_delivery=parseFloat($(".total_delivery").text().split("€ ")[1]);
    
    var total_definitive=new_total-total_discount+total_delivery;

    $(".total_definitive").text("€ "+total_definitive.toFixed(2));

    return total_definitive.toFixed(2);
    
}

//STEP_5:questa funzione permette di passare il prezzo del total_definitive a paypal per pagare
paypal.Buttons({

    style: {
        shape: 'rect',
        color: 'blue',
        layout: 'vertical',
        label: 'paypal',
        },

    createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: sum_cart()
            }
            }]
        });
    },

    onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {

            var id_cart;
            var real_price;
            var object_real_price=[];

            var name_cart="{{$_SESSION['name']}}";
            var lastname_cart="{{$_SESSION['lastname']}}";
            var email_cart="{{$_SESSION['email']}}";
            var address_cart="{{$_SESSION['address']}}";
            var state_cart="{{$_SESSION['state']}}";
            var region_cart="{{$_SESSION['region']}}";
            var city_cart="{{$_SESSION['city']}}";
            var zip_cart="{{$_SESSION['zip']}}";
            var cell_cart="{{$_SESSION['cell']}}";

            var list_id_cart=[];

            var start_total=$(".total_cart").text().split("€ ")[1];
            var text_total_gift=$(".text_total_gift").text();
            var total_gift=$(".total_gift").text().split("€ ")[1];
            var new_total=$(".new_total").text().split("€ ")[1];
            var discount_cart=$("#discount_code").val();
            var total_discount=$(".total_discount").text().split("€ ")[1];
            var delivery=$(".total_delivery").text().split("€ ")[1];
            var end_total=$(".total_definitive").text().split("€ ")[1];

            $(".sum_cart").each(function(index){
                id_cart=this.id.split("single_sum_cart_")[1];
                real_price=$(this).text().split("€ ")[1];
                object_real_price.push({id_cart:id_cart, real_price:real_price});
            });

            $.get("/send_data_cart_ileniadesign",{discount_cart:discount_cart, object_real_price:object_real_price},
            function(data){

                //parte il wait nello step 5
                $("#make_payment").addClass("waitconf");
                $("#make_payment>strong").text("Wait...");

                var res=jQuery.parseJSON(data);
                
                for (var i = 0; i < res.length; i++) {
                    list_id_cart.push(res[i].id);
                }
                
                var form_data = new FormData();
                //summary image cart
                form_data.append('data', data);
                //summary data user
                form_data.append('name_cart', name_cart);
                form_data.append('lastname_cart', lastname_cart);
                form_data.append('cell_cart', cell_cart);
                form_data.append('email_cart', email_cart);
                form_data.append('address_cart', address_cart);
                form_data.append('state_cart', state_cart);
                form_data.append('region_cart', region_cart);
                form_data.append('city_cart', city_cart);
                form_data.append('zip_cart', zip_cart);
                //summary receipt
                form_data.append('start_total', start_total);
                form_data.append('text_total_gift', text_total_gift);
                form_data.append('total_gift', total_gift);
                form_data.append('new_total', new_total);
                form_data.append('discount_cart', discount_cart);
                form_data.append('total_discount', total_discount);
                form_data.append('delivery', delivery);
                form_data.append('end_total', end_total);
            
                $.ajax({

                    url : "/ileniadesign_repo/other_function/cart_ileniadesign.php",  
                    dataType: 'text',        
                    cache       : false,
                    contentType: false,
                    processData : false,
                    data: form_data,                  
                    type: 'POST',
                    async: true,
                    headers: {
                        "cache-control": "no-cache"
                    },
                    success: function(output){
            
                        $.get("/convert_sold_ileniadesign",{id_cart:list_id_cart, text_total_gift:text_total_gift, total_gift:total_gift, discount_cart:discount_cart, total_discount:total_discount, delivery:delivery},
                        function(data){
                            
                            $(document).ready(function(){
                                get_cart("cart");
                                get_count_cart();
                            });

                            var res=jQuery.parseJSON(data);
                            
                            $(".mkpay").addClass("d-none");
                            $("#ocpay").removeClass("d-none");
                            $("#num_order").text(res);

                            //rimuove il wait dallo step 5
                            $("#make_payment").removeClass("waitconf");
                            //aggiungi ordine confermato allo step 5
                            $("#make_payment>strong").text("Order confirmed");
                            $("#make_payment").addClass("okconf");
                            
                        });
                        
                    }
                    
                });
                
            });

        });
    }

}).render('#paypal-button');

// function test(){

//     var id_cart;
//     var real_price;
//     var object_real_price=[];

//     var name_cart="{{$_SESSION['name']}}";
//     var lastname_cart="{{$_SESSION['lastname']}}";
//     var email_cart="{{$_SESSION['email']}}";
//     var address_cart="{{$_SESSION['address']}}";
//     var state_cart="{{$_SESSION['state']}}";
//     var region_cart="{{$_SESSION['region']}}";
//     var city_cart="{{$_SESSION['city']}}";
//     var zip_cart="{{$_SESSION['zip']}}";
//     var cell_cart="{{$_SESSION['cell']}}";

//     var list_id_cart=[];

//     var start_total=$(".total_cart").text().split("€ ")[1];
//     var text_total_gift=$(".text_total_gift").text();
//     var total_gift=$(".total_gift").text().split("€ ")[1];
//     var new_total=$(".new_total").text().split("€ ")[1];
//     var discount_cart=$("#discount_code").val();
//     var total_discount=$(".total_discount").text().split("€ ")[1];
//     var delivery=$(".total_delivery").text().split("€ ")[1];
//     var end_total=$(".total_definitive").text().split("€ ")[1];

//     $(".sum_cart").each(function(index){
//         id_cart=this.id.split("single_sum_cart_")[1];
//         real_price=$(this).text().split("€ ")[1];
//         object_real_price.push({id_cart:id_cart, real_price:real_price});
//     });

//     $.get("/send_data_cart_ileniadesign",{discount_cart:discount_cart, object_real_price:object_real_price},
//     function(data){

//         //parte il wait nello step 5
//         $("#make_payment").addClass("waitconf");
//         $("#make_payment>strong").text("Wait...");

//         var res=jQuery.parseJSON(data);
        
//         for (var i = 0; i < res.length; i++) {
//             list_id_cart.push(res[i].id);
//         }
        
//         var form_data = new FormData();
//         //summary image cart
//         form_data.append('data', data);
//         //summary data user
//         form_data.append('name_cart', name_cart);
//         form_data.append('lastname_cart', lastname_cart);
//         form_data.append('cell_cart', cell_cart);
//         form_data.append('email_cart', email_cart);
//         form_data.append('address_cart', address_cart);
//         form_data.append('state_cart', state_cart);
//         form_data.append('region_cart', region_cart);
//         form_data.append('city_cart', city_cart);
//         form_data.append('zip_cart', zip_cart);
//         //summary receipt
//         form_data.append('start_total', start_total);
//         form_data.append('text_total_gift', text_total_gift);
//         form_data.append('total_gift', total_gift);
//         form_data.append('new_total', new_total);
//         form_data.append('discount_cart', discount_cart);
//         form_data.append('total_discount', total_discount);
//         form_data.append('delivery', delivery);
//         form_data.append('end_total', end_total);
    
//         $.ajax({

//             url : "/ileniadesign_repo/other_function/cart_ileniadesign.php",  
//             dataType: 'text',        
//             cache       : false,
//             contentType: false,
//             processData : false,
//             data: form_data,                  
//             type: 'POST',
//             async: true,
//             headers: {
//                 "cache-control": "no-cache"
//             },
//             success: function(output){
    
//                 $.get("/convert_sold_ileniadesign",{id_cart:list_id_cart, text_total_gift:text_total_gift, total_gift:total_gift, discount_cart:discount_cart, total_discount:total_discount, delivery:delivery},
//                 function(data){
                    
//                     $(document).ready(function(){
//                         get_cart("cart");
//                         get_count_cart();
//                     });

//                     var res=jQuery.parseJSON(data);
                    
//                     $(".mkpay").addClass("d-none");
//                     $("#ocpay").removeClass("d-none");
//                     $("#num_order").text(res);

//                     //rimuove il wait dallo step 5
//                     $("#make_payment").removeClass("waitconf");
//                     //aggiungi ordine confermato allo step 5
//                     $("#make_payment>strong").text("Order confirmed");
//                     $("#make_payment").addClass("okconf");
                    
//                 });
                
//             }
            
//         });
        
//     });

// }

function delete_cart(id_product){
    
    $.get('/delete_prod_cart_ileniadesign',{id_product:id_product},
    function(data){
        
        $("#tr_"+id_product).remove();
        
        gift_image();

        get_count_cart();
        
    });
}

</script>