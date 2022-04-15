<style>

</style>
<section class="container-fluid" style="padding: 7%;">
    <h3 class="pb-5" style="font-family: 'Silk Serif', sans-serif;">Shopping Cart</h3>
    <div class="d-flex">
        <div class="d-flex" style="width:20%">
        </div>
        <div class="ml-5 d-flex flex-nowrap w-100">
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
    <div id="append_cart">

    </div>
    <div class="d-flex flex-nowrap">
        <div class="col-md-6 p-0"></div>
        <div class="col-md-6 p-0">
            <div class="d-flex flex-nolwrap">
                <p class="flex-grow-1">Total</p>
                <p id="total_cart">€ 0,00</p>
            </div>
            <div class="d-flex flex-nolwrap">
                <button id="" class="btn btn-primary text-left w-100 mr-3" onclick="change_vis('shopmyart')">
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1 m-0">Continue shopping</p>
                        <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                    </div>
                </button>
                <button class="btn btn-primary text-left w-100" style="background-color:#CDB4B4!important">
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

        get_cart();

    }

    function get_cart(){

        $("#append_cart").empty();
        
        $.get("get_prod_cart_ileniadesign",{},
        function(data){

            var res=jQuery.parseJSON(data);
            var select_format;

            for (let i = 0; i < res.length; i++) {

                //seleziono il formato
                if (res[i].format==1) {
                    select_format="selected";
                } else if(res[i].format==2) {
                    select_format="selected";
                } else{
                    select_format="selected";
                }

                $("#append_cart").append('<div class="d-flex mb-4" id="tr_'+res[i].id+'">'+
                    '<div class="d-flex" style="width:20%">'+
                        '<img style="width: 35%!important;" class="img-corner mr-4" src="ileniadesign_repo/shopmyart/'+res[i].id_product+'/1.'+res[i].type_img+'">'+
                        '<h6 class="m-auto" style="font-family: Silk Serif, sans-serif;">'+res[i].name_product+'<p class="m-0 p-0" style="font-family: Silk Serif, sans-serif;">In dress</p></h6>'+
                    '</div>'+
                    '<div class="ml-5 d-flex flex-nowrap w-100" style="border-bottom: 2px #dbd3d3 solid;">'+
                        '<div class="flex-grow-1 m-auto" style="width:20%">'+
                            '<select class="styled-select" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;">'+
                                '<option value="1" '+select_format+'>A4</option>'+
                                '<option value="2" '+select_format+'>A3</option>'+
                                '<option value="3" '+select_format+'>A5</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="flex-grow-1 m-auto" style="width:20%">'+
                            '<select class="styled-select" style="border: transparent;font-family: Futura PT, sans-serif;font-size: 12px!important;white-space: nowrap;">'+
                                '<option value="1" selected>1</option>'+
                                '<option value="2">2</option>'+
                                '<option value="3">3</option>'+
                            '</select>'+
                        '</div>'+
                        '<div class="flex-grow-1 m-auto" style="width:20%">'+
                            '<p class="p-0 m-0" style="text-decoration: underline;text-underline-offset: 1px;color:#dbd3d3" onclick="delete_cart('+res[i].id+')">Remove</p>'+
                        '</div>'+
                        '<div class="flex-grow-2 m-auto">'+
                            '<p class="p-0 m-0 sum_cart">€ '+parseFloat(res[i].price).toFixed(2)+'</p>'+
                        '</div>'+
                    '</div>'+
                '</div>');

                sum_cart();

            }
            
        });
        
    }

    function sum_cart(){

        var sum_cart=0;

        $(".sum_cart").each(function(data){

            sum_cart+=parseFloat($(this).text().split("€ ")[1]);

        });
                
        $("#total_cart").text("€ "+sum_cart.toFixed(2));

    }

    function delete_cart(id_product){

        $.get('/delete_prod_cart_ileniadesign',{id_product:id_product},
        function(data){

            $("#tr_"+id_product).remove();
            
            sum_cart();

        });
    }

</script>